<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-11 00:57:15
  from "/home/brodriguez/public_html/framework-mvc/views/ajax/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57ac05ab37e961_22883239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c96622d5c33da0e7719b01e63af1548440c84094' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/ajax/index.tpl',
      1 => 1470891432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ac05ab37e961_22883239 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Ejemplo de <span>Ajax</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="content">

  <div class="container">
    <div class="row box-gray">
      <div class="col-lg-3"></div>

      <div class="col-lg-6 ">
        <form role="form" name="form1" action="" method="post" >

          <div class="form-group">
            <label>Pais:</label>
            <select id="pais" >
                <option value=""> -seleccione-</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paises']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['pais'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
          </div>

          <div class="form-group">
          <label>Ciudad:</label>
            <select id="ciudad" >
            </select>
          </div>

          <div class="form-group">
          <label>Ciudad a Insertar:</label>
          <input type="text" id="ins_ciudad" >
          <input type="button" id="btn_insertar" value="Insertar" class="btn btn-theme">
          </div>

        </form>
      </div>

      <div class="col-lg-3"></div>

    </div>



  </div>
</section>

<?php }
}
