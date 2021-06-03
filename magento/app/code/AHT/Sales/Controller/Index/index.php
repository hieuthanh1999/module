<?php

namespace AHT\Sales\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $_blockFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\AHT\Sales\Model\SalesFactory $blockFactory
	) {
		$this->_pageFactory  = $pageFactory;
		$this->_blockFactory = $blockFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
        $salesAgent = $this->_blockFactory->create();
             //add data table
         $data = [
            'entity_id' => "1",
            'order_id' => "1",
            'order_item_id'=> "1",
            'order_item_sku'=> "SKU test",
            'order_item_price'=> "28.000",
            'commission_type'=> "1",
            'commission_value'=> "2.000"
        ];
  
        $salesAgent->addData($data)->save();


    	var_dump($salesAgent->getData());


	// 	$collection = $salesAgent->getCollection();
	// 	foreach($collection as $item){
	// 		echo "<pre>";
	// 		print_r($item->getData());
	// 		echo "</pre>";
	// 	}
	exit();
	// 	return $this->_pageFactory->create();
	}
}
