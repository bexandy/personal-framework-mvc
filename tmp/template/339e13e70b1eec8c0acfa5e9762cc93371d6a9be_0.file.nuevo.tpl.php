<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-11 08:40:55
  from "/home/brodriguez/public_html/framework-mvc/views/post/nuevo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57ac7257049905_60032051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '339e13e70b1eec8c0acfa5e9762cc93371d6a9be' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/post/nuevo.tpl',
      1 => 1470919038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ac7257049905_60032051 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="content">
  <div class="container">
    <div class="row box-gray">

      <form role="form" id="form1" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo" method="post" enctype="multipart/form-data">

        <input type="hidden" name="guardar" value="1">

        <div class="form-group">
          <label>Titulo:</label>
          <br>
          <input type="text" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" >
        </div>

        <div class="form-group">
          <label>Cuerpo:</label>
          <br>
          <textarea name="cuerpo" ><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
        </div>

        <div class="form-group">
        <label>Imagen:</label>
          <br>
          <input type="file" name="imagen" >
        </div>

        <button type="submit" class="btn btn-theme">Guardar</button>

      </form>

    </div>
  </div>
</section>
<?php }
}
