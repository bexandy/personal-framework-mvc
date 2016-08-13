<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-12 23:47:13
  from "/home/brodriguez/public_html/framework-mvc/views/acl/roles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57ae98412c44f9_70918718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45ecd12f05677e201c89b9a5a365e38357cd028f' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/acl/roles.tpl',
      1 => 1471028098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ae98412c44f9_70918718 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Administración de <span>Roles</span></h2>
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
        <?php if (isset($_smarty_tpl->tpl_vars['roles']->value) && count($_smarty_tpl->tpl_vars['roles']->value)) {?>
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Role</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'entrada');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entrada']->value) {
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['entrada']->value['id_role'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['entrada']->value['role'];?>
</td>
                  <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos_role/<?php echo $_smarty_tpl->tpl_vars['entrada']->value['id_role'];?>
" class="btn btn-theme btn-small">
                      <i class="icon-key"></i> Permisos</a></td>
                  <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos_role" class="btn btn-theme btn-small" title="Editar"><i class="icon-editalt"></i> Editar</a></td>
                </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
          </table>
          <?php } else { ?>
          <h3 class="aligncenter"><strong>No hay Posts !!</strong></h3>
          <?php }?>
        </div>

        <div class="col-lg-2"></div>

      </div>


      <div class="row floatright">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/nuevo_role" class="btn btn-theme"  title="Agregar Post">
          <i class="icon-addfriend"></i> Agregar Role</a>
      </div>


      </div>
    </section>
<?php }
}
