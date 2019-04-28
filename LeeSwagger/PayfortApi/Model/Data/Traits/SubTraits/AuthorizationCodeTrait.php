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

Trait AuthorizationCodeTrait
{

    /**
     * {@inheritdoc}
     */
    public function getAuthorizationCode(){
        return $this->_getData(self::AUTHORIZATION_CODE);
    }

    /**
     * {@inheritdoc}
     */
    public function setAuthorizationCode($authorization_code){
        $this->setData(self::AUTHORIZATION_CODE, $authorization_code);
        return $this;
    }

}