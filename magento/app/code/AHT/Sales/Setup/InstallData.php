<?php
namespace AHT\Sales\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;

class InstallData implements InstallDataInterface
{
    protected $_salesFactory;
    private $eavSetupFactory;

    public function __construct(\AHT\Sales\Model\SalesFactory $salesFactory, EavSetupFactory $eavSetupFactory)
    {
        $this->_salesFactory = $salesFactory;
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {

        //attribue Customer
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Customer\Model\Customer::ENTITY,
			'is_sales_agent',
			[
				'type'         => 'boolean',
				'label'        => 'Is sales agent',
				'input'        => 'text',
				'required'     => false,
				'visible'      => true,
				'user_defined' => true,
				'position'     => 999,
				'system'       => 0,
			]
		);
         //attribue Product
        $eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'sale_agent_id',
			[
				'type' => 'int',
				'backend' => '',
				'frontend' => '',
				'label' => 'Sale agent id',
				'input' => 'text',
				'class' => '',
				'source' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => false,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);
          //attribue Product
        $eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'commission_type',
			[
				'type' => 'int',
				'backend' => '',
				'frontend' => '',
				'label' => 'Commission type',
				'input' => 'text',
				'class' => '',
				'source' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => false,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);
         //attribue Product
        $eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'commission_value',
			[
				'type' => 'decimal',
				'backend' => '',
				'frontend' => '',
				'label' => 'Commission Value',
				'input' => 'text',
				'class' => '',
				'source' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => false,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => false,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);
      
    }
    
}
?>
