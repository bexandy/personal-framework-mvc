<?php

/**
*
*/
class aclModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function getRole($roleID)
  {
    $role = $this->_db->query("SELECT * FROM roles WHERE id_role = $roleID");
    return $role->fetch();
  }

  public function getRoles()
  {
    $role = $this->_db->query("SELECT * FROM roles");
    return $role->fetchAll();
  }

  public function getPermisosAll()
  {
    $permisos = $this->_db->query("SELECT * FROM permisos");
    $permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i < count($permisos); $i++) {
      if ($permisos[$i]['key'] == '') { continue;}
      $data[$permisos[$i]['key']] = array(
        'key' => $permisos[$i]['key'],
        'valor' => 'x',
        'nombre' => $permisos[$i]['permiso'],
        'id' => $permisos[$i]['id_permiso']
        );
    }

    return $data;
  }

  public function getPermisosRole($roleID)
  {
    $data = array();

    $permisos = $this->_db->query("SELECT * FROM permisos_role WHERE role = $roleID");
    $permisos = $permisos->fetchAll(PDO::FETCH_ASSOC);

    for ($i=0; $i < count($permisos); $i++) {
      $key = $this->getPermisoKey($permisos[$i]['permiso']);

      if ($key == '') { continue;}

      if ($permisos[$i]['valor'] == 1) {
        $v = 1;
      } else {
        $v = 0;
      }
      $data[$key] = array(
        'key' => $key,
        'valor' => $v,
        'nombre' => $this->getPermisoNombre($permisos[$i]['permiso']),
        'id' => $permisos[$i]['permiso']
        );
    }

    $data = array_merge($this->getPermisosAll(), $data);
    return $data;
  }

  public function eliminarPermisoRole($roleID, $permisoID)
  {
    $this->_db->query("DELETE FROM permisos_role ".
                  "WHERE role = $roleID AND permiso = $permisoID");
  }

  public function editarPermisoRole($roleID, $permisoID, $valor)
  {
    $this->_db->query("REPLACE INTO permisos_role ".
                  "SET role = $roleID, permiso = $permisoID, valor = '$valor'");
  }

  public function getPermisoKey($permisoID)
  {
    $permisoID = (int) $permisoID;

    $key = $this->_db->query(
      "SELECT `key` FROM permisos ".
      "WHERE id_permiso = {$permisoID}"
      );

    $key = $key->fetch();
    return $key['key'];
  }

  public function getPermisoNombre($permisoID)
  {
    $permisoID = (int) $permisoID;

    $key = $this->_db->query(
      "SELECT `permiso` FROM permisos ".
      "WHERE id_permiso = {$permisoID}"
      );

    $key = $key->fetch();
    return $key['permiso'];
  }

}

?>
