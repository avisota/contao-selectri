<?php

/**
 * Avisota newsletter and mailing system
 * Copyright © 2016 Sven Baumann
 *
 * PHP version 5
 *
 * @copyright  way.vision 2016
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @package    avisota/contao-selectri
 * @license    LGPL-3.0+
 * @filesource
 */

namespace Avisota\Contao\Selectri\Model\Flat;

use Hofff\Contao\Selectri\Model\Flat\SQLListDataConfig;

/**
 * Class SQLListDataGroupedConfig
 *
 * @package Avisota\Contao\Selectri\Model\Flat
 */
class SQLListDataGroupedConfig extends SQLListDataConfig
{
    private $itemsCallback = null;

    private $groupByParameter = null;

    /**
     * @return null
     */
    public function getItemsCallback()
    {
        return $this->itemsCallback;
    }

    /**
     * @param null $itemsCallback
     */
    public function setItemsCallback($itemsCallback)
    {
        $this->itemsCallback = $itemsCallback;
    }

    public function getOrderByExpr($clause = null)
    {
        if (!$this->getGroupByParameter()) {
            return parent::getOrderByExpr($clause);
        }

        return 'GROUP BY ' . $this->getGroupByParameter();
    }

    /**
     * @return mixed
     */
    public function getGroupByParameter()
    {
        return $this->groupByParameter;
    }

    /**
     * @param mixed $groupByExpr
     */
    public function setGroupByParameter($groupByExpr)
    {
        $this->groupByParameter = $groupByExpr;
    }
}
