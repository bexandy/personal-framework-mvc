<?php

/**
 * Objeto que maneja el trabajo con las vistas
 */

require_once ROOT.'libs'.DS.'smarty'.DS.'libs'.DS.'Smarty.class.php';

class View extends Smarty
{
  private $_controlador;
  private $_js;

  public function __construct(Request $peticion)
  {
    parent::__construct();
    $this->_controlador = $peticion->getControlador();
    $this->_js = array();
  }

    // Método que hace la llamada a las vistas
  public function renderizar($vista, $item = false)
  {

    $this->template_dir = ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS;
    $this->config_dir = ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'configs'.DS;
    $this->cache_dir = ROOT.'tmp'.DS.'cache'.DS;
    $this->compile_dir = ROOT.'tmp'.DS.'template'.DS;


    $menu = array(
      array(
        'id' => 'inicio',
        'titulo' => 'Inicio',
        'enlace' => BASE_URL
        ),
      array(
        'id' => 'post',
        'titulo' => 'Post',
        'enlace' => BASE_URL.'post'
        )
      );

    if (Session::get('autenticado')) {
      $menu[] = array(
        'id' => 'login',
        'titulo' => 'Cerrar Sesión',
        'enlace' => BASE_URL.'login/cerrar'
        );
    } else {
      $menu[] = array(
        'id' => 'login',
        'titulo' => 'Iniciar Sesión',
        'enlace' => BASE_URL.'login'
        );
      $menu[] = array(
        'id' => 'registro',
        'titulo' => 'Registro',
        'enlace' => BASE_URL.'registro'
        );
    }

    $js = array();
    if (count($this->_js)) {
      $js = $this->_js;
    }


      // Le enviamos a la vista las rutas propias del template
    $_params = array(
      'ruta_css' => BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/css/',
      'ruta_img' => BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/img/',
      'ruta_js' => BASE_URL.'views/layout/'.DEFAULT_LAYOUT.'/js/',
      'menu' => $menu,
      'item' => $item,
      'js' => $js,
      'root' => BASE_URL,
      'configs' => array(
            'app_name' => APP_NAME,
            'app_slogan' => APP_SLOGAN,
            'app_company' => APP_COMPANY
        ),
      'social' => array(
            'facebook' => USER_FACEBOOK,
            'twitter' => USER_TWITTER,
            'linkedin' => USER_LINKEDIN,
            'googleplus' => USER_GOOGLEPLUS,
            'github' => USER_GITHUB
        )
      );

      // Debe existir una carpeta con el nombre del controlador en el directorio views
   // $rutaView = ROOT.'views'.DS.$this->_controlador.DS.$vista.'.phtml';
    // ruta para motor de plantillas Smarty, cambia extension a .tpl
    $rutaView = ROOT.'views'.DS.$this->_controlador.DS.$vista.'.tpl';
      //echo $rutaView; exit;

      // Verificamos que el archivo exista y sea legible
    if (is_readable($rutaView)) {
      // No se requiere header.php para motor de plantillas Smarty
      // include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'header.php';
      // include_once $rutaView;

      $this->assign('_contenido',$rutaView);

      // No se requiere footer.php para motor de plantillas Smarty
      //include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'footer.php';
    } else {
      throw new Exception("Error de Vista");
    }

    $this->assign('_layoutParams',$_params);
    $this->display('template.tpl');
  }

  public function setJs(array $js)
  {
    if (is_array($js) && count($js)) {
      for ($i=0; $i < count($js) ; $i++) {
        $this->_js[] = BASE_URL.'views'.DS.$this->_controlador.DS.'js'.DS.$js[$i].'.js';
      }
    } else {
      throw new Exception("Error de JS");

    }
  }

}
?>
