{extends file="Form_default_gestion.tpl"} 

{block name="content"}
    <section class="content-wrapper container">
        {form name="Form_crear_prove" method="POST"}
          {hidden name="action" value=""}  
          <div class="input-field">
            <input type="number" id="codigo_prov" name="codigo_prov" />
            <label for="codigo_prov">Codigo</label>
          </div>
          <div class="input-field">
            <input type="text" id="proveedor_prov" name="nombre_prov"/>
            <label for="proveedor_prov">Nombre proveedor</label>
          </div>
          <div class="input-field">
            <input type="text" id="telefono_prov" name="telefono_prov"/>
            <label for="telefono_prov">Telefono</label>
          </div>
          <div class="input-field">
            <input type="text" id="celular_prov" name="celular_prov"/>
            <label for="celular_prov">Celular</label>
          </div>
          <div class="input-field">
            <input type="text" id="direccion_prov" name="direccion_prov"/>
            <label for="direccion_prov">Direccion</label>
          </div>
          <div class="input-field">
            <input type="text" id="ciudad_prov" name="ciudad_prov"/>
            <label for="ciudad_prov">Ciudad</label>
          </div>
          <div class="input-field">
            <input type="email" id="email_prov" name="email_prov"/>
            <label for="email_prov">Correo</label>
          </div>
          {tools_barstandard type = "Button"
                                  form_name="Form_crear_prove"
                                  commands = "CmdDefaultProv"
                                  btn_class = "btn right"
                                  labels = "crear_prov"
          } 
          <br><br><br>
        {/form}
    </section>
{/block}