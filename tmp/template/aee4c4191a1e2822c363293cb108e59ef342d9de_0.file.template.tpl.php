<?php
/* Smarty version 3.1.31-dev/1, created on 2016-08-10 14:51:14
  from "/home/brodriguez/public_html/framework-mvc/views/layout/moderna/template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/1',
  'unifunc' => 'content_57ab77a2645ec8_98823138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aee4c4191a1e2822c363293cb108e59ef342d9de' => 
    array (
      0 => '/home/brodriguez/public_html/framework-mvc/views/layout/moderna/template.tpl',
      1 => 1470854980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ab77a2645ec8_98823138 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin título" : $tmp);?>
</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Programador Web con PHP, Javascript y Mysql" />
  <meta name="author" content="Bexandy Rodríguez" />
  <!-- css -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
jcarousel.css" rel="stylesheet" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
flexslider.css" rel="stylesheet" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
style.css" rel="stylesheet" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
default.css" rel="stylesheet" />

  <!-- javascript -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.validate.js"><?php echo '</script'; ?>
>

  <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js']) && count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_layoutParams']->value['js'], 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
?>
      <?php echo '<script'; ?>
 defer src='<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
'><?php echo '</script'; ?>
>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  <?php }?>

</head>

<body>

  <!-- start header -->
  <header>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
"><img class="img-responsive" width="75%" height="75%" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
logo-header.png" alt="Bexandy Rodríguez"></a>
        </div>

        <div class="navbar-collapse collapse ">
          <ul class="nav navbar-nav">
            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu'])) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_layoutParams']->value['menu'], 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
                <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item']) && ($_smarty_tpl->tpl_vars['_layoutParams']->value['item'] == $_smarty_tpl->tpl_vars['menu']->value['id'])) {?>
                  <?php $_smarty_tpl->_assignInScope('_item_style', 'active');
?>
                <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('_item_style', '');
?>
                <?php }?>
                <li class="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['enlace'];?>
" >
                    <?php echo $_smarty_tpl->tpl_vars['menu']->value['titulo'];?>

                  </a>
                </li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>
          </ul>
        </div>

      </div>
    </div>
  </header>
  <!-- end header -->

  <section id="alertas">
    <div class="container">

      <noscript>
        <div class="alert alert-warning">
          Para el correcto funcionamiento debe tener el soporte de Javascript habilitado
        </div>
      </noscript>

      <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)) {?>
        <div id="error" class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</div>
      <?php }?>

      <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)) {?>
        <div id="mensaje" class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</div>
      <?php }?>

    </div>
  </section>

  <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['_contenido']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


  <footer>

    <div id="sub-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-6">
            <div class="copyright">
              <p>
                <span>&copy; <?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['configs']['app_company'];?>
 2016 All right reserved. By </span><a href="http://bootstraptaste.com" target="_blank">Bootstraptaste</a>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <ul class="social-network">
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['social']['facebook'];?>
" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['social']['twitter'];?>
" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['social']['linkedin'];?>
" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['social']['googleplus'];?>
" data-placement="top" title="Google+"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>

        </div>
        <!--end row -->
      </div>
      <!--end container -->
    </div>
    <!--end sub-footer -->
  </footer>

  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.easing.1.3.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.fancybox.pack.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.fancybox-media.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
google-code-prettify/prettify.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
portfolio/jquery.quicksand.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
portfolio/setting.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.flexslider.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
animate.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
custom.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
