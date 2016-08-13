<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-12 23:47:11
  from "/home/brodriguez/public_html/framework-mvc/views/acl/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57ae983f374155_53461238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f2980a22ef92c4a096767f240803ad06692892a' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/acl/index.tpl',
      1 => 1471028098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ae983f374155_53461238 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
          <h2>Listas de <span>Control de Acceso</span></h2>
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
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles" class="btn btn-large btn-theme"><i class="icon icon-groups-friends"></i> Roles</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos" class="btn btn-large btn-theme"><i class="icon icon-key"></i> Permisos</a>
      </div>
    </div>
  </div>
</section>
<?php }
}
