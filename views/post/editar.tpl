<section id="content">
  <div class="container">
    <!-- <?php if (isset($this->prueba)) echo $this->prueba; ?> -->
    <div class="row box-gray">

      <form role="form" id="form1" action="" method="post" >

        <input type="hidden" name="guardar" value="1">

        <div class="form-group">
          <label>Titulo:</label>
          <br>
          <input type="text" name="titulo" value="{$datos.titulo|default:''}" >
        </div>

        <div class="form-group">
          <label>Cuerpo:</label>
          <br>
          <textarea name="cuerpo" >{$datos.cuerpo|default:''}</textarea>
        </div>

        <button type="submit" class="btn btn-theme">Guardar</button>

      </form>

    </div>
  </div>
</section>
