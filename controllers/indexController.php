<?php


class indexController extends Controller
{

    public function __construct()
    {
      parent::__construct();
    }

    public function index()
    {
      //echo "Hola desde el indexController...";
      $post = $this->loadModel('post');
      $this->_view->posts = $post->getPosts();

      // de esta forma se pasan parámetros a la vista
      $this->_view->titulo = 'Inicio - '.APP_NAME;

      // llamamos al metodo renderizar para mostrar la vista
      $this->_view->renderizar('index','inicio');
    }
}

 ?>
