<?php

namespace LeeSwagger\PayfortApi\Api\Data\Installments\Authorization;


use \LeeSwagger\PayfortApi\Api\Data\BaseInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CommandInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\MerchantReferenceInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\InputAmountInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CurrencyInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CustomerEmailInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\TokenNameInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\SignatureInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\PaymentOptionInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\EciInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\OrderDescriptionInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CardSecurityCodeInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CustomerIpInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CustomerNameInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\MerchantExtraInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\MerchantExtra1Interface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\MerchantExtra2Interface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\MerchantExtra3Interface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\MerchantExtra4Interface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\RememberMeInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\PhoneNumberInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\SettlementReferenceInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\ReturnUrlInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\PlanCodeInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\IssuerCodeInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\InstallmentsInterface;

interface AuthorizationInputInterface
    extends BaseInterface,
    CommandInterface,
    MerchantReferenceInterface,
    InputAmountInterface,
    CurrencyInterface,
    CustomerEmailInterface,
    TokenNameInterface,
    SignatureInterface,
    PaymentOptionInterface,
    EciInterface,
    OrderDescriptionInterface,
    CardSecurityCodeInterface,
    CustomerIpInterface,
    CustomerNameInterface,
    MerchantExtraInterface,
    MerchantExtra1Interface,
    MerchantExtra2Interface,
    MerchantExtra3Interface,
    MerchantExtra4Interface,
    RememberMeInterface,
    PhoneNumberInterface,
    SettlementReferenceInterface,
    ReturnUrlInterface,
    PlanCodeInterface,
    IssuerCodeInterface,
    InstallmentsInterface{

    const COMMAND_VALUE = 'PURCHASE';
    const INSTALLMENTS_VALUE = 'HOSTED';


}