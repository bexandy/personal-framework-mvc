<?php

/**
 * Clase de donde heredaran el resto de los controladores
 */
abstract class Controller
{

  protected $_view;

  public function __construct()
  {
    $this->_view = new View(new Request);
  }

  // se obliga a que todas las clases que hereden de Controller()
  //  implementen el metodo index (metodo por defecto)
  abstract public function index();

  // este metodo proporciona una instancia del modelo
  protected function loadModel($modelo)
  {
    $modelo = $modelo.'Model';
    $rutaModelo = ROOT.'models'.DS.$modelo.'.php';

    // verifica si el modelo existe y lo instancia
    if (is_readable($rutaModelo)) {
      require_once $rutaModelo;
      $modelo = new $modelo;
      return $modelo;
    } else {
      throw new Exception("Error de Modelo");
    }
  }

  // metodo que nos va a servir para cargar librerias
  protected function getLibrary($libreria)
  {
    $rutaLibreria = ROOT.'libs'.DS.$libreria.'.php';

    if (is_readable($rutaLibreria)) {
      require_once $rutaLibreria;
    } else {
      throw new Exception("Error de Libreria");
    }
  }

  // Este metodo toma una variable tipo texto enviada por POST y la devuelve filtrada
  protected function getTexto($clave)
  {
    if (isset($_POST[$clave]) && !empty($_POST[$clave])) {
      // Para que transforme las comillas simples y dobles
      $_POST[$clave] = htmlspecialchars($_POST[$clave], ENT_QUOTES);
      return $_POST[$clave];
    }
    return '';
  }

 // Este metodo toma una variable tipo entero enviada por POST y la devuelve filtrada
  protected function getInt($clave)
  {
    if (isset($_POST[$clave]) && !empty($_POST[$clave])) {
      // Para que transforme las comillas simples y dobles
      $_POST[$clave] = filter_input(INPUT_POST, $clave, FILTER_VALIDATE_INT);
      return $_POST[$clave];
    }
    return 0;
  }

  protected function redireccionar($ruta = false)
  {
    if ($ruta) {
      header('location:'.BASE_URL.$ruta);
      exit;
    }else{
      header('location:'.BASE_URL);
      exit;
    }
  }

  protected function filtrarInt($int)
  {
    $int = (int) $int;

    if (is_int($int)) {
      return $int;
    } else {
      return 0;
    }

  }

  protected function getPostParam($clave)
  {
    if (isset($_POST[$clave])) {
      return $_POST[$clave];
    }
  }

  // limpia los string tags y le pasa el mysql_escape_string a las inyecciones sql
  // la usamos para sanitizar el password
  protected function getSql($clave)
  {
    if (isset($_POST[$clave]) && !empty($_POST[$clave])) {

      $_POST[$clave] = strip_tags($_POST[$clave]);

      if (!get_magic_quotes_gpc()) {
        $_POST[$clave] = mysql_escape_string($_POST[$clave]);
      }

      return trim($_POST[$clave]);
    }
  }

  // parse a string y solo acepta caracteres entre A-Z, 0-9 y el caracter _
  // la usamos para sanitizar el nombre de usuario
  protected function getAlphaNum($clave)
  {
    if (isset($_POST[$clave]) && !empty($_POST[$clave])) {
      $_POST[$clave] = (string) preg_replace('/[^A-Z0-9_]/i', '', $_POST[$clave]);
      return trim($_POST[$clave]);
    }
  }

  public function validarEmail($email)
  {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return false;
    } else {
      return true;
    }
  }
}

?>
