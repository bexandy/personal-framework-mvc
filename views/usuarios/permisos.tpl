<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Administración de <span>Permisos de Usuario</span></h2>
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
      {assign var="indice" value='0'}
        <h3>Usuario: {$info.$indice.usuario}</h3>
        <h4>Role: {$info.$indice.role}</h4>
      </div>

      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <form  role="form" id="form1" name="form1" method="post" action="">
          <input type="hidden" name="guardar" value="1">

          {if isset($permisos) && count($permisos)}
          <table class="table">
            <thead>
              <tr>
                <th>Permiso</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$permisos item=entrada}
              {if $role.$entrada.valor == 1}
              {assign var="v" value='habilitado'}
              {else}
              {assign var="v" value='denegado'}
              {/if}
              <tr>
                <td>{$usuario.$entrada.permiso}</td>
                <td>
                  <select name="perm_{$usuario.$entrada.id}" >
                    <option value="x" {if $usuario.$entrada.heredado} selected="selected"{/if}>Heredado({$v})</option>
                    <option value="1" {if ($usuario.$entrada.valor == 1 && $usuario.$entrada.heredado == '')} selected="selected"{/if}>Habilitado</option>
                    <option value="" {if ($usuario.$entrada.valor == '' && $usuario.$entrada.heredado == '')} selected="selected"{/if}>Denegado</option>
                  </select>
                </td>
              </tr>
              {/foreach}
            </tbody>
          </table>
          <div class="aligncenter">
            <input type="submit" class="btn btn-theme aligncenter" value="Guardar">
          </div>
          {/if}


        </form>
      </div>

      <div class="col-lg-2"></div>

    </div>
  </div>
</section>
