<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title><?php if(isset($this->titulo)) echo $this->titulo; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Programador Web con PHP, Javascript y Mysql" />
  <meta name="author" content="Bexandy Rodríguez" />
  <!-- css -->
  <link href="<?php echo $_layoutParams['ruta_css'] ?>bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo $_layoutParams['ruta_css'] ?>fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php echo $_layoutParams['ruta_css'] ?>jcarousel.css" rel="stylesheet" />
  <link href="<?php echo $_layoutParams['ruta_css'] ?>flexslider.css" rel="stylesheet" />
  <link href="<?php echo $_layoutParams['ruta_css'] ?>style.css" rel="stylesheet" />
  <link href="<?php echo $_layoutParams['ruta_css'] ?>default.css" rel="stylesheet" />

  <!-- javascript -->
  <script src="<?php echo BASE_URL; ?>public/js/jquery.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/jquery.validate.js"></script>

  <?php if (isset($_layoutParams['js']) && count($_layoutParams['js'])): ?>
    <?php for ($i=0; $i < count($_layoutParams['js']) ; $i++ ): ?>
      <script defer src="<?php echo $_layoutParams['js'][$i]; ?>"></script>
    <?php endfor; ?>
  <?php endif ?>


  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

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
              <a class="navbar-brand" href="<?php echo BASE_URL; ?>"><img class="img-responsive" width="75%" height="75%" src="<?php echo $_layoutParams['ruta_img'] ?>logo-header.png" alt="Bexandy Rodríguez"></a>
            </div>
            <div class="navbar-collapse collapse ">
              <ul class="nav navbar-nav">
                <?php if (isset($_layoutParams['menu'])): ?>
                  <?php for ($i=0; $i < count($_layoutParams['menu']); $i++): ?>
                    <?php
                    if ($item && $_layoutParams['menu'][$i]['id'] == $item){
                      $_item_style = 'active';
                    }else{
                      $_item_style = '';
                    }
                    ?>
                    <li class="<?php echo $_item_style; ?>">
                      <a href="<?php echo $_layoutParams['menu'][$i]['enlace']; ?>" >
                        <?php echo $_layoutParams['menu'][$i]['titulo']; ?>
                      </a>
                    </li>
                  <?php endfor; ?>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- end header -->
      <section id="alertas">
        <div class="container">
            <noscript><div class="alert alert-warning">
            Para el correcto funcionamiento debe tener el soporte de Javascript habilitado</div></noscript>
            <?php if (isset($this->_error)): ?>
            <div id="error" class="alert alert-danger"><?php echo $this->_error; ?></div>
          <?php endif; ?>
                      <?php if (isset($this->_mensaje)): ?>
            <div id="mensaje" class="alert alert-success"><?php echo $this->_mensaje; ?></div>
          <?php endif; ?>
        </div>
      </section>
