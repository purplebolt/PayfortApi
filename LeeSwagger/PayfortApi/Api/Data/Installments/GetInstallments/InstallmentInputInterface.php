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

use \LeeSwagger\PayfortApi\Api\Data\SubInterfaces\InputAmountInterface;

interface InstallmentInputInterface extends \LeeSwagger\PayfortApi\Api\Data\BaseInterface, InputAmountInterface
{

    const QUERY_COMMAND = 'query_command';

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


}