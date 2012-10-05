<?php
/**
 * PokyMVC PHP Web Framework
 *
 * @author Burak YILDIZ
 * @date   02 September 2012
 */

// edit $dbConfig and assign it to the return
// array variable to connect the database.
if (APPENV == 'beta') {
  $dbConfig = array(
    'host' => 'localhost',
    'username' => 'kullanici_adi', // database username for beta
    'password' => 'sifre',         // database password for beta
    'dbName' => 'veritabani_adi',  // database name for beta
    'tablePrefix' => 'poky',
  );
} else {
  $dbConfig = array(
    'host' => 'localhost',
    'username' => 'kullanici_adi', // database username
    'password' => 'sifre',         // database password
    'dbName' => 'veritabani_adi',  // database name
    'tablePrefix' => 'poky',
  );
}

return array(
  'dbConfig' => null,
  'viewConfig' => array(
    'layout' => 'layout.php',
    'dir' => APPDIR.'/views',
  ),
  'modelConfig' => array(
    'dir' => APPDIR.'/models',
  ),
  'loadPaths' => array(
    APPDIR.'/helpers',
    APPDIR.'/models',
  ),
  'autoLoad' => array(
    
  ),
);