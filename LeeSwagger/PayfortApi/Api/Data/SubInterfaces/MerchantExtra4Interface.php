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

interface MerchantExtra4Interface{

    const MERCHANT_EXTRA_4 = 'merchant_extra4';

    /**
     * gets Merchant Extra 4
     *
     * @return string
     *
     **/
    public function getMerchantExtra4();

    /**
     * sets Merchant Extra 4
     *
     * @param string $merchant_extra_4
     *
     * @return $this
     */
    public function setMerchantExtra4($merchant_extra_4);


}