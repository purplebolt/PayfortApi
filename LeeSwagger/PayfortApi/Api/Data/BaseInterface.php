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

namespace LeeSwagger\PayfortApi\Api\Data;

interface BaseInterface
{

    const ACCESS_CODE = 'access_code';
    const MERCHANT_IDENTIFIER = 'merchant_identifier';
    const LANGUAGE = 'language';

    /**
     * Get access_code
     * @return string|null
     */
    public function getAccessCode();

    /**
     * Set access_code
     * @param string $accessCode
     * @return \LeeSwagger\PayfortApi\Api\Data\BaseInterface
     */
    public function setAccessCode($accessCode);

    /**
     * Get merchant_identifier
     * @return string|null
     */
    public function getMerchantIdentifier();

    /**
     * Set merchant_identifier
     * @param string $merchantIdentifier
     * @return \LeeSwagger\PayfortApi\Api\Data\BaseInterface
     */
    public function setMerchantIdentifier($merchantIdentifier);

    /**
     * Get language
     * @return string|null
     */
    public function getLanguage();

    /**
     * Set language
     * @param string $language
     * @return \LeeSwagger\PayfortApi\Api\Data\BaseInterface
     */
    public function setLanguage($language);
}
