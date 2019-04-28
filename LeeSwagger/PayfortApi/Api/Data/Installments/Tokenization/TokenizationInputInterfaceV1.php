<?php

namespace LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization;

interface TokenizationInputInterface extends \LeeSwagger\PayfortApi\Api\Data\BaseInterface{


    const SERVICE_COMMAND = 'service_command';
    const MERCHANT_REFERENCE = 'merchant_reference';
    const CARD_NUMBER = 'card_number';
    const EXPIRY_DATE = 'expiry_date';
    const CARD_HOLDER_NAME = 'card_holder_name';
    const CARD_SECURITY_CODE = 'card_security_code';
    const TOKEN_NAME = 'token_name';
    const SIGNATURE = 'signature';
    const REMEMBER_ME = 'remember_me';
    const RETURN_URL = 'return_url';

    /**
     * Gets Service Command
     *
     * @return string
     **/
    public function getServiceCommand();

    /**
     * Sets Service Command
     *
     * @param string $service_command
     *
     * @return $this
     **/
    public function setServiceCommand($service_command);

    /**
     * Gets Merchant Reference
     *
     * @return string
     **/
    public function getMerchantReference();

    /**
     * Sets Merchant Reference
     *
     * @param string $merchant_reference
     *
     * @return $this
     **/
    public function setMerchantReference($merchant_reference);

    /**
     * Gets Card Number which can be between
     * 15 and 19 digits for the Transaction
     *
     * @return string
     **/
    public function getCardNumber();

    /**
     * Sets Card Number which can be between
     * 15 and 19 digits for the Transaction
     *
     * @param $cardNumber
     *
     * @return string
     **/
    public function setCardNumber($cardNumber);

    /**
     * Gets Card's expiry date
     *
     * @return int
     **/
    public function getExpiryDate();

    /**
     * Sets Card's expiry Date
     *
     * @param int $expiryDate
     *
     * @return $this
     **/
    public function setExpiryDate($expiryDate);

    /**
     * Gets Langauge For Transaction
     *
     * @return string
     **/
    public function getLanguage();

    /**
     * Sets Language For Transaction
     *
     * @param string $language
     *
     * @return $this
     **/
    public function setLanguage($language);

    /**
     * Gets Card Holder Name
     *
     * @return string
     **/
    public function getCardHolderName();

    /**
     * Sets Card Holder Name
     *
     * @param string $card_holder_name
     *
     * @return $this
     **/
    public function setCardHolderName($card_holder_name);

    /**
     * Gets Card Security Code
     *
     * @return int
     **/
    public function getCardSecurityCode();

    /**
     * Sets Card Security Code
     *
     * @param int $card_security_code
     *
     * @return $this
     **/
    public function setCardSecurityCode($card_security_code);


    /**
     * Gets Token Name
     *
     * @return string
     **/
    public function getTokenName();

    /**
     * Sets Token Name
     *
     * @param string $token_name
     *
     * @return $this
     **/
    public function setTokenName($token_name);


    /**
     * Gets Signature
     *
     * @return string
     **/
    public function getSignature();

    /**
     * Sets Signature
     *
     * @param string $signature
     *
     * @return $this
     **/
    public function setSignature($signature);

    /**
     * Gets Remember Me
     *
     * @return string
     **/
    public function getRememberMe();

    /**
     * Sets Remember Me
     *
     * @param string $remember_me
     *
     * @return $this
     **/
    public function setRememberMe($remember_me);

    /**
     * Gets Return Url
     *
     * @return string
     **/
    public function getReturnUrl();

    /**
     * Sets Return Url
     *
     * @param string $return_url
     *
     * @return $this
     **/
    public function setReturnUrl($return_url);
}

