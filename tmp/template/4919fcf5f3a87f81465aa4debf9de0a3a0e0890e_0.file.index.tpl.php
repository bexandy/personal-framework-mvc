<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-10 20:11:33
  from "/home/brodriguez/public_html/framework-mvc/views/error/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57abc2b5c8f7a1_04344795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4919fcf5f3a87f81465aa4debf9de0a3a0e0890e' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/error/index.tpl',
      1 => 1470874062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57abc2b5c8f7a1_04344795 (Smarty_Internal_Template $_smarty_tpl) {
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
          </div>
    </div>
  </div>
</section>
<?php }
}
