<?php 

namespace LeeSwagger\PayfortApi\Api\Installments;

interface AuthorizationInterface{
	/**
	 * Gets Authorization Data for a transaction which includes the 3d Secure Url
     *
     * @param LeeSwagger\PayfortApi\Api\Data\Installments\Authorization\AuthorizationInputInterface $data
     *
     * @return LeeSwagger\PayfortApi\Api\Data\Installments\Authorization\AuthorizationInterface
    **/
	
	public function getAuthorization($data);
	
}
	
    