<?php

namespace AHT\Stock\Model\ResourceModel\Stock;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'aht_stock_collection';
	protected $_eventObject = 'stock_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('AHT\Stock\Model\Stock', 'AHT\Stock\Model\ResourceModel\Stock');
	}
}