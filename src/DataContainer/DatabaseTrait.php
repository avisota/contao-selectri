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

namespace Avisota\Contao\Selectri\DataContainer;

use Contao\Database;

/**
 * Class DatabaseTrait
 *
 * @package Avisota\Contao\Selectri\DataContainer
 */
trait DatabaseTrait
{
    /**
     * @var Database
     */
    protected $database;

    /**
     * Get the Database.
     *
     * @return Database
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Set the database.
     *
     * @param Database $database
     */
    protected function setDatabase($database)
    {
        $this->database = $database;
    }
}
