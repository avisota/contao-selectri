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

use Hofff\Contao\Selectri\Model\Tree\SQLAdjacencyTreeData;
use Hofff\Contao\Selectri\Model\Tree\Tree;

/**
 * Class SQLAdjacencyTreeDataWithItems
 *
 * @package Avisota\Contao\Selectri\Model\Tree
 */
class SQLAdjacencyTreeDataWithItems extends SQLAdjacencyTreeData
{
    /**
     * Create the widget node.
     *
     * @param Tree   $tree
     * @param string $key
     *
     * @return SQLAdjacencyTreeNodeWithItems
     */
    protected function createNode(Tree $tree, $key)
    {
        return new SQLAdjacencyTreeNodeWithItems($this, $tree, $key);
    }

    /**
     * Fetch tree nodes.
     *
     * @param array|null $keys
     * @param bool       $children
     * @param bool       $order
     * @param int        $limit
     *
     * @return array
     */
    protected function fetchTreeNodes(array $keys = null, $children = false, $order = false, $limit = PHP_INT_MAX)
    {
        $nodes = parent::fetchTreeNodes($keys, $children, $order, $limit);

        foreach ($nodes as &$node) {
            if (!array_key_exists('_isSelectable', $node)) {
                continue;
            }

            $node['_isSelectable'] = false;
        }

        return $nodes;
    }
}
