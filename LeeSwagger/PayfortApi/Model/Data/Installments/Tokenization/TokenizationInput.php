<?php

namespace LeeSwagger\PayfortApi\Model\Data\Installments\Tokenization;

use \LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization\TokenizationInputInterface;


use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\ServiceCommandTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\MerchantReferenceTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CardNumberTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\ExpiryDateTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CardHolderNameTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CardSecurityCodeTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\TokenNameTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\SignatureTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\RememberMeTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\ReturnUrlTrait;


class TokenizationInput extends \LeeSwagger\PayfortApi\Model\Data\Base
        implements TokenizationInputInterface{

    use ServiceCommandTrait;
    use MerchantReferenceTrait;
    use CardNumberTrait;
    use ExpiryDateTrait;
    use CardHolderNameTrait;
    use CardSecurityCodeTrait;
    use TokenNameTrait;
    use SignatureTrait;
    use RememberMeTrait;
    use ReturnUrlTrait;

}

