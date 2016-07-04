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

namespace Avisota\Contao\Selectri;

use Hofff\Contao\Selectri\Exception\SelectriException;

/**
 * Class Widget
 *
 * @package Avisota\Contao\Selectri
 */
class Widget extends \Hofff\Contao\Selectri\Widget
{
    /**
     * Render children items.
     *
     * @param $level
     *
     * @return string
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    protected function renderChildren($level)
    {
        ob_start();
        include $this->getTemplate('avisota_selectri_with_items');
        return ob_get_clean();
    }

    /**
     * Unfold isn´t in use.
     *
     * @return null
     */
    public function getUnfolded()
    {
        return null;
    }

    /**
     * Unfold isn´t in use.
     *
     * @param array $unfolded
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function setUnfolded(array $unfolded)
    {
        // this widget don´t use the session
    }
}
