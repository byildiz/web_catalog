<?php
/**
 * PokyMVC PHP Web Framework
 *
 * @author Burak YILDIZ
 * @date   02 September 2012
 */

/**
 * Index Controller
 */
class IndexController extends Controller
{
  /**
   * index method
   *
   * This method shows app/views/index/idex.php file
   */
  public function index()
  {
    $this->view->show('index.php');
  }
}