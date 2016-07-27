<?php

/**
*  clase de donde se van a extender todos nuestros modelos
*/
class Model
{
  protected $_db;

  function __construct()
  {
    $this->_db = new Database();
  }
}
 ?>
