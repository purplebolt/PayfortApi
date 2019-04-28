<?php

namespace LeeSwagger\PayfortApi\Api\Data\Installments\ThreeDSResponse;

use \LeeSwagger\PayfortApi\Api\Data\BaseInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\OutputAmountInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\ResponseCodeInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\OutputCardNumberInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CardHolderNameInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\SignatureInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\PaymentOptionInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\ExpiryDateInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CustomerIpInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\EciInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\FortIdInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CommandInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\ResponseMessageInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\MerchantReferenceInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\AuthorizationCodeInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CustomerEmailInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\TokenNameInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CurrencyInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\StatusInterface;


interface ThreeDSResponseInterface
    extends BaseInterface,
    OutputAmountInterface,
    ResponseCodeInterface,
    OutputCardNumberInterface,
    CardHolderNameInterface,
    SignatureInterface,
    PaymentOptionInterface,
    ExpiryDateInterface,
    CustomerIpInterface,
    EciInterface,
    FortIdInterface,
    CommandInterface,
    ResponseMessageInterface,
    MerchantReferenceInterface,
    AuthorizationCodeInterface,
    CustomerEmailInterface,
    TokenNameInterface,
    CurrencyInterface,
    StatusInterface{


}