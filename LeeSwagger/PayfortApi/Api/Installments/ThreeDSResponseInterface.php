<?php 

namespace LeeSwagger\PayfortApi\Api\Installments;

interface ThreeDSResponseInterface{
	/**
	 * Handles Three D Secure URL verification request and response
     *
     * @param string $data
     *
     * @return \LeeSwagger\PayfortApi\Api\Data\Installments\ThreeDSResponse\ThreeDSResponseInterface
    **/
	
	public function getThreeDSResponse($data);
	
}