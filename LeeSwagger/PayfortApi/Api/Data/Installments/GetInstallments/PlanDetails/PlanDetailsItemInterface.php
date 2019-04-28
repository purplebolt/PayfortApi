<?php
/**
 * This module's purpose is to allow API calls for Payfort's hosted Integration Endpoints
 * Copyright (C) 2019  Akinbami Yusuf
 *
 * This file included in LeeSwagger/PayfortApi is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails;

use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\InterestInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\RecurrentPayInterface;

interface PlanDetailsItemInterface extends InterestInterface, RecurrentPayInterface
{

    const MAXIMUM_AMOUNT = 'maximum_amount';
    const NUMBER_OF_INSTALLMENT = 'number_of_installment';
    const ADJUSTED_FEES_AMOUNT = 'adjusted_fees_amount';
    const FEES_TYPE = 'fees_type';
    const PROCESSING_FEES_TYPE = 'processing_fees_type';
    const FEE_DISPLAY_VALUE = 'fee_display_value';
    const FEES_AMOUNT = 'fees_amount';
    const PLAN_TYPE = 'plan_type';
    const PROCESSING_FEES_AMOUNT = 'processing_fees_amount';
    const CURRENCY_CODE = 'currency_code';
    const RATE_TYPE = 'rate_type';
    const PLAN_CODE = 'plan_code';
    const PLAN_MERCHANT_TYPE = 'plan_merchant_type';
    const MINIMUM_AMOUNT = 'minimum_amount';


    /**
     * Get plan_code
     * @return string|null
     */
    public function getPlanCode();

    /**
     * Set plan_code
     * @param string $planCode
     * @return $this
     */
    public function setPlanCode($planCode);

    /**
     * Get currency_code
     * @return string|null
     */
    public function getCurrencyCode();

    /**
     * Set currency_code
     * @param string $currencyCode
     * @return $this
     */
    public function setCurrencyCode($currencyCode);

    /**
     * Get number_of_installment
     * @return int|null
     */
    public function getNumberOfInstallment();

    /**
     * Set number_of_installment
     * @param int $numberOfInstallment
     * @return $this
     */
    public function setNumberOfInstallment($numberOfInstallment);

    /**
     * Get fees_type
     * @return string|null
     */
    public function getFeesType();

    /**
     * Set fees_type
     * @param string $feesType
     * @return $this
     */
    public function setFeesType($feesType);

    /**
     * Get fees_amount
     * @return int|null
     */
    public function getFeesAmount();

    /**
     * Set fees_amount
     * @param int $feesAmount
     * @return $this
     */
    public function setFeesAmount($feesAmount);

    /**
     * Get processing_fees_type
     * @return string|null
     */
    public function getProcessingFeesType();

    /**
     * Set processing_fees_type
     * @param string $processingFeesType
     * @return $this
     */
    public function setProcessingFeesType($processingFeesType);

    /**
     * Get processing_fees_amount
     * @return int|null
     */
    public function getProcessingFeesAmount();

    /**
     * Set processing_fees_amount
     * @param int $processingFeesAmount
     * @return $this
     */
    public function setProcessingFeesAmount($processingFeesAmount);

    /**
     * Get rate_type
     * @return string|null
     */
    public function getRateType();

    /**
     * Set rate_type
     * @param string $rateType
     * @return $this
     */
    public function setRateType($rateType);

    /**
     * Get plan_merchant_type
     * @return string|null
     */
    public function getPlanMerchantType();

    /**
     * Set plan_merchant_type
     * @param string $planMerchantType
     * @return $this
     */
    public function setPlanMerchantType($planMerchantType);

    /**
     * Get plan_type
     * @return string|null
     */
    public function getPlanType();

    /**
     * Set plan_type
     * @param string $planType
     * @return $this
     */
    public function setPlanType($planType);

    /**
     * Get fee_display_value
     * @return int|null
     */
    public function getFeeDisplayValue();

    /**
     * Set fee_display_value
     * @param int $feeDisplayValue
     * @return $this
     */
    public function setFeeDisplayValue($feeDisplayValue);

    /**
     * Get minimum_amount
     * @return int|null
     */
    public function getMinimumAmount();

    /**
     * Set minimum_amount
     * @param int $minimumAmount
     * @return $this
     */
    public function setMinimumAmount($minimumAmount);

    /**
     * Get maximum_amount
     * @return int|null
     */
    public function getMaximumAmount();

    /**
     * Set maximum_amount
     * @param int $maximumAmount
     * @return $this
     */
    public function setMaximumAmount($maximumAmount);

    /**
     * Get adjusted_fees_amount
     * @return int|null
     */
    public function getAdjustedFeesAmount();

    /**
     * Set adjusted_fees_amount
     * @param int $adjustedFeesAmount
     * @return $this
     */
    public function setAdjustedFeesAmount($adjustedFeesAmount);
}