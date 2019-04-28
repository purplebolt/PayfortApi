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

interface MerchantExtra3Interface{

    const MERCHANT_EXTRA_3 = 'merchant_extra3';

    /**
     * gets Merchant Extra 3
     *
     * @return string
     *
     **/
    public function getMerchantExtra3();

    /**
     * sets Merchant Extra 3
     *
     * @param string $merchant_extra_3
     *
     * @return $this
     */
    public function setMerchantExtra3($merchant_extra_3);


}