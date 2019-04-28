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

interface IssuerCodeInterface{

    const ISSUER_CODE = 'issuer_code';

    /**
     * Gets issuer code
     *
     * @return string
     */
    public function getIssuerCode();

    /**
     * Sets issuer code
     *
     * @param string $issuer_code
     *
     * @return $this
     */
    public function setIssuerCode($issuer_code);

}