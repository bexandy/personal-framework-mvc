<section class="callaction">
  <div class="container">
    <div class="row">
          <div class="col-lg-12">
            <div class="alert alert-danger">
              <strong>Error!</strong> {$mensaje|default:''}
            </div>
          </div>
          <div class="col-lg-12">
              <a href="{$_layoutParams.root}" class="btn btn-theme"><i class="icon icon-house"></i> Ir al Inicio</a>
              <a href="javascript:history.back();" class="btn btn-theme"><i class="icon icon-fatundo"></i> Volver a la página anterior</a>
          </div>
    </div>
  </div>
</section>
