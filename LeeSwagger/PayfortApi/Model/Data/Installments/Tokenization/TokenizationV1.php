<?php

namespace LeeSwagger\PayfortApi\Model\Data\Installments\Tokenization;

class Tokenization extends \LeeSwagger\PayfortApi\Model\Data\Installments\Tokenization\TokenizationInput
    implements \LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization\TokenizationInterface{

    /**
     * {@inheritdoc}
     */
    public function getResponseMessage(){
        return $this->_getData(self::RESPONSE_MESSAGE);
    }

    /**
     * {@inheritdoc}
     */
    public function setResponseMessage($response_message){
        return $this->setData(self::RESPONSE_MESSAGE, $response_message);
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseCode(){
        return $this->_getData(self::RESPONSE_CODE);
    }

    /**
     * {@inheritdoc}
     */
    public function setResponseCode($response_code){
        return $this->setData(self::RESPONSE_CODE, $response_code);
    }

    /**
     * {@inheritdoc}
     */
    public function getStatus(){
        return $this->_getData(self::STATUS);
    }

    /**
     * {@inheritdoc}
     */
    public function setStatus($status){
        return $this->setData(self::STATUS, $status);
    }

    /**
     * {@inheritdoc}
     */
    public function getCardBin(){
        return $this->_getData(self::CARD_BIN);
    }

    /**
     * {@inheritdoc}
     */
    public function setCardBin($card_bin){
        return $this->setData(self::CARD_BIN, $card_bin);
    }

}
