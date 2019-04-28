<?php


namespace LeeSwagger\PayfortApi\Model\Data\Installments\Authorization;

use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CommandTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\MerchantReferenceTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\AmountTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CurrencyTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CustomerEmailTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\TokenNameTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\SignatureTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\PaymentOptionTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\EciTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\OrderDescriptionTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CardSecurityCodeTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CustomerIpTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CustomerNameTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\MerchantExtraTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\MerchantExtra1Trait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\MerchantExtra2Trait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\MerchantExtra3Trait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\MerchantExtra4Trait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\RememberMeTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\PhoneNumberTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\SettlementReferenceTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\InstallmentsTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\PlanCodeTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\IssuerCodeTrait;
//Response
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\FortIdTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\AuthorizationCodeTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\ResponseMessageTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\ResponseCodeTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\ExpiryDateTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CardNumberTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\StatusTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CardHolderNameTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\ThreeDSUrlTrait;




class Authorization extends \LeeSwagger\PayfortApi\Model\Data\Base
        implements \LeeSwagger\PayfortApi\Api\Data\Installments\Authorization\AuthorizationInterface{


    use CommandTrait;
    use MerchantReferenceTrait;
    use AmountTrait;
    use CurrencyTrait;
    use CustomerEmailTrait;
    use TokenNameTrait;
    use SignatureTrait;
    use PaymentOptionTrait;
    use EciTrait;
    use OrderDescriptionTrait;
    use CardSecurityCodeTrait;
    use CustomerIpTrait;
    use CustomerNameTrait;
    use MerchantExtraTrait;
    use MerchantExtra1Trait;
    use MerchantExtra2Trait;
    use MerchantExtra3Trait;
    use MerchantExtra4Trait;
    use RememberMeTrait;
    use PhoneNumberTrait;
    use SettlementReferenceTrait;
    use InstallmentsTrait;
    use PlanCodeTrait;
    use IssuerCodeTrait;
//Response
    use FortIdTrait;
    use AuthorizationCodeTrait;
    use ResponseMessageTrait;
    use ResponseCodeTrait;
    use ExpiryDateTrait;
    use CardNumberTrait;
    use StatusTrait;
    use CardHolderNameTrait;
    use ThreeDSUrlTrait;
}