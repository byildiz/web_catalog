<?php
/**
 * PokyMVC PHP Web Framework
 *
 * @author Burak YILDIZ
 * @date   02 September 2012
 */

defined('DONTRUN')
  || define('DONTRUN', true);

include 'index.php';

error_reporting(E_ALL);

$get = filter_request($_GET);
$testDirPath = BASEDIR.'/tests';

if (isset($get['file']))
  $testFilePath = $testDirPath.'/'.$get['file'].'.php';
else
  $testFilePath = '';

if (!isset($get['file']) || !file_exists($testFilePath)) {
  if (isset($get['file'])) {
    echo '<p style="color: red">test file not found: '.$get['file'].'</p>';
  }
  $testDirHandle = opendir($testDirPath);
  while (($file = readdir($testDirHandle)) !== false) {
    if ($file != "." && $file != "..")
      echo '<a href="test.php?file='.array_shift(explode('.', $file)).'">'.$file.'</a>';
  }
} else {
  include $testFilePath;
}