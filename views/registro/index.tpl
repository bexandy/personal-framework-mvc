<section id="content">
  <div class="container">
    <div class="row box-gray aligncenter">
      <div class="cta-text">
        <h2><span>Registro</span> de Usuario</h2>
      </div>
      <div class="col-lg-12">
        <form role="form" name="form1" action="" method="post" >

          <input type="hidden" name="enviar" value="1">

          <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{$datos.nombre|default:''}" >
          </div>

          <div class="form-group">
            <label>Usuario:</label>
            <input type="text" name="usuario" value="{$datos.usuario|default:''}" >
          </div>

          <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" value="{$datos.email|default:''}" >
          </div>

          <div class="form-group">
            <label>Password:</label>
            <input type="password" name="pass" value="" >
          </div>

          <div class="form-group">
            <label>Confirmar Password:</label>
            <input type="password" name="confirmar" value="" >
          </div>


          <button type="submit" class="btn btn-theme">Enviar</button>

        </form>
      </div>
    </div>
  </div>
</section>
