<?php
/**
 * This module's purpose is to allow API calls for Payfort's hosted Integration Endpoints
 * Copyright (C) 2019  Akinbami Yusuf
 *
 * This file included in LeeSwagger/PayfortApi is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\InstallmentDetail;

interface InstallmentDetailInterface
{

    const INSTALLMENT_DETAIL = 'installment_detail';
    const ISSUER_DETAIL = 'issuer_detail';

    /**
     * Get installment_detail
     * @return LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail\IssuerDetailInterface
     */
    public function getInstallmentDetail();

    /**
     * Set installment_detail
     * @param LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail\IssuerDetailInterface $installmentDetail
     * @return $this
     */
    public function setInstallmentDetail($installmentDetail);

}