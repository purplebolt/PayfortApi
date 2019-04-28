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

interface ResponseCodeInterface{

    const RESPONSE_CODE = 'response_code';

    /**
     * gets Response code as returned by payfort
     *
     * @return int
     *
     **/
    public function getResponseCode();

    /**
     * sets Response code as returned by payfort
     *
     * @param int $response_code
     *
     * @return $this
     *
     **/
    public function setResponseCode($response_code);


}