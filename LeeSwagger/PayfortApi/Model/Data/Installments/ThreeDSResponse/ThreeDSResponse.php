<?php

namespace LeeSwagger\PayfortApi\Model\Data\Installments\ThreeDSResponse;

use \LeeSwagger\PayfortApi\Api\Data\Installments\ThreeDSResponse\ThreeDSResponseInterface;


use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\AmountTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\ResponseCodeTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CardNumberTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CardHolderNameTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\SignatureTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\PaymentOptionTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\ExpiryDateTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CustomerIpTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\EciTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\FortIdTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CommandTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\ResponseMessageTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\MerchantReferenceTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\AuthorizationCodeTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CustomerEmailTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\TokenNameTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CurrencyTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\StatusTrait;


class ThreeDSResponse extends \LeeSwagger\PayfortApi\Model\Data\Base
    implements ThreeDSResponseInterface{


    use AmountTrait;
    use ResponseCodeTrait;
    use CardNumberTrait;
    use CardHolderNameTrait;
    use SignatureTrait;
    use PaymentOptionTrait;
    use ExpiryDateTrait;
    use CustomerIpTrait;
    use EciTrait;
    use FortIdTrait;
    use CommandTrait;
    use ResponseMessageTrait;
    use MerchantReferenceTrait;
    use AuthorizationCodeTrait;
    use CustomerEmailTrait;
    use TokenNameTrait;
    use CurrencyTrait;
    use StatusTrait;

}
