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

/**
 * Register the templates
 */
TemplateLoader::addFiles(
    array
    (
        'avisota_selectri_container'  => 'system/modules/avisota-selectri/templates',
        'avisota_selectri_with_items' => 'system/modules/avisota-selectri/templates',
    )
);
