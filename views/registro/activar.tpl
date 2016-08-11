<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Activación <span>de Cuenta de Usuario</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="content">
  <div class="container">
    <div class="row box-gray">
      <div class="col-lg-12">
        <a href="{$_layoutParams.root}" class="btn btn-theme"><i class="icon icon-home"></i> Ir al Inicio</a>
        {if !Session::get('autenticado')}
          <a href="{$_layoutParams.root}login" class="btn btn-theme"><i class="icon icon-lock"></i> Iniciar Sesión</a>
        {/if}
      </div>

    </div>
  </div>
</section>
