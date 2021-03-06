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

namespace LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits;

Trait MerchantExtra2Trait
{

    /**
     * {@inheritdoc}
     */
    public function getMerchantExtra2(){
        return $this->_getData(self::MERCHANT_EXTRA_2);
    }

    /**
     * {@inheritdoc}
     */
    public function setMerchantExtra2($merchant_extra_2){
        return $this->setData(self::MERCHANT_EXTRA_2, $merchant_extra_2);
    }
}