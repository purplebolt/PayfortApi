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


namespace LeeSwagger\PayfortApi\Api\Data\SubInterfaces;

interface OutputCardNumberInterface{

    const CARD_NUMBER = 'card_number';

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
     * @param string $card_number
     *
     * @return $this
     **/
    public function setCardNumber($card_number);


}