<?php
/**
 * PokyMVC PHP Web Framework
 *
 * @author Burak YILDIZ
 * @date   02 September 2012
 */

class ViewHelper
{
  public $config;
  
  public $app;
  
  public $view;
  
  public function __construct()
  {
    $this->app = System::app();
    $this->view = $this->app->view;
    if (isset($this->app->config[lcfirst(__CLASS__).'Config'])) {
      $this->config = $this->app->config[lcfirst(__CLASS__).'Config'];
    }
    
    $this->app->view->{__CLASS__} = $this;
  }
}