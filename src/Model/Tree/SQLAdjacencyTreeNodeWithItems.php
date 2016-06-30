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

use Hofff\Contao\Selectri\Model\Tree\SQLAdjacencyTreeNode;

/**
 * Class SQLAdjacencyTreeNodeWithItems
 *
 * @package Avisota\Contao\Selectri\Model\Tree
 */
class SQLAdjacencyTreeNodeWithItems extends SQLAdjacencyTreeNode
{
    protected $items = null;

    /**
     * Get the node data.
     *
     * @return array
     */
    public function getData()
    {
        if (!$callback = $this->data->getConfig()->getItemCallback()) {
            return $this->node;
        }

        $reflectionClass  = new \ReflectionClass($callback[0]);
        $reflectionObject = $reflectionClass->newInstance($this->data, $this->node);

        $buffer = call_user_func(
            array($reflectionObject, $callback[1]),
            $this->data->getWidget()->getValue()
        );
        if ($buffer) {
            $this->setItems($buffer);
        }

        return $this->node;
    }

    /**
     * Get node items.
     *
     * @return null
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Has node items.
     *
     * @return bool
     */
    public function hasItems()
    {
        if (!$this->getItems()) {
            return false;
        }

        return true;
    }

    /**
     * Set node items.
     *
     * @param null $items
     */
    protected function setItems($items)
    {
        $this->items = $items;
    }
}
