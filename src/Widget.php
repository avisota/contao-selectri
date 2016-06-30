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
     * Generate the widget.
     *
     * @return string|void
     *
     * @throws \Hofff\Contao\Selectri\Exception\SelectriException
     */
    public function generate()
    {
        $data = $this->getData();
        if (!$data) {
            throw new SelectriException('no selectri data configuration set');
        }
        $data->validate();

        if (\Input::get('striID') == $this->strId) {
            $action = \Input::get('striAction');
            return $action ? $this->generateAjax($action) : '';
        }

        $GLOBALS['TL_JAVASCRIPT']['avisota-selectri.js'] = 'assets/avisota/selectri/js/selectri.js';
        $GLOBALS['TL_CSS']['selectri.css']               = 'system/modules/hofff_selectri/assets/css/selectri.css';

        $options = array(
            'name' => $this->getInputName(),
            'min'  => $this->getMinSelected(),
            'max'  => $this->getMaxSelected()
        );
        $options = array_merge($options, $this->getJSOptions());

        ob_start();
        include $this->getTemplate('avisota_selectri_container');
        return ob_get_clean();
    }

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
