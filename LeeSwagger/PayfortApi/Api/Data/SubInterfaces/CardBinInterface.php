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

interface CardBinInterface{

    const CARD_BIN = 'card_bin';

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