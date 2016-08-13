<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Administración de <span>Usuarios</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="content">
  <div class="container">
    <div class="row box-gray">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        {if isset($usuarios) && count($usuarios)}
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Usuario</th>
              <th>Role</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            {foreach from=$usuarios item=entrada}
            <tr>
              <td>{$entrada.id}</td>
              <td>{$entrada.usuario}</td>
              <td>{$entrada.role}</td>
              <td>
                <a href="{$_layoutParams.root}usuarios/permisos/{$entrada.id}" class="btn btn-theme btn-small"><i class="icon-key"></i> Permisos</a>
              </td>
            </tr>
            {/foreach}
          </tbody>
        </table>
        {/if}
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</section>
