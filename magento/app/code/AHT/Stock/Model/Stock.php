<?php

namespace AHT\Stock\Model;


class Stock extends \Magento\Framework\Model\AbstractModel
{
	const CACHE_TAG         = 'stock';

	protected $_cacheTag    = 'stock';

	protected $_eventPrefix = 'stock';

	protected function _construct()
	{
		$this->_init('AHT\Stock\Model\ResourceModel\Stock');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
