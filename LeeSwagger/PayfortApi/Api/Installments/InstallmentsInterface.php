<?php 

namespace LeeSwagger\PayfortApi\Api\Installments;

interface InstallmentsInterface{

    const QUERY_COMMAND = 'GET_INSTALLMENTS_PLANS';

	/**
	 * Returns installment data based on supplied information.
     *
     * @param \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\InstallmentInputInterface $data
     *
     * @return \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\InstallmentInterface
     *
     **/
	
	public function getInstallments($data);
	
}
	
    