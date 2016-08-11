<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-10 18:01:46
  from "/home/brodriguez/public_html/framework-mvc/views/registro/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57aba44a532225_52346406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '676bd21704567a78e2cb2586942f5f48bb64cbc7' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/registro/index.tpl',
      1 => 1470866400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57aba44a532225_52346406 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="content">
  <div class="container">
    <div class="row box-gray aligncenter">
      <div class="cta-text">
        <h2><span>Registro</span> de Usuario</h2>
      </div>
      <div class="col-lg-12">
        <form role="form" name="form1" action="" method="post" >

          <input type="hidden" name="enviar" value="1">

          <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" >
          </div>

          <div class="form-group">
            <label>Usuario:</label>
            <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" >
          </div>

          <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" >
          </div>

          <div class="form-group">
            <label>Password:</label>
            <input type="password" name="pass" value="" >
          </div>

          <div class="form-group">
            <label>Confirmar Password:</label>
            <input type="password" name="confirmar" value="" >
          </div>


          <button type="submit" class="btn btn-theme">Enviar</button>

        </form>
      </div>
    </div>
  </div>
</section>
<?php }
}
