<?php

namespace AHT\Stock\Model\ResourceModel\Stock\Grid;

use AHT\Stock\Model\Stock;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Psr\Log\LoggerInterface as Logger;

// class Collection extends \Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult
// {
//     /**
//      * Value of seconds in one minute
//      */
//     const SECONDS_IN_MINUTE = 60;

//     /**
//      * @var \Magento\Framework\Stdlib\DateTime\DateTime
//      */
//     protected $date;

//     /**
//      * @var Visitor
//      */
//     protected $visitorModel;
//     private $id;

//     /**
//      * @param EntityFactory $entityFactory
//      * @param Logger $logger
//      * @param FetchStrategy $fetchStrategy
//      * @param EventManager $eventManager
//      * @param string $mainTable
//      * @param string $resourceModel
//      * @param Visitor $visitorModel
//      * @param \Magento\Framework\Stdlib\DateTime\DateTime $date
//      */
//     public function __construct(
//         EntityFactory $entityFactory,
//         Logger $logger,
//         FetchStrategy $fetchStrategy,
//         EventManager $eventManager,
//         $mainTable,
//         $resourceModel,
//         Stock $stockModel,
//         \Magento\Framework\Stdlib\DateTime\DateTime $date
//     )
//     {
//         $this->date = $date;
//         $this->stockModel = $stockModel;
//         parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $mainTable, $resourceModel);
//     }
// }