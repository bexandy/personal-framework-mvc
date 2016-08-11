<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2>Vista <span>Posts</span></h2>
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
        {if isset($posts) && count($posts)}
          <h3 class="aligncenter">Últimos Posts</h3>

          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Cuerpo</th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$posts item=entrada}
                <tr>
                  <td>{$entrada.id}</td>
                  <td>{$entrada.titulo}</td>
                  <td>{$entrada.cuerpo}</td>
                  <td><a href="{$_layoutParams.root}post/editar/{$entrada.id}" class="btn btn-theme btn-small" title="Editar"><i class="icon-editalt"></i> Editar</a></td>
                  <td><a href="{$_layoutParams.root}post/eliminar/{$entrada.id}" class="btn btn-danger btn-small" title="Eliminar"><i class="icon-deletefile"></i> Eliminar</a></td>
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



      {if Session::accesoViewEstricto(array('usuario'))}
        <div class="row floatright">
          <a href="{$_layoutParams.root}post/nuevo" class="btn btn-theme"  title="Agregar Post">
            <i class="icon-createfile"></i> Agregar Post</a>
          </div>
      {/if}

      </div>
    </section>
