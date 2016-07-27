<?php

/**
* Recibe y procesa la petición
*/

class Request
{
  private $_controlador;
  private $_metodo;
  private $_argumentos;

  public function __construct()
  {
    //echo $_GET['url'].'<br>';
    if (isset($_GET['url'])) {
        // Toma el parametro url via GET y lo devuelve filtrado
      $url = filter_input(INPUT_GET, 'url',FILTER_SANITIZE_URL);
     // var_dump($url);
     // echo "<br>";
        // Crea un arreglo con  los argumentos del url separados por '/' (controlador/metodo/argumentos)
      $url = explode('/', $url);
    //  var_dump($url);
        // Elimina todos los elementos no validos del arreglo
      $url = array_filter($url);
    //  var_dump($url);

            // array_shift extrae el primer elemento del arreglo y lo devuelve
      $this->_controlador = strtolower(array_shift($url));
        // el arreglo llega sin el primer elemento y asigna el siguiente a metodo
      $this->_metodo = strtolower(array_shift($url));
        // el resto de los elementos del areglo $url son asignados al argumento
      $this->_argumentos = $url;
    }

    //Si no se envia un controlador en la url, se asigna el controlador por defecto (definido en Config.php)
    if (!$this->_controlador) {
      $this->_controlador = DEFAULT_CONTROLLER;
    }

    //Si no se envia un metodo en la url, se asigna el metodo por defecto (index)
    if (!$this->_metodo) {
      $this->_metodo = 'index';
    }

    //Si no se envia algun argumento en la url, se asigna un array vacio
    if (!isset($this->_argumentos)) {
      $this->_argumentos = array();
    }
  }

  public function getControlador()
  {
    return $this->_controlador;
  }

  public function getMetodo()
  {
    return $this->_metodo;
  }

  public function getArgs()
  {
    return $this->_argumentos;
  }
}
?>
