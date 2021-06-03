<?php
namespace AHT\Stock\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    protected $_stockFactory;

    public function __construct(\AHT\Stock\Model\StockFactory $stockFactory)
    {
        $this->_stockFactory = $stockFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {

        $data = [
            'title' => "Test", 
            'images' => "test.jpg",
            'description'      => "description"
        ];
        $stock = $this->_stockFactory->create();
        $stock->addData($data)->save();
    }
}
?>