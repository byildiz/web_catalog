<?php
/**
 * PokyMVC PHP Web Framework
 *
 * @author Burak YILDIZ
 * @date   02 September 2012
 */

class Helper
{
  public $config;
  
  public $app;
  
  public function __construct()
  {
    $this->app = System::app();
    if (isset($this->app->config[lcfirst(__CLASS__).'Config'])) {
      $this->config = $this->app->config[lcfirst(__CLASS__).'Config'];
    }
    
    $this->app->view->{__CLASS__} = $this;
  }
}