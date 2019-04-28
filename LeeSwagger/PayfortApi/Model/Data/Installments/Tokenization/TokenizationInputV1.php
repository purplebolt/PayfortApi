<?php

namespace LeeSwagger\PayfortApi\Model\Data\Installments\Tokenization;

class TokenizationInput extends \LeeSwagger\PayfortApi\Model\Data\Base
        implements \LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization\TokenizationInputInterface{

    /**
     * {@inheritdoc}
     */
    public function getServiceCommand(){
        return $this->_getData(self::SERVICE_COMMAND);
    }

    /**
     * {@inheritdoc}
     */
    public function setServiceCommand($service_command){
        return $this->setData(self::SERVICE_COMMAND, $service_command);
    }

    /**
     * {@inheritdoc}
     */
    public function getMerchantReference(){
        return $this->_getData(self::MERCHANT_REFERENCE);
    }

    /**
     * {@inheritdoc}
     */
    public function setMerchantReference($merchant_reference){
        return $this->setData(self::MERCHANT_REFERENCE, $merchant_reference);
    }

    /**
     * {@inheritdoc}
     */
    public function getCardNumber(){
        return $this->_getData(self::CARD_NUMBER);
    }

    /**
     * {@inheritdoc}
     */
    public function setCardNumber($cardNumber){
        return $this->setData(self::CARD_NUMBER, $cardNumber);
    }

    /**
     * {@inheritdoc}
     */
    public function getExpiryDate(){
        return $this->_getData(self::EXPIRY_DATE);
    }

    /**
     * {@inheritdoc}
     */
    public function setExpiryDate($expiryDate){
        return $this->setData(self::EXPIRY_DATE, $expiryDate);
    }

    /**
     * {@inheritdoc}
     */
    public function getCardHolderName(){
        return $this->_getData(self::CARD_HOLDER_NAME);
    }

    /**
     * {@inheritdoc}
     */
    public function setCardHolderName($card_holder_name){
        return $this->setData(self::CARD_HOLDER_NAME, $card_holder_name);
    }

    /**
     * {@inheritdoc}
     */
    public function getCardSecurityCode(){
        return $this->_getData(self::CARD_SECURITY_CODE);
    }

    /**
     * {@inheritdoc}
     */
    public function setCardSecurityCode($card_security_code){
        return $this->setData(self::CARD_SECURITY_CODE, $card_security_code);
    }

    /**
     * {@inheritdoc}
     */
    public function getTokenName(){
        return $this->_getData(self::TOKEN_NAME);
    }

    /**
     * {@inheritdoc}
     */
    public function setTokenName($token_name){
        return $this->setData(self::TOKEN_NAME, $token_name);
    }

    /**
     * {@inheritdoc}
     */
    public function getSignature(){
        return $this->_getData(self::SIGNATURE);
    }

    /**
     * {@inheritdoc}
     */
    public function setSignature($signature){
        return $this->setData(self::SIGNATURE, $signature);
    }

    /**
     * {@inheritdoc}
     */
    public function getRememberMe(){
        return $this->_getData(self::REMEMBER_ME);
    }

    /**
     * {@inheritdoc}
     */
    public function setRememberMe($remember_me){
        return $this->setData(self::REMEMBER_ME, $remember_me);
    }

    /**
     * {@inheritdoc}
     */
    public function getReturnUrl(){
        return $this->_getData(self::RETURN_URL);
    }

    /**
     * {@inheritdoc}
     */
    public function setReturnUrl($return_url){
        return $this->setData(self::RETURN_URL, $return_url);
    }
}

