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

namespace LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail;

interface IssuerDetailItemInterface
{

    const BANKING_SYSTEM = 'banking_system';
    const ISSUER_NAME_EN = 'issuer_name_en';
    const DISCLAIMER_MESSAGE_AR = 'disclaimer_message_ar';
    const TERMS_AND_CONDITION_EN = 'terms_and_condition_en';
    const CONFIRMATION_MESSAGE_EN = 'confirmation_message_en';
    const ISSUER_LOGO_EN = 'issuer_logo_en';
    const PROCESSING_FEES_MESSAGE_AR = 'processing_fees_message_ar';
    const FORMULA = 'formula';
    const COUNTRY_CODE = 'country_code';
    const ISSUER_NAME_AR = 'issuer_name_ar';
    const PROCESSING_FEES_MESSAGE_EN = 'processing_fees_message_en';
    const BIN = 'bin';
    const TERMS_AND_CONDITION_AR = 'terms_and_condition_ar';
    const ISSUER_CODE = 'issuer_code';
    const ISSUER_LOGO_AR = 'issuer_logo_ar';
    const CONFIRMATION_MESSAGE_AR = 'confirmation_message_ar';
    const PLAN_DETAILS = 'plan_details';

    /**
     * Get issuer_code
     * @return string|null
     */
    public function getIssuerCode();

    /**
     * Set issuer_code
     * @param string $issuerCode
     * @return $this
     */
    public function setIssuerCode($issuerCode);

    /**
     * Get issuer_name_ar
     * @return string|null
     */
    public function getIssuerNameAr();

    /**
     * Set issuer_name_ar
     * @param string $issuerNameAr
     * @return $this
     */
    public function setIssuerNameAr($issuerNameAr);

    /**
     * Get issuer_name_en
     * @return string|null
     */
    public function getIssuerNameEn();

    /**
     * Set issuer_name_en
     * @param string $issuerNameEn
     * @return $this
     */
    public function setIssuerNameEn($issuerNameEn);

    /**
     * Get terms_and_condition_ar
     * @return string|null
     */
    public function getTermsAndConditionAr();

    /**
     * Set terms_and_condition_ar
     * @param string $termsAndConditionAr
     * @return $this
     */
    public function setTermsAndConditionAr($termsAndConditionAr);

    /**
     * Get terms_and_condition_en
     * @return string|null
     */
    public function getTermsAndConditionEn();

    /**
     * Set terms_and_condition_en
     * @param string $termsAndConditionEn
     * @return $this
     */
    public function setTermsAndConditionEn($termsAndConditionEn);

    /**
     * Get country_code
     * @return string|null
     */
    public function getCountryCode();

    /**
     * Set country_code
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode);

    /**
     * Get issuer_logo_ar
     * @return string|null
     */
    public function getIssuerLogoAr();

    /**
     * Set issuer_logo_ar
     * @param string $issuerLogoAr
     * @return $this
     */
    public function setIssuerLogoAr($issuerLogoAr);

    /**
     * Get issuer_logo_en
     * @return string|null
     */
    public function getIssuerLogoEn();

    /**
     * Set issuer_logo_en
     * @param string $issuerLogoEn
     * @return $this
     */
    public function setIssuerLogoEn($issuerLogoEn);

    /**
     * Get banking_system
     * @return string|null
     */
    public function getBankingSystem();

    /**
     * Set banking_system
     * @param string $bankingSystem
     * @return $this
     */
    public function setBankingSystem($bankingSystem);

    /**
     * Get formula
     * @return string|null
     */
    public function getFormula();

    /**
     * Set formula
     * @param string $formula
     * @return $this
     */
    public function setFormula($formula);

    /**
     * Get plan_details
     * @return LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsItemInterface[]
     */
    public function getPlanDetails();

    /**
     * Set plan_details
     * @param LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsItemInterface[] $planDetails
     * @return \LeeSwagger\PayfortApi\Api\Data\IssuerDetailItemInterface
     */
    public function setPlanDetails($planDetails);

    /**
     * Get bin
     * @return string|null
     */
    public function getBin();

    /**
     * Set bin
     * @param string $bin
     * @return $this
     */
    public function setBin($bin);

    /**
     * Get confirmation_message_ar
     * @return string|null
     */
    public function getConfirmationMessageAr();

    /**
     * Set confirmation_message_ar
     * @param string $confirmationMessageAr
     * @return $this
     */
    public function setConfirmationMessageAr($confirmationMessageAr);

    /**
     * Get disclaimer_message_ar
     * @return string|null
     */
    public function getDisclaimerMessageAr();

    /**
     * Set disclaimer_message_ar
     * @param string $disclaimerMessageAr
     * @return $this
     */
    public function setDisclaimerMessageAr($disclaimerMessageAr);

    /**
     * Get processing_fees_message_ar
     * @return string|null
     */
    public function getProcessingFeesMessageAr();

    /**
     * Set processing_fees_message_ar
     * @param string $processingFeesMessageAr
     * @return $this
     */
    public function setProcessingFeesMessageAr($processingFeesMessageAr);

    /**
     * Get confirmation_message_en
     * @return string|null
     */
    public function getConfirmationMessageEn();

    /**
     * Set confirmation_message_en
     * @param string $confirmationMessageEn
     * @return $this
     */
    public function setConfirmationMessageEn($confirmationMessageEn);

    /**
     * Get processing_fees_message_en
     * @return string|null
     */
    public function getProcessingFeesMessageEn();

    /**
     * Set processing_fees_message_en
     * @param string $processingFeesMessageEn
     * @return $this
     */
    public function setProcessingFeesMessageEn($processingFeesMessageEn);
}