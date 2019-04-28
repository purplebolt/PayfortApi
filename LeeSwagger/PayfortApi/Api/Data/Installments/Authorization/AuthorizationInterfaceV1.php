<?php

namespace LeeSwagger\PayfortApi\Api\Data\Installments\Authorization;

interface AuthorizationInterface
    extends \LeeSwagger\PayfortApi\Api\Data\Installments\Authorization\AuthorizationInputInterface{


    const FORT_ID =  'fort_id';
    const AUTHORIZATION_CODE = 'authorization_code';
    const RESPONSE_MESSAGE = 'response_message';
    const RESPONSE_CODE = 'response_code';
    const EXPIRY_DATE = 'expiry_date';
    const CARD_NUMBER = 'card_number';
    const STATUS = 'status';
    const CARD_HOLDER_NAME = 'card_holder_name';
    const THREE_DS_URL = '3ds_url';

    /**
     * gets Fort Id
     *
     * @return int
     *
     **/
    public function getFortId();

    /**
     * sets Fort Id
     *
     * @param int $fort_id
     *
     * @return $this
     *
     **/
    public function setFortId($fort_id);

    /**
     * gets Authorization Code Returned from third party
     *
     * @return string
     *
     **/
    public function getAuthorizationCode();

    /**
     * sets Authorization code returned from third party
     *
     * @param string $authorization_code
     *
     * @return $this
     *
     **/
    public function setAuthorizationCode($authorization_code);

    /**
     * gets Response message as returned by payfort
     *
     * @return string
     *
     **/
    public function getResponseMessage();

    /**
     * sets Response message as returned by payfort
     *
     * @param string $response_message
     *
     * @return $this
     *
     **/
    public function setResponseMessage($response_message);

    /**
     * gets Response code as returned by payfort
     *
     * @return int
     *
     **/
    public function getResponseCode();

    /**
     * sets Response code as returned by payfort
     *
     * @param int $response_code
     *
     * @return $this
     *
     **/
    public function setResponseCode($response_code);

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
     * Gets Card Number which can be between
     * 15 and 19 digits for the Transaction
     *
     * @return int
     **/
    public function getCardNumber();

    /**
     * Sets Card Number which can be between
     * 15 and 19 digits for the Transaction
     *
     * @param int $card_number
     *
     * @return $this
     **/
    public function setCardNumber($card_number);

    /**
     * Gets Response Status
     *
     * @return int
     **/
    public function getStatus();

    /**
     * Sets Response status
     *
     * @param int $status
     *
     * @return $this
     **/
    public function setStatus($status);

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
     * Gets 3ds Url
     *
     * @return string
     **/
    public function get3dsUrl();

    /**
     * Sets 3ds Url
     *
     * @param string $three_ds_Url
     *
     * @return $this
     **/
    public function set3dsUrl($three_ds_Url);

}