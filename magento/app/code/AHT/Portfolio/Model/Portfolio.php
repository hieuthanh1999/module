<?php
namespace AHT\Portfolio\Model;

class Portfolio extends \Magento\Framework\Model\AbstractModel{
    const CACHE_TAG = 'aht_portfolio_post';

    protected $_cacheTag = 'aht_portfolio_post';

    protected $_eventPrefix = 'aht_portfolio_post';

	protected function _construct()
	{
		$this->_init('AHT\Portfolio\Model\ResourceModel\Portfolio');
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