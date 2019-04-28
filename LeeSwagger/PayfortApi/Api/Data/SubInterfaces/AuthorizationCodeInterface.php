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

interface AuthorizationCodeInterface{

    const AUTHORIZATION_CODE = 'authorization_code';

    /**
     * gets Authorization Code Returned from third party
     *
     * @return string
     *
     **/
    public function getAuthorizationCode();

    /**
     * sets Authorization code returned from third party
     *
     * @param string $authorization_code
     *
     * @return $this
     *
     **/
    public function setAuthorizationCode($authorization_code);


}