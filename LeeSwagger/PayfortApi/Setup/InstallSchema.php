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

namespace LeeSwagger\PayfortApi\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $table_leeswagger_payfortapi_base = $setup->getConnection()->newTable($setup->getTable('leeswagger_payfortapi_base'));

        $table_leeswagger_payfortapi_base->addColumn(
            'base_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,],
            'Entity ID'
        );

        $table_leeswagger_payfortapi_base->addColumn(
            'access_code',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'access_code'
        );

        $table_leeswagger_payfortapi_base->addColumn(
            'merchant_identifier',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'merchant_identifier'
        );

        $table_leeswagger_payfortapi_base->addColumn(
            'issuer_code',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'issuer_code'
        );

        $table_leeswagger_payfortapi_base->addColumn(
            'language',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'language'
        );

        $setup->getConnection()->createTable($table_leeswagger_payfortapi_base);
    }
}
