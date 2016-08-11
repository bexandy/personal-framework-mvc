<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-10 20:12:24
  from "/home/brodriguez/public_html/framework-mvc/views/registro/activar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57abc2e80ffe78_06799762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f152bec2a5c0fd7750d53d59d8f1d3c61cddc6b' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/registro/activar.tpl',
      1 => 1470873920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57abc2e80ffe78_06799762 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Activación <span>de Cuenta de Usuario</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="content">
  <div class="container">
    <div class="row box-gray">
      <div class="col-lg-12">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" class="btn btn-theme"><i class="icon icon-home"></i> Ir al Inicio</a>
        <?php if (!Session::get('autenticado')) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login" class="btn btn-theme"><i class="icon icon-lock"></i> Iniciar Sesión</a>
        <?php }?>
      </div>

    </div>
  </div>
</section>
<?php }
}
