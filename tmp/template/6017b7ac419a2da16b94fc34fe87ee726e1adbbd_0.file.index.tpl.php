<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-12 23:58:13
  from "/home/brodriguez/public_html/framework-mvc/views/post/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57ae9ad5ebfcc9_94799912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6017b7ac419a2da16b94fc34fe87ee726e1adbbd' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/post/index.tpl',
      1 => 1471028098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ae9ad5ebfcc9_94799912 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Vista <span>Posts</span></h2>
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
        <?php if (isset($_smarty_tpl->tpl_vars['posts']->value) && count($_smarty_tpl->tpl_vars['posts']->value)) {?>
          <h3 class="aligncenter">Últimos Posts</h3>

          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Cuerpo</th>
                <th>Imagen</th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'entrada');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entrada']->value) {
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['entrada']->value['id'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['entrada']->value['titulo'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['entrada']->value['cuerpo'];?>
</td>
                  <td>
                    <?php if (isset($_smarty_tpl->tpl_vars['entrada']->value['imagen'])) {?>
                       <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/<?php echo $_smarty_tpl->tpl_vars['entrada']->value['imagen'];?>
">
                         <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['entrada']->value['imagen'];?>
" >
                       </a>
                    <?php }?>
                  </td>
                  <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/editar/<?php echo $_smarty_tpl->tpl_vars['entrada']->value['id'];?>
" class="btn btn-theme btn-small" title="Editar"><i class="icon-editalt"></i> Editar</a></td>
                  <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/eliminar/<?php echo $_smarty_tpl->tpl_vars['entrada']->value['id'];?>
" class="btn btn-danger btn-small" title="Eliminar"><i class="icon-deletefile"></i> Eliminar</a></td>
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



      
      <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('nuevo_post')) {?>
      <div class="row floatright">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo" class="btn btn-theme"  title="Agregar Post">
          <i class="icon-createfile"></i> Agregar Post</a>
      </div>
      <?php }?>

      </div>
    </section>
<?php }
}
