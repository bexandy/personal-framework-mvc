<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Administración de <span>Permisos de Role</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="content">
  <div class="container">
    <div class="row box-gray">
      <div class="col-lg-12 aligncenter">
        <h3>Role: {$role.role}</h3>
        <h4>Permisos</h4>
      </div>

      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <form  role="form" id="form1" name="form1" method="post" action="">
          <input type="hidden" name="guardar" value="1">

          {if isset($role) && count($role)}
          <table class="table">
            <thead>
              <tr>
                <th>Permiso</th>
                <th>Habilitado</th>
                <th>Denegado</th>
                <th>Ignorar</th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$permisos item=entrada}
              <tr>
                <td>{$entrada.nombre}</td>
                <td>
                  <input type="radio" name="perm_{$entrada.id}" value="1" {if ($entrada.valor == 1)} checked="checked"{/if} >
                </td>
                <td>
                  <input type="radio" name="perm_{$entrada.id}" value="" {if ($entrada.valor == "")} checked="checked"{/if} >
                </td>
                <td>
                  <input type="radio" name="perm_{$entrada.id}" value="x" {if ($entrada.valor === "x")} checked="checked"{/if} >
                </td>
              </tr>
              {/foreach}
            </tbody>
          </table>
          {/if}
          <div class="aligncenter">
            <input type="submit" class="btn btn-theme aligncenter" value="Guardar">
          </div>

        </form>
      </div>

      <div class="col-lg-2"></div>

    </div>
  </div>
</section>
