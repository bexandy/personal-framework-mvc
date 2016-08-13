<?php

class usuariosController extends Controller
{

  private $_usuarios;

  function __construct()
  {
    parent::__construct();
    $this->_usuarios = $this->loadModel('usuarios');
  }

  public function index()
  {
    $this->_view->assign('titulo', 'Administración de Usuarios - '.APP_NAME);
    $this->_view->assign('usuarios',$this->_usuarios->getUsuarios());
    $this->_view->renderizar('index');
  }

  public function permisos($usuarioID)
  {
    $id = $this->filtrarInt($usuarioID);

    if (!$id) {
      $this->redireccionar('usuarios');
    }

    if ($this->getInt('guardar') == 1) {
      $values = array_keys($_POST);
      $replace = array();
      $eliminar = array();

      for ($i=0; $i < count($values); $i++) {
        if (substr($values[$i],0,5) == 'perm_') {
          if ($_POST[$values[$i]] == 'x') {
            $eliminar[] = array(
              'usuario' => $id,
              'permiso' => substr($values[$i],-1)
              );
          } else {
            if ($_POST[$values[$i]] == 1) {
              $v = 1;
            } else {
              $v = 0;
            }
            $replace[] = array(
              'usuario' => $id,
              'permiso' => substr($values[$i],-1),
              'valor' => $v
              );
          }
        }
      }

      for ($i=0; $i < count($eliminar); $i++) {
        $this->_usuarios->eliminarPermiso(
          $eliminar[$i]['usuario'],
          $eliminar[$i]['permiso']
          );
      }

      for ($i=0; $i < count($replace); $i++) {
        $this->_usuarios->editarPermiso(
          $replace[$i]['usuario'],
          $replace[$i]['permiso'],
          $replace[$i]['valor']
          );
      }
    }

    $permisosUsuario = $this->_usuarios->getPermisosUsuario($id);
    $permisosRole = $this->_usuarios->getPermisosRole($id);

    if (!$permisosUsuario || !$permisosRole) {
      $this->redireccionar('usuarios');
    }

    $this->_view->assign('titulo', 'Permisos de Usuario - '.APP_NAME);
    $this->_view->assign('permisos',array_keys($permisosUsuario));
    $this->_view->assign('usuario',$permisosUsuario);
    $this->_view->assign('role',$permisosRole);
    $this->_view->assign('info',$this->_usuarios->getUsuario($id));
    /*echo '<pre>';
    echo '$permisos';print_r(array_keys($permisosUsuario));
    echo '$usuarios';print_r($permisosUsuario);
    echo '$role';print_r($permisosRole);
    echo '$info';print_r($this->_usuarios->getUsuario($id));exit;*/
    $this->_view->renderizar('permisos');

  }

}
?>
