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

namespace LeeSwagger\PayfortApi\Model\Data\Traits\SubTraits;

Trait FortIdTrait
{

    /**
     * {@inheritdoc}
     */
    public function getFortId(){
        return $this->_getData(self::FORT_ID);
    }

    /**
     * {@inheritdoc}
     */
    public function setFortId($fort_id){
        $this->setData(self::FORT_ID, $fort_id);
        return $this;
    }

}