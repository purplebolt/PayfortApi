<?php 

namespace LeeSwagger\PayfortApi\Api\Signature;

interface PayfortSignatureInterface{
	/**
	* Generates signature based on input data supplied
     *
     * @param \LeeSwagger\PayfortApi\Api\Data\Signature\SignatureInputInterface $data
     *
     * @return string
    **/
	
	public function getSignature($data);
	
}
	
    