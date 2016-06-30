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

namespace Avisota\Contao\Selectri\Model\Tree;

use Hofff\Contao\Selectri\Model\Tree\SQLAdjacencyTreeDataConfig;

/**
 * Class SQLAdjacencyTreeDataConfigWithItems
 *
 * @package Avisota\Contao\Selectri\Model\Tree
 */
class SQLAdjacencyTreeDataConfigWithItems extends SQLAdjacencyTreeDataConfig
{
    protected $itemCallback = null;

    /**
     * Get the item callback.
     * 
     * @return mixed
     */
    public function getItemCallback()
    {
        return $this->itemCallback;
    }

    /**
     * Set the item callback.
     * 
     * @param mixed $itemCallback
     */
    public function setItemCallback($itemCallback)
    {
        $this->itemCallback = $itemCallback;
    }
}
