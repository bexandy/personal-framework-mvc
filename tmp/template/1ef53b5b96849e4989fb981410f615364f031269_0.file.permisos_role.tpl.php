<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-12 23:48:46
  from "/home/brodriguez/public_html/framework-mvc/views/acl/permisos_role.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57ae989e968413_20498094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ef53b5b96849e4989fb981410f615364f031269' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/acl/permisos_role.tpl',
      1 => 1471028098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ae989e968413_20498094 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Administración de <span>Permisos de Role</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="content">
  <div class="container">
    <div class="row box-gray">
      <div class="col-lg-12 aligncenter">
        <h3>Role: <?php echo $_smarty_tpl->tpl_vars['role']->value['role'];?>
</h3>
        <h4>Permisos</h4>
      </div>

      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <form  role="form" id="form1" name="form1" method="post" action="">
          <input type="hidden" name="guardar" value="1">

          <?php if (isset($_smarty_tpl->tpl_vars['role']->value) && count($_smarty_tpl->tpl_vars['role']->value)) {?>
          <table class="table">
            <thead>
              <tr>
                <th>Permiso</th>
                <th>Habilitado</th>
                <th>Denegado</th>
                <th>Ignorar</th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permisos']->value, 'entrada');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entrada']->value) {
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['entrada']->value['nombre'];?>
</td>
                <td>
                  <input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['entrada']->value['id'];?>
" value="1" <?php if (($_smarty_tpl->tpl_vars['entrada']->value['valor'] == 1)) {?> checked="checked"<?php }?> >
                </td>
                <td>
                  <input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['entrada']->value['id'];?>
" value="" <?php if (($_smarty_tpl->tpl_vars['entrada']->value['valor'] == '')) {?> checked="checked"<?php }?> >
                </td>
                <td>
                  <input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['entrada']->value['id'];?>
" value="x" <?php if (($_smarty_tpl->tpl_vars['entrada']->value['valor'] === "x")) {?> checked="checked"<?php }?> >
                </td>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
          </table>
          <?php }?>
          <div class="aligncenter">
            <input type="submit" class="btn btn-theme aligncenter" value="Guardar">
          </div>

        </form>
      </div>

      <div class="col-lg-2"></div>

    </div>
  </div>
</section>
<?php }
}
