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

interface SettlementReferenceInterface{

    const SETTLEMENT_REFERENCE = 'settlement_reference';

    /**
     * Gets acquirer Settlement description
     * title as displayed to merchant
     *
     * @return string
     */
    public function getSettlementReference();

    /**
     * sets acquirer Settlement description
     * title as displayed to merchant
     *
     * @param string $settlementReference
     *
     * @return $this
     */
    public function setSettlementReference($settlementReference);


}