<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace AHT\Stock\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Upgrade the Catalog module DB scheme
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {   
        if (version_compare($context->getVersion(), '1.0.2', '<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable('aht_stock'),
                'price',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => 10,
                    'nullable' => false,
                    'default' => '',
                    'comment' => 'test'
                ]
            );
        }
        // if (version_compare($context->getVersion(), '1.0.2', '<')) {
        //     $setup->getConnection()->addColumn(
        //         $setup->getTable('AHT_Stock'),
        //         'content',
        //         [
        //             'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
        //             'length' => 100,
        //             'nullable' => true,
        //             'default' => '',
        //             'comment' => 'Content'
        //         ]
        //     );
        // }
        // if (version_compare($context->getVersion(), '1.0.3', '<')) {
        //     $setup->getConnection()->changeColumn(
        //         $setup->getTable('AHT_Stock'),
        //         'test',
        //         'price',
        //         [
        //             'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
        //             'length' => 100,
        //             'nullable' => true,
        //             'default' => '',
        //             'comment' => 'Price'
        //         ]
        //     );
        // }
        // if (version_compare($context->getVersion(), '1.0.4') < 0) {
        //     $img = $setup->getTable('AHT_Images');
        //     if ($setup->getConnection()->isTableExists($img) != true) {
        //         $tableImg = $setup->getConnection()
        //             ->newTable($img)
        //              ->addColumn(
        //         'image_id',
        //         \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
        //         null,
        //         [
        //             'identity' => true, 
        //             'unsigned' => true, 
        //             'nullable' => false, 
        //             'primary' => true
        //         ],
        //         'Image_id'
        //     )
        //     ->addColumn(
        //         'Stock_id',
        //         \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
        //         255,
        //         [
        //             'nullable' => true
        //         ],
        //             'StockId'
        //     )
        //     ->addColumn(
        //         'path',
        //         \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
        //         255,
        //         [
        //             'length' => 255,
        //             'nullable' => true,
        //             'default' => '',
        //             'comment' => 'Path_image_ 1'
        //         ],
        //             'path'
        //     )
        //     ->addColumn(
        //         'status',
        //         \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
        //         255,
        //         [
        //             'nullable' => true
        //         ],
        //             'Status'
        //     )
        //     ->setComment('AHT IMG')
        //     ->setOption('type', 'InnoDB')
        //     ->setOption('charset', 'utf8');
        //         $setup->getConnection()->createTable($tableImg);
        //     }
        // }
        $setup->endSetup();
    }

}