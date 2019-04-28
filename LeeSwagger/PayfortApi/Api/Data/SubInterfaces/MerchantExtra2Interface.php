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

interface MerchantExtra2Interface{

    const MERCHANT_EXTRA_2 = 'merchant_extra2';

    /**
     * gets Merchant Extra 2
     *
     * @return string
     *
     **/
    public function getMerchantExtra2();

    /**
     * sets Merchant Extra
     *
     * @param string $merchant_extra_2
     *
     * @return $this
     */
    public function setMerchantExtra2($merchant_extra_2);


}