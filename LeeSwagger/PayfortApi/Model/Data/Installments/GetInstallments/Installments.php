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

namespace LeeSwagger\PayfortApi\Model\Data\Installments\GetInstallments;

use LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\InstallmentInterface;
use LeeSwagger\PayfortApi\Model\Data\Traits\BaseTrait;

class Installments extends \Magento\Framework\DataObject implements InstallmentInterface
{

    use BaseTrait;

    /**
     * {@inheritdoc}
     */
    public function getResponseCode()
    {
        return $this->_getData(self::RESPONSE_CODE);
    }

    /**
     * {@inheritdoc}
     */
    public function setResponseCode($responseCode)
    {
        return $this->setData(self::RESPONSE_CODE, $responseCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseMessage()
    {
        return $this->_getData(self::RESPONSE_MESSAGE);
    }

    /**
     * {@inheritdoc}
     */
    public function setResponseMessage($responseMessage)
    {
        return $this->setData(self::RESPONSE_MESSAGE, $responseMessage);
    }

    /**
     * {@inheritdoc}
     */
    public function getSignature()
    {
        return $this->_getData(self::SIGNATURE);
    }

    /**
     * {@inheritdoc}
     */
    public function setSignature($signature)
    {
        return $this->setData(self::SIGNATURE, $signature);
    }

    /**
     * {@inheritdoc}
     */
    public function getQueryCommand()
    {
        return $this->_getData(self::QUERY_COMMAND);
    }

    /**
     * {@inheritdoc}
     */
    public function setQueryCommand($queryCommand)
    {
        return $this->setData(self::QUERY_COMMAND, $queryCommand);
    }

    /**
     * {@inheritdoc}
     */
    public function getInstallmentDetail()
    {
        return $this->_getData(self::INSTALLMENT_DETAIL);
    }

    /**
     * {@inheritdoc}
     */
    public function setInstallmentDetail($issuerDetail)
    {
        return $this->setData(self::INSTALLMENT_DETAIL, $issuerDetail);
    }

    /**
     * {@inheritdoc}
     */
    public function getStatus()
    {
        return $this->_getData(self::STATUS);
    }

    /**
     * {@inheritdoc}
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }
}