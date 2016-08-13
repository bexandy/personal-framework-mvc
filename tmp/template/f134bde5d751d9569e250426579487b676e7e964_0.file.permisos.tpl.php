<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-12 23:43:56
  from "/home/brodriguez/public_html/framework-mvc/views/usuarios/permisos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57ae977c4ba020_47444750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f134bde5d751d9569e250426579487b676e7e964' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/usuarios/permisos.tpl',
      1 => 1471059834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ae977c4ba020_47444750 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Administración de <span>Permisos de Usuario</span></h2>
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
      <?php $_smarty_tpl->_assignInScope('indice', '0');
?>
        <h3>Usuario: <?php echo $_smarty_tpl->tpl_vars['info']->value[$_smarty_tpl->tpl_vars['indice']->value]['usuario'];?>
</h3>
        <h4>Role: <?php echo $_smarty_tpl->tpl_vars['info']->value[$_smarty_tpl->tpl_vars['indice']->value]['role'];?>
</h4>
      </div>

      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <form  role="form" id="form1" name="form1" method="post" action="">
          <input type="hidden" name="guardar" value="1">

          <?php if (isset($_smarty_tpl->tpl_vars['permisos']->value) && count($_smarty_tpl->tpl_vars['permisos']->value)) {?>
          <table class="table">
            <thead>
              <tr>
                <th>Permiso</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permisos']->value, 'entrada');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entrada']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['role']->value[$_smarty_tpl->tpl_vars['entrada']->value]['valor'] == 1) {?>
              <?php $_smarty_tpl->_assignInScope('v', 'habilitado');
?>
              <?php } else { ?>
              <?php $_smarty_tpl->_assignInScope('v', 'denegado');
?>
              <?php }?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['entrada']->value]['permiso'];?>
</td>
                <td>
                  <select name="perm_<?php echo $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['entrada']->value]['id'];?>
" >
                    <option value="x" <?php if ($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['entrada']->value]['heredado']) {?> selected="selected"<?php }?>>Heredado(<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
)</option>
                    <option value="1" <?php if (($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['entrada']->value]['valor'] == 1 && $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['entrada']->value]['heredado'] == '')) {?> selected="selected"<?php }?>>Habilitado</option>
                    <option value="" <?php if (($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['entrada']->value]['valor'] == '' && $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['entrada']->value]['heredado'] == '')) {?> selected="selected"<?php }?>>Denegado</option>
                  </select>
                </td>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
          </table>
          <div class="aligncenter">
            <input type="submit" class="btn btn-theme aligncenter" value="Guardar">
          </div>
          <?php }?>


        </form>
      </div>

      <div class="col-lg-2"></div>

    </div>
  </div>
</section>
<?php }
}
