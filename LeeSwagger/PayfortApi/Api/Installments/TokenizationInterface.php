<?php 

namespace LeeSwagger\PayfortApi\Api\Installments;

interface TokenizationInterface{
	/**
	 * Handles Tokenization request
     *
     * @param \LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization\TokenizationInputInterface $data
     *
     * @return \LeeSwagger\PayfortApi\Api\Data\Installments\Tokenization\TokenizationInterface
    **/
	
	public function getToken($data);
	
}