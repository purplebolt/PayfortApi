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

interface ThreeDSUrlInterface{

    const THREE_DS_URL = '3ds_url';

    /**
     * Gets 3ds Url
     *
     * @return string
     **/
    public function get3dsUrl();

    /**
     * Sets 3ds Url
     *
     * @param string $three_ds_Url
     *
     * @return $this
     **/
    public function set3dsUrl($three_ds_Url);
}