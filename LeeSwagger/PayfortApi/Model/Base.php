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

namespace LeeSwagger\PayfortApi\Model;

use LeeSwagger\PayfortApi\Api\Data\BaseInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;
use LeeSwagger\PayfortApi\Api\Data\BaseInterface;

class Base extends \Magento\Framework\Model\AbstractModel
{

    protected $dataObjectHelper;

    protected $_eventPrefix = 'leeswagger_payfortapi_base';
    protected $baseDataFactory;


    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param BaseInterfaceFactory $baseDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \LeeSwagger\PayfortApi\Model\ResourceModel\Base $resource
     * @param \LeeSwagger\PayfortApi\Model\ResourceModel\Base\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        BaseInterfaceFactory $baseDataFactory,
        DataObjectHelper $dataObjectHelper,
        \LeeSwagger\PayfortApi\Model\ResourceModel\Base $resource,
        \LeeSwagger\PayfortApi\Model\ResourceModel\Base\Collection $resourceCollection,
        array $data = []
    ) {
        $this->baseDataFactory = $baseDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve base model with base data
     * @return BaseInterface
     */
    public function getDataModel()
    {
        $baseData = $this->getData();
        
        $baseDataObject = $this->baseDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $baseDataObject,
            $baseData,
            BaseInterface::class
        );
        
        return $baseDataObject;
    }
}
