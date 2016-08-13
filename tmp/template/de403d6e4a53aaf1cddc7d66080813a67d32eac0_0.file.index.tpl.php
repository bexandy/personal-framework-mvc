<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-12 23:47:20
  from "/home/brodriguez/public_html/framework-mvc/views/usuarios/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57ae98485058a4_44441007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de403d6e4a53aaf1cddc7d66080813a67d32eac0' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/usuarios/index.tpl',
      1 => 1471036868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ae98485058a4_44441007 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Administración de <span>Usuarios</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="content">
  <div class="container">
    <div class="row box-gray">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value) && count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Usuario</th>
              <th>Role</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'entrada');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entrada']->value) {
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['entrada']->value['id'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['entrada']->value['usuario'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['entrada']->value['role'];?>
</td>
              <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/permisos/<?php echo $_smarty_tpl->tpl_vars['entrada']->value['id'];?>
" class="btn btn-theme btn-small"><i class="icon-key"></i> Permisos</a>
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
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</section>
<?php }
}
