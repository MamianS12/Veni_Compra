{extends file="Form_default_gestion.tpl"} 

{block name="content"}
    
    <section class="content-wrapper">
        <br>
            {form name="Form_prove" method="GET"}
                {hidden name="action" value=""}   
                <div class="row">
                    <div class="container"> 
                        <nav>
                            <div class="nav-wrapper">
                                <div class="input-field">
                                    <input id="search" type="search" required>
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </div>
                        </nav>
                        <br>
                
                        {tools_barstandard type = "Button"
                                        form_name="Form_prove"
                                        commands = "CmdShowByIdProveedor,CmdDeleteProveedor,CmdCrearProve"
                                        icon_class="fa-pencil-square-o,fa-trash,fa-trash"
                                        btn_class = "waves-effect waves-light btn modal-trigger,btn-info,btn-danger,waves-effect waves-light btn modal-trigger"
                                        labels = "edit,del,new"
                                        id = "updateprov,deleteprov,createprove"
                        }    
                
                
                        {consult_table_referenciasp table_name ="mco_proveedores" 
                                          llaves = "PVE_ID"
                                          DataGateway = "Mco_proveedores"
                                          form_name="Form_prove"
                                          type = "LIST"
                                          titulos =".,PVE_ID,PVE_NOMBRE,PVE_DIRECCION,PVE_TELEFONO,PVE_CELULAR,PVE_EMAIL"
                                          title = "Proveedores"
                                          command_showbyid="CmdShowByIdProveedores"
                                          commands="CmdShowListProveedores"
                        }
                    </div>
                </div>
            {/form} 
        <br>
    </section>
{/block}