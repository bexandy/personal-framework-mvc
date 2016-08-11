<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>{$titulo|default:"Sin título"}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Programador Web con PHP, Javascript y Mysql" />
  <meta name="author" content="Bexandy Rodríguez" />
  <!-- css -->
  <link href="{$_layoutParams.ruta_css}bootstrap.min.css" rel="stylesheet" />
  <link href="{$_layoutParams.ruta_css}fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="{$_layoutParams.ruta_css}jcarousel.css" rel="stylesheet" />
  <link href="{$_layoutParams.ruta_css}flexslider.css" rel="stylesheet" />
  <link href="{$_layoutParams.ruta_css}style.css" rel="stylesheet" />
  <link href="{$_layoutParams.ruta_css}default.css" rel="stylesheet" />

  <!-- javascript -->
  <script src="{$_layoutParams.root}public/js/jquery.js"></script>
  <script src="{$_layoutParams.root}public/js/jquery.validate.js"></script>

  {if isset($_layoutParams.js) && count($_layoutParams.js)}
    {foreach item=js from=$_layoutParams.js}
      <script defer src='{$js}'></script>
    {/foreach}
  {/if}

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
          <a class="navbar-brand" href="{$_layoutParams.root}"><img class="img-responsive" width="75%" height="75%" src="{$_layoutParams.ruta_img}logo-header.png" alt="Bexandy Rodríguez"></a>
        </div>

        <div class="navbar-collapse collapse ">
          <ul class="nav navbar-nav">
            {if isset($_layoutParams.menu)}
              {foreach item=menu from=$_layoutParams.menu}
                {if isset($_layoutParams.item) && ($_layoutParams.item == $menu.id)}
                  {assign var="_item_style" value='active'}
                {else }
                  {assign var="_item_style" value=''}
                {/if}
                <li class="{$_item_style}">
                  <a href="{$menu.enlace}" >
                    {$menu.titulo }
                  </a>
                </li>
              {/foreach}
            {/if}
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

      {if isset($_error)}
        <div id="error" class="alert alert-danger">{$_error}</div>
      {/if}

      {if isset($_mensaje)}
        <div id="mensaje" class="alert alert-success">{$_mensaje}</div>
      {/if}

    </div>
  </section>

  {include file="$_contenido"}

  <footer>

    <div id="sub-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-6">
            <div class="copyright">
              <p>
                <span>&copy; {$_layoutParams.configs.app_company} 2016 All right reserved. By </span><a href="http://bootstraptaste.com" target="_blank">Bootstraptaste</a>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <ul class="social-network">
              <li><a href="{$_layoutParams.social.facebook}" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="{$_layoutParams.social.twitter}" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="{$_layoutParams.social.linkedin}" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="{$_layoutParams.social.googleplus}" data-placement="top" title="Google+"><i class="fa fa-google-plus"></i></a></li>
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

  <script src="{$_layoutParams.ruta_js}jquery.easing.1.3.js"></script>
  <script src="{$_layoutParams.ruta_js}bootstrap.min.js"></script>
  <script src="{$_layoutParams.ruta_js}jquery.fancybox.pack.js"></script>
  <script src="{$_layoutParams.ruta_js}jquery.fancybox-media.js"></script>
  <script src="{$_layoutParams.ruta_js}google-code-prettify/prettify.js"></script>
  <script src="{$_layoutParams.ruta_js}portfolio/jquery.quicksand.js"></script>
  <script src="{$_layoutParams.ruta_js}portfolio/setting.js"></script>
  <script src="{$_layoutParams.ruta_js}jquery.flexslider.js"></script>
  <script src="{$_layoutParams.ruta_js}animate.js"></script>
  <script src="{$_layoutParams.ruta_js}custom.js"></script>
</body>
</html>
