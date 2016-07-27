<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="<?php echo $_layoutParams['ruta_css'] ?>estilos.css" type="text/css" rel="stylesheet" />
  <!-- de esta manera se leen los párametros pasados a la vista  -->
  <title><?php if(isset($this->titulo)) echo $this->titulo; ?></title>
</head>

<body>
  <div id="main">
    <div id="header">
      <center>
        <h1><?php echo APP_NAME; ?></h1>
      </center>
    </div>

    <div id="top_menu">
      <ul>
        <?php if (isset($_layoutParams['menu'])): ?>
          <?php for ($i=0; $i < count($_layoutParams['menu']); $i++): ?>
        <li><a href="<?php echo $_layoutParams['menu'][$i]['enlace']; ?>" ><?php echo $_layoutParams['menu'][$i]['titulo']; ?></a></li>
          <?php endfor; ?>
        <?php endif; ?>
      </ul>
    </div>
