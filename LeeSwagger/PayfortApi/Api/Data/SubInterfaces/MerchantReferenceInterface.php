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

interface MerchantReferenceInterface{

    const MERCHANT_REFERENCE = 'merchant_reference';

    /**
     * Gets Merchant Unique Reference
     *
     * @return string
     */
    public function getMerchantReference();

    /**
     * Sets Merchant Unique Reference
     *
     * @param string $merchantReference
     *
     * @return $this
     */
    public function setMerchantReference($merchantReference);



}