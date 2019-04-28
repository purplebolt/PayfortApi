<?php

namespace LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization;

interface TokenizationInterface extends
    \LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization\TokenizationInputInterface{


    const RESPONSE_MESSAGE = 'response_message';
    const RESPONSE_CODE = 'response_code';
    const STATUS = 'status';
    const CARD_BIN = 'card_bin';


    /**
     * Gets Response Message
     *
     * @return string
     */
    public function getResponseMessage();

    /**
     * Sets Response Message
     *
     * @param string $response_message
     *
     * @return $this
     */
    public function setResponseMessage($response_message);

    /**
     * Gets Response Code
     *
     * @return int
     */
    public function getResponseCode();


    /**
     * Sets Response Code
     *
     * @param int $response_code
     *
     * @return $this
     */
    public function setResponseCode($response_code);

    /**
     * Gets Status
     *
     * @return int
     **/
    public function getStatus();

    /**
     * Sets Status
     *
     * @param int $status
     *
     * @return $this
     */
    public function setStatus($status);


    /**
     * Gets Card Bin
     *
     * @return int
     */
    public function getCardBin();

    /**
     * Sets Card Bin
     *
     * @param int $card_bin
     *
     * @return $this
     */
    public function setCardBin($card_bin);

}

