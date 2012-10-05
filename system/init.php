<?php
/**
 * PokyMVC PHP Web Framework
 *
 * @author Burak YILDIZ
 * @date   02 September 2012
 */

class Init
{
  public $app;
  
  public function __construct()
  {
    $this->app = System::app();
  }
  
  public function __init()
  {
    $methods = get_class_methods($this);
    foreach ($methods as $m) {
      $pos = strpos($m, 'init');
      if ($pos !== false && $pos == 0) {
        $this->{$m}();
      }
    }
  }
}