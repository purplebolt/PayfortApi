<?php

namespace LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization;

use \LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization\TokenizationInputInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\ResponseMessageInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\ResponseCodeInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\StatusInterface;
use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\CardBinInterface;

interface TokenizationInterface extends
    TokenizationInputInterface,
    ResponseMessageInterface,
    ResponseCodeInterface,
    StatusInterface,
    CardBinInterface{



}

