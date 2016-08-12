<?php


class postController extends Controller
{

  private $_post;

  public function __construct()
  {
    parent::__construct();
    $this->_post = $this->loadModel('post');
  }

  public function index()
  {

    //$this->_view->posts = $this->_post->getPosts();
    $this->_view->assign('posts',$this->_post->getPosts());
      // de esta forma se pasan parámetros a la vista
    //$this->_view->titulo = 'Post - '.APP_NAME;
    $this->_view->assign('titulo','Post - '.APP_NAME);
      // llamamos al metodo renderizar para mostrar la vista
    $this->_view->renderizar('index','post');
  }

  public function nuevo()
  {
    //Session::accesoEstricto(array('usuario'));

    $this->_acl->acceso('nuevo_post');

    //$this->_view->titulo = 'Nuevo Post - '.APP_NAME;
    $this->_view->assign('titulo','Nuevo Post - '.APP_NAME);
    $this->_view->setJs(array('nuevo'));

      //$this->_view->prueba = $this->getTexto('titulo');
      //$this->_view->prueba = $this->getInt('guardar');

    if ($this->getInt('guardar') == 1) {
      //$this->_view->datos = $_POST;
      $this->_view->assign('datos',$_POST);

      if (!$this->getTexto('titulo')) {
        //$this->_view->_error = 'Debe introducir el título del post';
        $this->_view->assign('_error','Debe introducir el título del post');
        $this->_view->renderizar('nuevo','post');
        exit;
      }

      if (!$this->getTexto('cuerpo')) {
        //$this->_view->_error = 'Debe introducir el cuerpo del post';
        $this->_view->assign('_error','Debe introducir el cuerpo del post');
        $this->_view->renderizar('nuevo','post');
        exit;
      }

      $imagen = '';

      if (isset($_FILES['imagen']['name'])) {
        $this->getLibrary('upload'.DS.'class.upload');
        $ruta_img = ROOT.'public'.DS.'img'.DS.'post'.DS;
        $upload = new upload($_FILES['imagen'],'es_ES');
        $upload->allowed = array('image/*');
        $upload->file_new_name_body = 'upl_'.uniqid();
        $upload->process($ruta_img);

        if ($upload->processed) {
          $imagen = $upload->file_dst_name;
          $thumb = new upload($upload->file_dst_pathname);
          $thumb->image_resize = true;
          $thumb->image_x = 100;
          $thumb->image_y = 70;
          $thumb->file_name_body_pre = 'thumb_';
          $thumb->process($ruta_img.'thumb'.DS);
        } else {
          $this->_view->assign('_error',$upload->error);
          $this->_view->renderizar('nuevo','post');
          exit;
        }

      }

      $this->_post->insertarPost(
        $this->getPostParam('titulo'),
        $this->getPostParam('cuerpo'),
        $imagen
        );

      $this->redireccionar('post');
    }
    $this->_view->renderizar('nuevo','post');
  }

  public function editar($id='')
  {
    $this->_acl->acceso('editar_post');

    if (!$this->filtrarInt($id)) {
      $this->redireccionar('post');
    }

    if (!$this->_post->getPost($this->filtrarInt($id))) {
      $this->redireccionar('post');
    }

    //$this->_view->titulo = 'Editar Post - '.APP_NAME;
    $this->_view->assign('titulo','Editar Post - '.APP_NAME);
    $this->_view->setJs(array('nuevo'));

    if ($this->getInt('guardar') == 1) {
      //$this->_view->datos = $_POST;
      $this->_view->assign('datos',$_POST);

      if (!$this->getTexto('titulo')) {
        //$this->_view->_error = 'Debe introducir el título del post';
        $this->_view->assign('_error','Debe introducir el título del post');
        $this->_view->renderizar('editar','post');
        exit;
      }

      if (!$this->getTexto('cuerpo')) {
        //$this->_view->_error = 'Debe introducir el cuerpo del post';
        $this->_view->assign('_error','Debe introducir el cuerpo del post');
        $this->_view->renderizar('editar','post');
        exit;
      }

      $this->_post->editarPost(
        $this->filtrarInt($id),
        $this->getPostParam('titulo'),
        $this->getPostParam('cuerpo')
        );

      $this->redireccionar('post');
    }

    //$this->_view->datos = $this->_post->getPost($this->filtrarInt($id));
    $this->_view->assign('datos',$this->_post->getPost($this->filtrarInt($id)));
    $this->_view->renderizar('editar','post');

  }

  public function eliminar($id='')
  {
    Session::acceso('especial');

    if (!$this->filtrarInt($id)) {
      $this->redireccionar('post');
    }

    if (!$this->_post->getPost($this->filtrarInt($id))) {
      $this->redireccionar('post');
    }

    $this->_post->eliminarPost($this->filtrarInt($id));
    $this->redireccionar('post');
  }

}
?>
