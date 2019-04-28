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

namespace LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments;

interface InstallmentInterface extends \LeeSwagger\PayfortApi\Api\Data\BaseInterface
{

    const STATUS = 'status';
    const RESPONSE_CODE = 'response_code';
    const QUERY_COMMAND = 'query_command';
    const SIGNATURE = 'signature';
    const RESPONSE_MESSAGE = 'response_message';
    const INSTALLMENT_DETAIL = 'installment_detail';

    /**
     * Get response_code
     * @return string|null
     */
    public function getResponseCode();

    /**
     * Set response_code
     * @param string $responseCode
     * @return $this
     */
    public function setResponseCode($responseCode);


    /**
     * Get response_message
     * @return string|null
     */
    public function getResponseMessage();

    /**
     * Set response_message
     * @param string $responseMessage
     * @return $this
     */
    public function setResponseMessage($responseMessage);

    /**
     * Get signature
     * @return string|null
     */
    public function getSignature();

    /**
     * Set signature
     * @param string $signature
     * @return $this
     */
    public function setSignature($signature);

    /**
     * Get query_command
     * @return string|null
     */
    public function getQueryCommand();

    /**
     * Set query_command
     * @param string $queryCommand
     * @return $this
     */
    public function setQueryCommand($queryCommand);

    /**
     * Get installment_detail
     * @return LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail\IssuerDetailInterface
     */
    public function getInstallmentDetail();

    /**
     * Set installment_detail
     * @param LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\IssuerDetail\IssuerDetailInterface $issuerDetail
     * @return $this
     */
    public function setInstallmentDetail($issuerDetail);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return $this
     */
    public function setStatus($status);
}