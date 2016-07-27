<?php

/*
** Boostrap es quien procesa las llamadas a los controladores y los metodos
*/

class Boostrap
{
    /**
     * Recibe como parametro un objeto del Request
     */
    public static function run(Request $peticion)
    {
      $controller = $peticion->getControlador().'Controller';
      $rutaControlador = ROOT.'controllers'.DS.$controller.'.php';

      $metodo = $peticion->getMetodo();
      $args = $peticion->getArgs();

      //echo $rutaControlador; exit;

      // verificamos si es accesible el archivo (que existe y es legible)
      if (is_readable($rutaControlador)) {
        require_once $rutaControlador;

        // instanciamos una clase del controller
        $controller = new $controller;

        // Si se llama a un metodo que no es valido, se establece el metodo index
        if (is_callable(array($controller,$metodo))) {
          $metodo = $peticion->getMetodo();
        }else{
          $metodo = 'index';
        }

        // En un arreglo enviamos la clase y el metodo que queremos llamar en esa clase
        // y los parametros que queremos pasar a el metodo, si no hay argumentos
        // se llama con call_user_func
        if (isset($args)) {
          call_user_func_array(array($controller,$metodo), $args);
        }else{
          call_user_func(array($controller,$metodo));
        }
      }else{
        // Si el archivo controlador no es valido, llamamos una excepcion
        throw new Exception("Controlador No encontrado");

      }
    }
  }
  ?>
