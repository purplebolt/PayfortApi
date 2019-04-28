<?php

namespace LeeSwagger\PayfortApi\Model\Installments\Rates;

use \LeeSwagger\PayfortApi\Model\Installments\Rates\CalculateRates;
use \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\InstallmentInterface;
use \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsItemInterfaceFactory;

class AppendRates{

    /**
     * @var LeeSwagger\PayfortApi\Model\Installments\CalculateRates
     */
    protected $_ratesCalculator;

    /**
     * @var \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsItemInterfaceFactory
     */
    protected $_planDetailsItem;

    /**
     * @param \LeeSwagger\PayfortApi\Model\Installments\Rates\CalculateRates $ratesCalculator
     * @param \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsItemInterfaceFactory $planDetailsItem
     */
    public function __construct(CalculateRates $ratesCalculator,
                                PlanDetailsItemInterfaceFactory $planDetailsItem)
    {
        $this->_ratesCalculator = $ratesCalculator;
        $this->_planDetailsItem = $planDetailsItem;
    }

    /**
     * Inserts calculation parameters to data returned from Payfort's API
     *
     * @param InstallmentInterface $response
     * @param float $amount
     *
     * @return string
     **/
    public function append(InstallmentInterface $response, $amount){


        $issuerDetails = $response->getInstallmentDetail()->getIssuerDetail();

        foreach($issuerDetails as $issuer=>$data){
            $list = [];

            if(isset($data['plan_details']) && !empty($data['plan_details'])){

                foreach($data['plan_details'] as $planDetail){

                    $pd = $this->_planDetailsItem->create()->setData($planDetail);

                    $rates = $this->_ratesCalculator->getPlanValues($pd, $amount);

                    $pd->setInterest($rates['displayInterest']);
                    $pd->setMontlyAmount($rates['monthlyPay']);
                    $list[] = $pd;
                }

                $response->getInstallmentDetail()->getIssuerDetail()[$issuer]['plan_details'] = $list;

            }
            /*
            foreach ($data->plan_details as $key=>$details){
                if($details->fees_type === 'Fixed' && $details->rate_type === 'Flat'){


                    $response->installment_detail->issuer_detail[$issuer]
                        ->plan_details[$key]->adjusted_fees_amount= $details->fees_amount/100;

                }else if($details->fees_type === 'Percentage' && $details->rate_type === 'Flat'){

                    $response->installment_detail->issuer_detail[$issuer]
                        ->plan_details[$key]->adjusted_fees_amount= $details->fees_amount/100;
                }
            }*/
        }
        return $response;
    }



}