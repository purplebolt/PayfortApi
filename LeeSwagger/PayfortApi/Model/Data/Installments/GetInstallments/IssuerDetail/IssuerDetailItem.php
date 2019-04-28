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

namespace LeeSwagger\PayfortApi\Model\Data\Installments\GetInstallments\IssuerDetail;

use LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail\IssuerDetailItemInterface;

class IssuerDetailItem extends \Magento\Framework\DataObject implements IssuerDetailItemInterface
{

    /**
     * {@inheritdoc}
     */
    public function getIssuerCode()
    {
        return $this->_getData(self::ISSUER_CODE);
    }

    /**
     * {@inheritdoc}
     */
    public function setIssuerCode($issuerCode)
    {
        return $this->setData(self::ISSUER_CODE, $issuerCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getIssuerNameAr()
    {
        return $this->_getData(self::ISSUER_NAME_AR);
    }

    /**
     * {@inheritdoc}
     */
    public function setIssuerNameAr($issuerNameAr)
    {
        return $this->setData(self::ISSUER_NAME_AR, $issuerNameAr);
    }

    /**
     * {@inheritdoc}
     */
    public function getIssuerNameEn()
    {
        return $this->_getData(self::ISSUER_NAME_EN);
    }

    /**
     * {@inheritdoc}
     */
    public function setIssuerNameEn($issuerNameEn)
    {
        return $this->setData(self::ISSUER_NAME_EN, $issuerNameEn);
    }

    /**
     * {@inheritdoc}
     */
    public function getTermsAndConditionAr()
    {
        return $this->_getData(self::TERMS_AND_CONDITION_AR);
    }

    /**
     * {@inheritdoc}
     */
    public function setTermsAndConditionAr($termsAndConditionAr)
    {
        return $this->setData(self::TERMS_AND_CONDITION_AR, $termsAndConditionAr);
    }

    /**
     * {@inheritdoc}
     */
    public function getTermsAndConditionEn()
    {
        return $this->_getData(self::TERMS_AND_CONDITION_EN);
    }

    /**
     * {@inheritdoc}
     */
    public function setTermsAndConditionEn($termsAndConditionEn)
    {
        return $this->setData(self::TERMS_AND_CONDITION_EN, $termsAndConditionEn);
    }

    /**
     * {@inheritdoc}
     */
    public function getCountryCode()
    {
        return $this->_getData(self::COUNTRY_CODE);
    }

    /**
     * {@inheritdoc}
     */
    public function setCountryCode($countryCode)
    {
        return $this->setData(self::COUNTRY_CODE, $countryCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getIssuerLogoAr()
    {
        return $this->_getData(self::ISSUER_LOGO_AR);
    }

    /**
     * {@inheritdoc}
     */
    public function setIssuerLogoAr($issuerLogoAr)
    {
        return $this->setData(self::ISSUER_LOGO_AR, $issuerLogoAr);
    }

    /**
     * {@inheritdoc}
     */
    public function getIssuerLogoEn()
    {
        return $this->_getData(self::ISSUER_LOGO_EN);
    }

    /**
     * {@inheritdoc}
     */
    public function setIssuerLogoEn($issuerLogoEn)
    {
        return $this->setData(self::ISSUER_LOGO_EN, $issuerLogoEn);
    }

    /**
     * {@inheritdoc}
     */
    public function getBankingSystem()
    {
        return $this->_getData(self::BANKING_SYSTEM);
    }

    /**
     * {@inheritdoc}
     */
    public function setBankingSystem($bankingSystem)
    {
        return $this->setData(self::BANKING_SYSTEM, $bankingSystem);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormula()
    {
        return $this->_getData(self::FORMULA);
    }

    /**
     * {@inheritdoc}
     */
    public function setFormula($formula)
    {
        return $this->setData(self::FORMULA, $formula);
    }

    /**
     * {@inheritdoc}
     */
    public function getPlanDetails()
    {
        return $this->_getData(self::PLAN_DETAILS);
    }

    /**
     * {@inheritdoc}
     */
    public function setPlanDetails($planDetails)
    {
        return $this->setData(self::PLAN_DETAILS, $planDetails);
    }

    /**
     * {@inheritdoc}
     */
    public function getBin()
    {
        return $this->_getData(self::BIN);
    }

    /**
     * {@inheritdoc}
     */
    public function setBin($bin)
    {
        return $this->setData(self::BIN, $bin);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfirmationMessageAr()
    {
        return $this->_getData(self::CONFIRMATION_MESSAGE_AR);
    }

    /**
     * {@inheritdoc}
     */
    public function setConfirmationMessageAr($confirmationMessageAr)
    {
        return $this->setData(self::CONFIRMATION_MESSAGE_AR, $confirmationMessageAr);
    }

    /**
     * {@inheritdoc}
     */
    public function getDisclaimerMessageAr()
    {
        return $this->_getData(self::DISCLAIMER_MESSAGE_AR);
    }

    /**
     * {@inheritdoc}
     */
    public function setDisclaimerMessageAr($disclaimerMessageAr)
    {
        return $this->setData(self::DISCLAIMER_MESSAGE_AR, $disclaimerMessageAr);
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessingFeesMessageAr()
    {
        return $this->_getData(self::PROCESSING_FEES_MESSAGE_AR);
    }

    /**
     * {@inheritdoc}
     */
    public function setProcessingFeesMessageAr($processingFeesMessageAr)
    {
        return $this->setData(self::PROCESSING_FEES_MESSAGE_AR, $processingFeesMessageAr);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfirmationMessageEn()
    {
        return $this->_getData(self::CONFIRMATION_MESSAGE_EN);
    }

    /**
     * {@inheritdoc}
     */
    public function setConfirmationMessageEn($confirmationMessageEn)
    {
        return $this->setData(self::CONFIRMATION_MESSAGE_EN, $confirmationMessageEn);
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessingFeesMessageEn()
    {
        return $this->_getData(self::PROCESSING_FEES_MESSAGE_EN);
    }

    /**
     * {@inheritdoc}
     */
    public function setProcessingFeesMessageEn($processingFeesMessageEn)
    {
        return $this->setData(self::PROCESSING_FEES_MESSAGE_EN, $processingFeesMessageEn);
    }
}