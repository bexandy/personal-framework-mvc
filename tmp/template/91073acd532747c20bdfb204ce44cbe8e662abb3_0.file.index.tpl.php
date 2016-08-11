<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-11 08:40:43
  from "/home/brodriguez/public_html/framework-mvc/views/login/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57ac724b95fc97_10842589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91073acd532747c20bdfb204ce44cbe8e662abb3' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/login/index.tpl',
      1 => 1470919240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ac724b95fc97_10842589 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="content">
  <div class="container">
    <div class="row box-gray aligncenter">
          <div class="cta-text">
            <h2><span>Iniciar</span> Sesión</h2>
          </div>
      <form role="form" name="form1" action="" method="post" >

        <input type="hidden" name="enviar" value="1">

        <div class="form-group">
          <label>Usuario:</label>
          <br>
          <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" >
        </div>

        <div class="form-group">
          <label>Password:</label>
          <br>
          <input type="password" name="pass" value="" >
        </div>


        <button type="submit" class="btn btn-theme">Enviar</button>

      </form>

    </div>
  </div>
</section>
<?php }
}
