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

namespace LeeSwagger\PayfortApi\Model\Data\Installments\GetInstallments\InstallmentDetail;

use \LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\InstallmentDetail\InstallmentDetailInterface;

class InstallmentDetail extends \Magento\Framework\DataObject implements InstallmentDetailInterface
{

    /**
     * {@inheritdoc}
     */
    public function getInstallmentDetail()
    {
        return $this->_getData(self::ISSUER_DETAIL);
    }

    /**
     * {@inheritdoc}
     */
    public function setInstallmentDetail($installmentDetail)
    {
        return $this->setData(self::ISSUER_DETAIL, $installmentDetail);
    }

}