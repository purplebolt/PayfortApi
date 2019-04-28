<?php


namespace LeeSwagger\PayfortApi\Model\Installments;


use \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\InstallmentInterface;
use \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail\IssuerDetailInterfaceFactory;
use \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail\IssuerDetailInterface;
use \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail\IssuerDetailItemInterfaceFactory;
use \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsItemInterface;
use \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsItemInterfaceFactory;
use \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsInterface;
use \LeeSwagger\PayfortApi\Model\Installments\Rates\CalculateRates;


class Installments extends \Magento\Framework\DataObject
    implements \LeeSwagger\PayfortApi\Api\Installments\InstallmentsInterface{

    /**
     * @var \LeeSwagger\PayfortApi\Model\ManageRequests;
     */
    protected $_requestManager;


    /**
     * @var \LeeSwagger\PayfortApi\Model\Signature\PayfortSignature;
     */
    protected $_payfortSignature;

    /**
     * @var \LeeSwagger\PayfortApi\Helper\Config\Data
     */
    protected $_payfortData;

    /**
     * @var \LeeSwagger\PayfortApi\Model\ParamInputs\BaseParamInputInterface
     */
    protected $_paramInput;

    /**
     * @var \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\InstallmentInterface
     */
    protected $_installmentDataObject;

    /**
     * @var \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\InstallmentInterface
     */
    protected $_dataObjectHelper;
    /**
     * @var \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail\IssuerDetailInterfaceFactory
     */
    protected $_issuerDetailDataObject;
    /**
     * @var \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail\IssuerDetailItemInterface
     */
    protected $_issuerDetailItemDataObject;
    /**
     * @var \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsInterface
     */
    protected $_planDetailDataObject;
    /**
     * @var \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsItemInterface
     */
    protected $_planDetailItemDataObject;
    /**
     * @var \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\InstallmentDetail\InstallmentDetailInterface
     */
    protected $_installmentDetailDataObject;
    /**
     * @var \LeeSwagger\PayfortApi\Model\Installments\Rates\CalculateRates
     */
    protected $_calculateRates;



	public function __construct(\LeeSwagger\PayfortApi\Model\ManageRequests $requestManager,
                                \LeeSwagger\PayfortApi\Model\Signature\PayfortSignature $payfortSignature,
                                \LeeSwagger\PayfortApi\Model\Config\ConfigDataInterface $payfortData,
                                \LeeSwagger\PayfortApi\Model\ParamInputs\BaseParamInputInterface $paramInput,
                                InstallmentInterface $installmentDataObject,
                                IssuerDetailInterfaceFactory $issuerDetailDataObject,
                                IssuerDetailItemInterfaceFactory $issuerDetailItemDataObject,
                                PlanDetailsItemInterfaceFactory $planDetailItemDataObject,
                                PlanDetailsInterface $planDetailDataObject,
                                CalculateRates $calculateRates,
                                \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\InstallmentDetail\InstallmentDetailInterface $installmentDetailDataObject,
                                \Magento\Framework\Api\DataObjectHelper $dataObjectHelper){

	    $this->_requestManager = $requestManager;

	    $this->_payfortSignature = $payfortSignature;

	    $this->_payfortData = $payfortData;

	    $this->_paramInput = $paramInput;

	    $this->_installmentDataObject = $installmentDataObject;

	    $this->_dataObjectHelper = $dataObjectHelper;

	    $this->_issuerDetailDataObject = $issuerDetailDataObject;

	    $this->_issuerDetailItemDataObject = $issuerDetailItemDataObject;

	    $this->_planDetailItemDataObject = $planDetailItemDataObject;

	    $this->_planDetailDataObject = $planDetailDataObject;

	    $this->_installmentDetailDataObject = $installmentDetailDataObject;

	    $this->_calculateRates = $calculateRates;

	}

    /**
     * {@inheritdoc}
     */
    public function getInstallments($input_data){

	    $endpoint = $this->_payfortData->getInstallmentEndpoint();
	    $input = $this->getAdditionalInput();
	    $allInput = $this->_paramInput->mergeInputParams(array_merge($input, $input_data->getData()));
        $amount = $input_data->getData('amount');

	    unset($allInput['amount']);

        $signedInput = $this->getSignedInput($allInput);

        $response = $this->_requestManager->sendRequest($signedInput, 'POST', $endpoint);
        $result = $this->_requestManager->getBodyMessage($response);

        try{
            $this->_dataObjectHelper->populateWithArray($this->_installmentDataObject,
                $result,
                InstallmentInterface::class);

            $list = [];
            $planDetailList = [];

            foreach ($result[InstallmentInterface::INSTALLMENT_DETAIL][IssuerDetailInterface::ISSUER_DETAIL] as $detail) {
                $issuerDetailItem = $this->_issuerDetailItemDataObject->create()->setData($detail);

                foreach ($issuerDetailItem->getPlanDetails() as $planDetail) {
                    $object = $this->_planDetailItemDataObject->create()->setData($planDetail);
                    $values = $this->_calculateRates->getPlanValues($object, $amount);

                    if(is_float($amount) || is_int($amount)){
                        $object->setRecurrentPay($values['monthlyPay']);
                        $object->setInterest($values['displayInterest']);
                    }
                    $planDetailList[] = $object;
                }
                $issuerDetailItem->setPlanDetails($planDetailList);

                $list[] = $issuerDetailItem;
            }

            $this->_installmentDataObject->getInstallmentDetail()->setIssuerDetail($list);
            return $this->_installmentDataObject;

        }catch(\Exception $exception){
            return $this->_installmentDataObject;
        }

    }

    public function getSignedInput($inputData){

	    $signature = $this->_payfortSignature->getSignature($inputData);
	    $signedData = $this->_payfortSignature->appendSignature($inputData, $signature);
	    return $signedData;
    }

    protected static function getAdditionalInput(){
        return [InstallmentInterface::QUERY_COMMAND=>self::QUERY_COMMAND];
    }
}