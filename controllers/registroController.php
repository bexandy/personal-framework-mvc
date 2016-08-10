<?php

/**
*
*/
class registroController extends Controller
{
  private $_registro;

  public function __construct()
  {
    parent::__construct();
    $this->_registro = $this->loadModel('registro');
  }

  public function index()
  {
    if (Session::get('autenticado')) {
      $this->redireccionar();
    }

    $this->_view->titulo = 'Registro de Usuario - '.APP_NAME;

    if ($this->getInt('enviar') == 1) {
      $this->_view->datos = $_POST;

      if (!$this->getSql('nombre')) {
        $this->_view->_error = 'Debe introducir su nombre';
        $this->_view->renderizar('index','registro');
        exit;
      }

      if (!$this->getAlphaNum('usuario')) {
        $this->_view->_error = 'Debe introducir su usuario';
        $this->_view->renderizar('index','registro');
        exit;
      }

      if ($this->_registro->verificarUsuario($this->getAlphaNum('usuario'))) {
        $this->_view->_error = 'El usuario '.$this->getAlphaNum('usuario').' ya existe !!';
        $this->_view->renderizar('index','registro');
        exit;
      }

      if (!$this->validarEmail($this->getPostParam('email'))) {
        $this->_view->_error = 'La dirección de email es inválida';
        $this->_view->renderizar('index','registro');
        exit;
      }

      if ($this->_registro->verificarEmail($this->getPostParam('email'))) {
        $this->_view->_error = 'Esta direccion de email ya está registrada';
        $this->_view->renderizar('index','registro');
        exit;
      }

      if (!$this->getPostParam('pass')) {
        $this->_view->_error = 'Debe introducir su password';
        $this->_view->renderizar('index','registro');
        exit;
      }

      if ($this->getPostParam('pass') != $this->getPostParam('confirmar')) {
        $this->_view->_error = 'Los passwords no coinciden';
        $this->_view->renderizar('index','registro');
        exit;
      }

      $this->getLibrary('class.phpmailer');
      $this->getLibrary('class.smtp');
      $mail = new PHPMailer();

      $this->_registro->registrarUsuario(
        $this->getSql('nombre'),
        $this->getAlphaNum('usuario'),
        $this->getPostParam('pass'),
        $this->getPostParam('email')
        );

      $usuario = $this->_registro->verificarUsuario($this->getAlphaNum('usuario'));

      if (!$usuario) {
        $this->_view->_error = 'Error al registrar el usuario';
        $this->_view->renderizar('index','registro');
        exit;
      }

//Tell PHPMailer to use SMTP
      $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
      $mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
      $mail->Debugoutput = 'html';
//Set the hostname of the mail server
      //$mail->Host = 'mail.bexandyrodriguez.com.ve';
// use
      $mail->Host = gethostbyname('mail.bexandyrodriguez.com.ve');
      $mail->SMTPOptions = array(
        'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
          )
        );
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
      $mail->Port = 465;
//Set the encryption system to use - ssl (deprecated) or tls
      $mail->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
      $mail->SMTPAuth = true;
      $mail->AuthType = 'LOGIN';
//Username to use for SMTP authentication - use full email address for gmail
      $mail->Username = "webmaster@bexandyrodriguez.com.ve";
//Password to use for SMTP authentication
      $mail->Password = "1ngS0ftV3n.=";
//Set who the message is to be sent from
     // $mail->From = 'framework-mvc.bexandyrodriguez.com.ve';
     // $mail->FromName = 'Framework MVC';
      $mail->setFrom('webmaster@bexandyrodriguez.com.ve', 'WebMaster Bexandy Rodriguez');
//Set who the message is to be sent to
      $mail->addAddress($this->getPostParam('email'));
//Set the subject line
      $mail->Subject = 'Activacion de cuenta de usuario';
      $mail->Body = 'Hola <strong>'.$this->getSql('nombre').'</strong>'.
      '<p>Se ha registrado en framework-mvc.bexandyrodriguez.com.ve '.
      'para activar su cuenta haga click sobre el siguiente enlace:</p>'.
      '<br>'.
      '<a href="'.BASE_URL.'registro/activar/'.$usuario['id'].'/'.$usuario['codigo'].
      '">'.BASE_URL.'registro/activar/'.$usuario['id'].'/'.$usuario['codigo'].'</a>';
      $mail->AltBody = 'Su servidor de correo no soporta html';

//send the message, check for errors
      if (!$mail->send()) {
        $this->_view->_error = 'Error al Enviar el Correo'. $mail->ErrorInfo;
        $this->_view->renderizar('index','registro');
        exit;
      }

      $this->_view->datos = false;
      $this->_view->_mensaje = 'Registro Completado, revise su email para activar su cuenta !!';
    }

    $this->_view->renderizar('index','registro');
  }

  public function activar($id, $codigo)
  {
    if (!$this->filtrarInt($id) || !$this->filtrarInt($codigo)) {
      $this->_view->_error = 'Esta cuenta no existe';
      $this->_view->renderizar('activar','registro');
      exit;
    }

    $row = $this->_registro->getUsuario(
      $this->filtrarInt($id),
      $this->filtrarInt($codigo)
      );

    if ($row['estado'] == 1) {
      $this->_view->_error = 'Esta cuenta ya ha sido activada';
      $this->_view->renderizar('activar','registro');
      exit;
    }

    $this->_registro->activarUsuario(
      $this->filtrarInt($id),
      $this->filtrarInt($codigo)
      );

    $row = $this->_registro->getUsuario(
      $this->filtrarInt($id),
      $this->filtrarInt($codigo)
      );

    if ($row['estado'] == 0) {
      $this->_view->_error = 'Error al activar la cuenta, por favor intente mas tarde';
      $this->_view->renderizar('activar','registro');
      exit;
    }

    $this->_view->_mensaje = 'Su cuenta ha sido activada';
    $this->_view->renderizar('activar','registro');

  }
}
?>
