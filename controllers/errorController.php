<?php

/**
* Este controlador nos maneja los mensajes de error que tengamos que mostrar al usuario y
*  tengamos que traer en el layout
*/

class errorController extends Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    //$this->_view->titulo = 'Error - '.APP_NAME;
    $this->_view->assign('titulo','Error - '.APP_NAME);
    //$this->_view->mensaje = $this->_getError();
    $this->_view->assign('mensaje',$this->_getError());
    $this->_view->renderizar('index');
  }

  public function access($codigo)
  {
    //$this->_view->titulo = 'Error - '.APP_NAME;
    $this->_view->assign('titulo','Error - '.APP_NAME);
    //$this->_view->mensaje = $this->_getError($codigo);
    $this->_view->assign('mensaje',$this->_getError($codigo));
    $this->_view->renderizar('access');
  }

  private function _getError($codigo = false)
  {

    if ($codigo) {
      $codigo = $this->filtrarInt($codigo);
      if (is_int($codigo)) {
        $codigo = $codigo;
      }
    } else {
      $codigo = 'default';
    }

    $error['default'] = 'Ha ocurrido un error y la página no puede mostrarse';
    $error['5050'] = 'Acceso Restringido';
    $error['8080'] = 'Tiempo de Sesión Expirado';

    if (array_key_exists($codigo, $error)) {
      return $error[$codigo];
    } else {
      return $error['default'];
    }

  }

}

?>
