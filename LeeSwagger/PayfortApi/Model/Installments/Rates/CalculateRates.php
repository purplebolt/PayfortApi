<?php

namespace LeeSwagger\PayfortApi\Model\Installments\Rates;

use LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsItemInterface;

class CalculateRates extends \Magento\Framework\DataObject{

    /**
     * @param PlanDetailsItemInterface $planDetails
     * @param $amount
     * @return array
     */
    public function getPlanValues($planDetails, $amount){


        $data = $planDetails->getData();
        $interest = $data['fees_amount']/100;
        $duration = $data['number_of_installment'];
        $feesType = $data['fees_type'];
        $displayInterestValue = $data['fee_display_value'];

        if($feesType === "Fixed"){
            $monthlyPay = self::calculateFixedMonthlyRate($interest, $duration, $amount);
            $displayInterest = self::calculateFixedInterestDisplayValue($displayInterestValue);
        }
        else{
            $monthlyPay = self::calculatePercentageMonthlyRate($interest, $duration, $amount);
            $displayInterest = self::calculatePercentageInterestDisplayValue($displayInterestValue);
        }

    return compact('duration', 'displayInterest', 'monthlyPay');
    //return `${duration} months (${displayInterest}% Bank's Interest Rate) | ${monthlyPay}${currencyCode} per Month`

    }

    public static function calculateFixedInterestRate($interest){
        return $interest;
    }

    public static function calculatePercentageInterestRate($interest){
        return $interest;
    }

    public static function calculateFixedInterestDisplayValue($interest){
        $v = $interest/100;
        return round($v, 2);
    }

    public static function calculatePercentageInterestDisplayValue($interest){
        $v= $interest/100;
        return round($v, 2);
    }


    public static function calculateFixedMonthlyRate($interest, $duration, $amount){
        $v = ($amount+self::calculateFixedInterestRate($interest))/$duration;
        return round($v,2);
    }

    public static function calculatePercentageMonthlyRate($interest, $duration, $amount){
        $v = ($amount + ( $amount * self::calculatePercentageInterestRate($interest)/100 ) )/$duration;
        return round($v, 2);
    }
}