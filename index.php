<?php

// Definimos el separador de directorios Linux('/') y Windows('\')
define('DS',DIRECTORY_SEPARATOR);
// Definimos la ruta principal (directorio donde se aloja en el servidor)
define('ROOT',realpath(dirname(__FILE__)).DS);
// Definimos la ruta del directorio 'application'
define('APP_PATH',ROOT.'application'.DS);

// para visualizar el mensaje de la excepcion
try {

  require_once(APP_PATH.'Config.php');
  require_once(APP_PATH.'Request.php');
  require_once(APP_PATH.'Boostrap.php');
  require_once(APP_PATH.'Controller.php');
  require_once(APP_PATH.'Model.php');
  require_once(APP_PATH.'View.php');
  require_once(APP_PATH.'Database.php');
  require_once(APP_PATH.'Session.php');
  require_once(APP_PATH.'Hash.php');

  Session::init();

    //echo $_GET['url'];
    //echo '<br>';
    //echo ROOT;
    //echo '<pre>'; print_r(get_required_files());'</pre>';

    /*
    $r = new Request();
    echo $r->getControlador().'<br>';
    echo $r->getMetodo().'<pre>';
    print_r($r->getArgs());
    echo "<br>";
    */

  Boostrap::run(new Request);
  } catch (Exception $e) {
    echo $e->getMessage();
}


?>
