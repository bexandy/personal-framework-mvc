<section id="content">
  <div class="container">
    <div class="row box-gray">

      <form role="form" id="form1" action="{$_layoutParams.root}post/nuevo" method="post" enctype="multipart/form-data">

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

        <div class="form-group">
        <label>Imagen:</label>
          <br>
          <input type="file" name="imagen" >
        </div>

        <button type="submit" class="btn btn-theme">Guardar</button>

      </form>

    </div>
  </div>
</section>
