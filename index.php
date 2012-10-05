<?php
/**
 * PokyMVC PHP Web Framework
 *
 * @author Burak YILDIZ
 * @date   02 September 2012
 */

defined('APPENV')
    || define('APPENV', (getenv('APPENV') ? getenv('APPENV') : 'release'));

(APPENV == 'release')
  || error_reporting(E_ALL);

defined('DS')
  || define('DS', DIRECTORY_SEPARATOR);

defined('BASEDIR')
  || define('BASEDIR', realpath(dirname(__FILE__)));

defined('APPDIR')
  || define('APPDIR', BASEDIR.DS.'app');

defined('SYSDIR')
  || define('SYSDIR', BASEDIR.DS.'system');

$paths = array(
  BASEDIR.'/libs',
  SYSDIR,
  get_include_path()
);
set_include_path(implode(PATH_SEPARATOR, $paths));

require_once SYSDIR.'/system.php';

$system = new System();

// lastly run the app
$system->run(APPDIR.'/config.php');