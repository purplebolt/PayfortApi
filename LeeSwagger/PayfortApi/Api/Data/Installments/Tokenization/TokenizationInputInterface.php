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


namespace LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization;

use \LeeSwagger\PayfortApi\Api\Data\BaseInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\ServiceCommandInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\MerchantReferenceInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\OutputCardNumberInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\ExpiryDateInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CardHolderNameInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CardSecurityCodeInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\TokenNameInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\SignatureInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\RememberMeInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\ReturnUrlInterface;



interface TokenizationInputInterface
    extends BaseInterface,
            ServiceCommandInterface,
            MerchantReferenceInterface,
            OutputCardNumberInterface,
            ExpiryDateInterface,
            CardHolderNameInterface,
            CardSecurityCodeInterface,
            TokenNameInterface,
            SignatureInterface,
            RememberMeInterface,
            ReturnUrlInterface {


}

