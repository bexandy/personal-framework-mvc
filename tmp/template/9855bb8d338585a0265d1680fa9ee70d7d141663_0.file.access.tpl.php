<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-12 23:59:50
  from "/home/brodriguez/public_html/framework-mvc/views/error/access.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57ae9b36db2430_08865219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9855bb8d338585a0265d1680fa9ee70d7d141663' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/error/access.tpl',
      1 => 1470874216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ae9b36db2430_08865219 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="alert alert-danger">
          <strong>Error!</strong> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['mensaje']->value)===null||$tmp==='' ? '' : $tmp);?>

        </div>
      </div>
      <div class="col-lg-12">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="btn btn-theme"><i class="icon icon-house"></i> Ir al Inicio</a>
        <a href="javascript:history.back();" class="btn btn-theme"><i class="icon icon-fatundo"></i> Volver a la página anterior</a>

        <?php if (!Session::get('autenticado')) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login" class="btn btn-success "><i class="icon icon-user"></i> Iniciar Sesión</a>
        <?php }?>


      </div>
    </div>
  </div>
</section>
<?php }
}
