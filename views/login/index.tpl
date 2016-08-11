<section id="content">
  <div class="container">
    <div class="row box-gray aligncenter">
          <div class="cta-text">
            <h2><span>Iniciar</span> Sesión</h2>
          </div>
      <form role="form" name="form1" action="" method="post" >

        <input type="hidden" name="enviar" value="1">

        <div class="form-group">
          <label>Usuario:</label>
          <br>
          <input type="text" name="usuario" value="{$datos.usuario|default:''}" >
        </div>

        <div class="form-group">
          <label>Password:</label>
          <br>
          <input type="password" name="pass" value="" >
        </div>


        <button type="submit" class="btn btn-theme">Enviar</button>

      </form>

    </div>
  </div>
</section>
