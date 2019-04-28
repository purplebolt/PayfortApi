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

namespace LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail;

interface IssuerDetailInterface
{

    const ISSUER_DETAIL = 'issuer_detail';

    /**
     * Get issuer_detail
     * @return LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail\IssuerDetailItemInterface[]
     */
    public function getIssuerDetail();

    /**
     * Set issuer_detail
     * @param LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail\IssuerDetailItemInterface[] $issuerDetail
     * @return $this
     */
    public function setIssuerDetail(array $issuerDetail);


}