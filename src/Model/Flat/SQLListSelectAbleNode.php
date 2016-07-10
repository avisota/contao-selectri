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

use Hofff\Contao\Selectri\Model\Flat\SQLListNode;

/**
 * Class SQLListSelectAbleNode
 *
 * @package Avisota\Contao\Selectri\Model\Flat
 */
class SQLListSelectAbleNode extends SQLListNode
{
    public function isSelectable()
    {
        return false;
    }

    public function hasSelectableDescendants()
    {
        return true;
    }
}
