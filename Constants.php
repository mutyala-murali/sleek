<?php

/* 
 * Copyright (C) 2017 Murali Mutyala
 * All rights are reserved under MIT license
 * ----------------------------------------------------------------------
 * Created on 09/02/2017 by muralimutyala
 * ----------------------------------------------------------------------
 */

/**----------------------------------------------------------------------
 *                  DATABASE CONSTANTS
 * ----------------------------------------------------------------------
 */

/**
 * Constant for DATABASE SERVER
 * @var string 
 */
defined('DB_SERVER') ? NULL : define('DB_SERVER', 'localhost');

/**
 * Constant for DATABASE PORT
 * @var integer 
 */
defined('DB_PORT') ? NULL : define('DB_PORT', 8889);

/**
 * Constant for DATABASE USER
 * @var string 
 */
defined('DB_USER') ? NULL : define('DB_USER', 'root');

/**
 * Constant for DATABASE PASSWORD
 * @var string 
 */
defined('DB_PASSWORD') ? NULL : define('DB_PASSWORD', 'root');

/**
 * Constant for DATABASE NAME
 * @var string 
 */
defined('DB_NAME') ? NULL : define('DB_NAME', 'sleek');


/**
 * --------------------------------------------------------------------------
 *                    website root constants
 * --------------------------------------------------------------------------
 */

/**
 * Directory separator
 */
define('DS', DIRECTORY_SEPARATOR);

/**
 * Web ROOT directory
 */
define('SITE_ROOT', __DIR__);


/**
 * Controllers Directory path
 */
define('CONTROLLERS', SITE_ROOT.DS.'app'.DS.'Controllers');

/**
 * Models Directory Path
 */
define('MODELS', SITE_ROOT.DS.'app'.DS.'Models');