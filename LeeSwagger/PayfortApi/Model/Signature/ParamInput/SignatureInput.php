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

namespace LeeSwagger\PayfortApi\Model\Signature\ParamInput;

use LeeSwagger\PayfortApi\Model\Data\Traits\BaseTrait;

class SignatureInput extends \Magento\Framework\DataObject
    implements \LeeSwagger\PayfortApi\Api\Data\Signature\SignatureInputInterface{

    use BaseTrait;

    /**
     * {@inheritdoc}
     **/
    public function getQueryCommand(){
        return $this->_getData(self::QUERY_COMMAND);
    }

    /**
     * {@inheritdoc}
     **/
    public function setQueryCommand($query_command){
        $this->setData(self::QUERY_COMMAND, $query_command);
        return $this;
    }

}