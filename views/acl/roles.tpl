<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Administración de <span>Roles</span></h2>
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
        {if isset($roles) && count($roles)}
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Role</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$roles item=entrada}
                <tr>
                  <td>{$entrada.id_role}</td>
                  <td>{$entrada.role}</td>
                  <td><a href="{$_layoutParams.root}acl/permisos_role/{$entrada.id_role}" class="btn btn-theme btn-small">
                      <i class="icon-key"></i> Permisos</a></td>
                  <td><a href="{$_layoutParams.root}acl/permisos_role" class="btn btn-theme btn-small" title="Editar"><i class="icon-editalt"></i> Editar</a></td>
                </tr>
              {/foreach}
            </tbody>
          </table>
          {else}
          <h3 class="aligncenter"><strong>No hay Posts !!</strong></h3>
          {/if}
        </div>

        <div class="col-lg-2"></div>

      </div>


      <div class="row floatright">
        <a href="{$_layoutParams.root}acl/nuevo_role" class="btn btn-theme"  title="Agregar Post">
          <i class="icon-addfriend"></i> Agregar Role</a>
      </div>


      </div>
    </section>
