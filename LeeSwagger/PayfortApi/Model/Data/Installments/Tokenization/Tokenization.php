<?php

namespace LeeSwagger\PayfortApi\Model\Data\Installments\Tokenization;


use \LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization\TokenizationInterface;
use \LeeSwagger\PayfortApi\Model\Data\Installments\Tokenization\TokenizationInput;

use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\ResponseMessageTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\ResponseCodeTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\StatusTrait;
use \LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits\CardBinTrait;


class Tokenization extends TokenizationInput
    implements TokenizationInterface{

    use ResponseCodeTrait;
    use ResponseMessageTrait;
    use StatusTrait;
    use CardBinTrait;
}
