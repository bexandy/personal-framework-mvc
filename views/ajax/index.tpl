<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Ejemplo de <span>Ajax</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="content">

  <div class="container">
    <div class="row box-gray">
      <div class="col-lg-3"></div>

      <div class="col-lg-6 ">
        <form role="form" name="form1" action="" method="post" >

          <div class="form-group">
            <label>Pais:</label>
            <select id="pais" >
                <option value=""> -seleccione-</option>
              {foreach from=$paises item=p }
                <option value="{$p.id}">{$p.pais}</option>
              {/foreach}
            </select>
          </div>

          <div class="form-group">
          <label>Ciudad:</label>
            <select id="ciudad" >
            </select>
          </div>

          <div class="form-group">
          <label>Ciudad a Insertar:</label>
          <input type="text" id="ins_ciudad" >
          <input type="button" id="btn_insertar" value="Insertar" class="btn btn-theme">
          </div>

        </form>
      </div>

      <div class="col-lg-3"></div>

    </div>



  </div>
</section>

