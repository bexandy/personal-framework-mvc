<?php

class ajaxController extends Controller
{

  private $_ajax;

  function __construct()
  {
    parent::__construct();
    $this->_ajax = $this->loadModel('ajax');
  }

  public function index()
  {
    $this->_view->assign('titulo','Ejemplo de Ajax - '.APP_NAME);
    $this->_view->setJS(array('ajax'));
    $this->_view->assign('paises',$this->_ajax->getPaises());
    $this->_view->renderizar('index');
  }

  public function getCiudades()
  {
    if ($this->getInt('pais')) {
      echo json_encode($this->_ajax->getCiudades($this->getInt('pais')));
    }
  }

  public function insertarCiudad()
  {
    if ($this->getInt('pais') && $this->getSql('ciudad')) {
      $this->_ajax->insertarCiudad(
                  $this->getSql('ciudad'),
                  $this->getSql('pais')
              );
    }
  }

}

 ?>
