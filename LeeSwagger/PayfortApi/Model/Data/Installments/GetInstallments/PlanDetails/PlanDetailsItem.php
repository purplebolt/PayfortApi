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

namespace LeeSwagger\PayfortApi\Model\Data\Installments\GetInstallments\PlanDetails;

use \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsItemInterface;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\InterestTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\RecurrentPayTrait;


class PlanDetailsItem extends \Magento\Framework\DataObject implements PlanDetailsItemInterface
{
    use InterestTrait;
    use RecurrentPayTrait;

    /**
     * {@inheritdoc}
     */
    public function getPlanCode()
    {
        return $this->_getData(self::PLAN_CODE);
    }


    /**
     * {@inheritdoc}
     */
    public function setPlanCode($planCode)
    {
        return $this->setData(self::PLAN_CODE, $planCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode()
    {
        return $this->_getData(self::CURRENCY_CODE);
    }


    /**
     * {@inheritdoc}
     */
    public function setCurrencyCode($currencyCode)
    {
        return $this->setData(self::CURRENCY_CODE, $currencyCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getNumberOfInstallment()
    {
        return $this->_getData(self::NUMBER_OF_INSTALLMENT);
    }


    /**
     * {@inheritdoc}
     */
    public function setNumberOfInstallment($numberOfInstallment)
    {
        return $this->setData(self::NUMBER_OF_INSTALLMENT, $numberOfInstallment);
    }

    /**
     * {@inheritdoc}
     */
    public function getFeesType()
    {
        return $this->_getData(self::FEES_TYPE);
    }

    /**
     * {@inheritdoc}
     */
    public function setFeesType($feesType)
    {
        return $this->setData(self::FEES_TYPE, $feesType);
    }

    /**
     * {@inheritdoc}
     */
    public function getFeesAmount()
    {
        return $this->_getData(self::FEES_AMOUNT);
    }

    /**
     * {@inheritdoc}
     */
    public function setFeesAmount($feesAmount)
    {
        return $this->setData(self::FEES_AMOUNT, $feesAmount);
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessingFeesType()
    {
        return $this->_getData(self::PROCESSING_FEES_TYPE);
    }

    /**
     * {@inheritdoc}
     */
    public function setProcessingFeesType($processingFeesType)
    {
        return $this->setData(self::PROCESSING_FEES_TYPE, $processingFeesType);
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessingFeesAmount()
    {
        return $this->_getData(self::PROCESSING_FEES_AMOUNT);
    }

    /**
     * {@inheritdoc}
     */
    public function setProcessingFeesAmount($processingFeesAmount)
    {
        return $this->setData(self::PROCESSING_FEES_AMOUNT, $processingFeesAmount);
    }

    /**
     * {@inheritdoc}
     */
    public function getRateType()
    {
        return $this->_getData(self::RATE_TYPE);
    }

    /**
     * {@inheritdoc}
     */
    public function setRateType($rateType)
    {
        return $this->setData(self::RATE_TYPE, $rateType);
    }

    /**
     * {@inheritdoc}
     */
    public function getPlanMerchantType()
    {
        return $this->_getData(self::PLAN_MERCHANT_TYPE);
    }

    /**
     * {@inheritdoc}
     */
    public function setPlanMerchantType($planMerchantType)
    {
        return $this->setData(self::PLAN_MERCHANT_TYPE, $planMerchantType);
    }

    /**
     * {@inheritdoc}
     */
    public function getPlanType()
    {
        return $this->_getData(self::PLAN_TYPE);
    }

    /**
     * {@inheritdoc}
     */
    public function setPlanType($planType)
    {
        return $this->setData(self::PLAN_TYPE, $planType);
    }

    /**
     * {@inheritdoc}
     */
    public function getFeeDisplayValue()
    {
        return $this->_getData(self::FEE_DISPLAY_VALUE);
    }

    /**
     * {@inheritdoc}
     */
    public function setFeeDisplayValue($feeDisplayValue)
    {
        return $this->setData(self::FEE_DISPLAY_VALUE, $feeDisplayValue);
    }

    /**
     * {@inheritdoc}
     */
    public function getMinimumAmount()
    {
        return $this->_getData(self::MINIMUM_AMOUNT);
    }

    /**
     * {@inheritdoc}
     */
    public function setMinimumAmount($minimumAmount)
    {
        return $this->setData(self::MINIMUM_AMOUNT, $minimumAmount);
    }

    /**
     * {@inheritdoc}
     */
    public function getMaximumAmount()
    {
        return $this->_getData(self::MAXIMUM_AMOUNT);
    }

    /**
     * {@inheritdoc}
     */
    public function setMaximumAmount($maximumAmount)
    {
        return $this->setData(self::MAXIMUM_AMOUNT, $maximumAmount);
    }

    /**
     * {@inheritdoc}
     */
    public function getAdjustedFeesAmount()
    {
        return $this->_getData(self::ADJUSTED_FEES_AMOUNT);
    }

    /**
     * {@inheritdoc}
     */
    public function setAdjustedFeesAmount($adjustedFeesAmount)
    {
        return $this->setData(self::ADJUSTED_FEES_AMOUNT, $adjustedFeesAmount);
    }


}