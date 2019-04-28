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

namespace LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails;

interface PlanDetailsInterface
{

    const PLAN_DETAILS = 'plan_details';

    /**
     * Get plan_details
     * @return LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsItemInterface[]
     */
    public function getPlanDetails();

    /**
     * Set plan_details
     * @param LeeSwagger\PayfortApi\Api\Data\Installments\GetInstallments\PlanDetails\PlanDetailsItemInterface[]
     * @return $this
     */
    public function setPlanDetails($planDetails);

}