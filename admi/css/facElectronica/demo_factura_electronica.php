
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link href="css_js/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css_js/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>

        <title>Facturacion Electronica</title>
        <!--PLUGIN CSS JQGRID-->
        <link href="css_js/jquery-ui-1.8.10.custom.css" rel="stylesheet" type="text/css"/>
        <link href="css_js/ui.jqgrid.css" rel="stylesheet" type="text/css"/>
        <link href="css_js/screen.css" rel="stylesheet" type="text/css"/>
        <!--FIN PLUGIN CSS JQGRID-->
        <script src="css_js/jquery.min.js" type="text/javascript"></script>
    </head>
    <body role="document">
        <!-- Fixed navbar -->        
        <div class="container">
            <br>
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i>Facturacion Electronica</h3>
                    </div>
                    <div class="panel-body">

                        <form name="miForm" id="miForm"  method="post" >
                            <!-- contenido ocultos -->
                            <input type='hidden' id='accion' name='accion' value='<%=Tipoaccion%>' />
                            <input type='hidden' id='txtID' name='txtID' value='' />
                            <div class="col-sm-12 borde">
                                <div class="row">
                                    <div class="col-sm-1 padno">
                                        Tipo.Compro
                                    </div>
                                    <div class="col-sm-3 padno">
                                        <select name ="txtID_TIPO_DOCUMENTO" id="txtID_TIPO_DOCUMENTO" onchange="MotivoNotaCD()" class="form-control"  >
                                            <option value=''>SELECCIONE</option>
                                            <option value='01'>FACTURA</option>
                                            <option value='03'>BOLETA</option>
                                            <option value='07'>NOTA CREDITO</option>
                                            <option value='08'>NOTA DEBITO</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-1 padno">
                                        Serie
                                    </div>

                                    <div class="col-sm-3 padno">
                                        <input type="text" id="txtSERIE" name="txtSERIE" class="form-control" value="" />
                                    </div>

                                    <div class="col-sm-1 padno">
                                        Numero
                                    </div>

                                    <div class="col-sm-3 padno2">
                                        <input type="text" id="txtNUMERO" name="txtNUMERO" class="form-control" value="" />
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 borde" style="border-top:0px;">
                                <div class="row">
                                    <div class="col-sm-1 padno">Fecha.Doc</div>
                                    <div class="col-sm-3 padno">
                                        <input type="text" id="txtFECHA_DOCUMENTO" onChange="cargar_tc()" class="form-control" name="txtFECHA_DOCUMENTO" value="" />
                                    </div>

                                    <div class="col-sm-1 padno">Moneda</div>
                                    <div class="col-sm-3 padno2">
                                        <select id="txtID_MONEDA" name="txtID_MONEDA" class="form-control" />
                                        <option value=''>SELECCIONE</option>
                                        <option value='PEN'>SOLES</option>
                                        <option value='USD'>DOLARES</option>
                                        <option value='EUR'>EUROS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 borde" style="border-top:0px;">
                                <div class="row">
                                    <div class="col-sm-1 padno">Doc.Modif</div>
                                    <div class="col-sm-3 padno2">
                                        <select name ="txtID_TIPO_DOCUMENTO_MODIFICA" id="txtID_TIPO_DOCUMENTO_MODIFICA" onchange="serie_numero()" class="form-control"  >
                                            <option value=''>SELECCIONE</option>
                                            <option value='01'>FACTURA</option>
                                            <option value='03'>BOLETA</option>>
                                        </select>
                                    </div>

                                    <div class="col-sm-1 padno">N°Doc.Modif</div>
                                    <div class="col-sm-3 padno">
                                        <input type="text" id="txtNRO_DOC_MODIFICA" name="txtNRO_DOC_MODIFICA" class="form-control" value="" />
                                    </div>

                                    <div class="col-sm-1 padno">Motivo</div>
                                    <div class="col-sm-3 padno2">
                                        <select name ="txtID_MOTIVO" id="txtID_MOTIVO" class="form-control"  >
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-12 borde p-b-0" style="border-top:0px;">
                                <div class="row">            
                                    <div class="col-sm-1 padno">Doc.Cliente</div>
                                    <div class="col-sm-3 padno">
                                        <select id="txtTIPO_DOCUMENTO_CLIENTE" name="txtTIPO_DOCUMENTO_CLIENTE" class="form-control" />
                                        <option value='0'>NO DOMICILIADO(OTROS)</option>
                                        <option value='6'>RUC</option>
                                        <option value='1'>DNI</option>
                                        <option value='4'>CARNET EXTRANJERIA</option>                                       
                                        <option value='7'>PASAPORTE</option>
                                        <option value='A'>CED. DIPLOMATICA DE IDENTIDAD</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-1 padno">Nro.Docu</div>
                                    <div class="col-sm-3 padno">
                                        <input type="hidden" id="txtID_CLIENTE" name="txtID_CLIENTE" value="" />
                                        <input type="hidden" id="txtCOD_TIPO_DOCUMENTO_CLI" name="txtCOD_TIPO_DOCUMENTO_CLI" value="" />
                                        <input type="text" id="txtRUC" name="txtRUC" value="" size="17" class="form-control"  />
                                    </div>
                                    <div class="col-sm-1 padno">Razon.Soc</div>
                                    <div class="col-sm-3 padno">
                                        <input type="text" id="txtRAZON_SOCIAL" name="txtRAZON_SOCIAL" class="form-control" value="" size="30"  />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 borde" style="border-top:0px;">
                                <div class="row">
                                    <div class="col-sm-1 padno">Direccion</div>
                                    <div class="col-sm-3 padno2">
                                        <input type="text" id="txtDIRECCION" name="txtDIRECCION" class="form-control" value=""  size="30"  />
                                    </div>                                   
                                </div>
                            </div>

                            <!-- DETALLE FACTURACION -->                           
                            <div class="col-sm-12 borde" style="border-top:0px;">
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <br>
                                        <div class="jqGrid">
                                            <table id='list' class='scroll'></table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN DETALLE FACTURACION -->  

                            <div class="col-sm-12 borde" style="border-top:0px;">
                                <div class="row">
                                    <br>
                                    <div class="col-sm-8">
                                        <div class="col-sm-12">Observacion</div>
                                        <div class="col-sm-12">
                                            <textarea  name="txtOBSERVACION" id="txtOBSERVACION" rows="2" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="col-sm-4">Sub Total</div>
                                        <div class="col-sm-8 p-b-1">
                                            <input type="text" id="txtSUB_TOTAL" name="txtSUB_TOTAL" class="form-control" value="" />
                                        </div>
                                        <div class="col-sm-4 p-b-1">
                                            <div class="col-sm-4" style="padding:0%;">
                                                IGV(</div>
                                            <div class="col-sm-7" style="padding:0%;">
                                                18
                                                <input name="txtPORCENTAJE_IGV" type="hidden" o id="txtPORCENTAJE_IGV" value="" class="form-control"  readonly />
                                            </div>
                                            <div class="col-sm-1" style="padding:0%;">)%</div>
                                        </div>
                                        <div class="col-sm-8">                                                        
                                            <input type="text" id="txtIGV" name="txtIGV" value="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="col-sm-4">Total</div>
                                        <div class="col-sm-8">
                                            <input name="txtTOTAL" type="text" id="txtTOTAL" value="" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ---------------------------------------------------------------------------------------
                            <fieldset>
                                <button type="button" class="btn btn-default" onClick="BuscarArticulo()"><i class="fa fa-plus-square-o"></i> Agregar</button>
                                <button type="submit" class="btn btn-default" ><i class="fa fa-save"></i> Guardar</button>
                                <button type="button" class="btn btn-default" onClick="nuevo()"><i class="fa fa-file-o"></i> Nuevo</button>
                                <button type="button" class="btn btn-default" onClick="eliminarFila()"><i class="fa fa-trash-o"></i> Eliminar</button>                                                                
                            </fieldset>
                            ---------------------------------------------------------------------------------------
                            <div id="xmlComprobantes">
                                <fieldset>
                                    <a href="#" onclick="DescargaArchivo('CPE')"><button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-cloud-download"></span>CPE</button></a>                                    
                                    <a href="#" onclick="DescargaArchivo('CDR')"><button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-cloud-download"></span>CDR</button></a>                                                               
                                </fieldset>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div><!--/.container-->


        <!--/.MODAL ARTICULO-->
        <div Class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="True">
            <div Class="modal-dialog">
                <div Class="modal-content">
                    <Form method='post' id='miFormArticulo'>
                        <div Class="modal-header">
                            <Button type="button" Class='close' data-dismiss="modal">×</Button>
                            <h4 Class='modal-title' id='myModalLabel'>ARTICULOS</h4>
                        </div>

                        <div Class='modal-body'>
                            <div class="panel-body">
                                <div Class='form-group col-lg-6'>
                                    <Label For='txtCOD_ARTICULO'>Codigo</Label>
                                    <input type='text' Class='form-control' value='' name='txtCOD_ARTICULO' id='txtCOD_ARTICULO' />
                                </div>
                                <div Class='form-group col-lg-6'>
                                    <Label For='txtUNIDAD_MEDIDA_ARTICULO'>Und/Medida</Label>
                                    <select class="form-control" name="txtUNIDAD_MEDIDA_ARTICULO" id="txtUNIDAD_MEDIDA_ARTICULO">
                                        <option value='NIU'>KILOGRAMOS</option>
                                        <option value='NIU'>LIBRAS</option>
                                        <option value='NIU'>TONELADAS LARGAS</option>
                                        <option value='NIU'>TONELADAS METRICAS</option>
                                        <option value='NIU'>TONELADAS CORTAS</option>
                                        <option value='NIU'>GRAMOS</option>
                                        <option value='NIU'>UNIDADES</option>
                                        <option value='NIU'>LITROS</option>
                                        <option value='NIU'>GALONES</option>
                                        <option value='NIU'>BARRILES</option>
                                        <option value='NIU'>LATAS</option>
                                        <option value='NIU'>CAJAS</option>
                                        <option value='NIU'>MILLARES</option>
                                        <option value='NIU'>METROS CUBICOS</option>
                                        <option value='NIU'>METROS</option>
                                    </select>
                                </div>
                                <div Class='form-group col-lg-12'>
                                    <Label For='txtDESCRIPCION_ARTICULO'>Descripcion</Label>
                                    <input type='text' Class='form-control' value='' name='txtDESCRIPCION_ARTICULO' id='txtDESCRIPCION_ARTICULO' />
                                </div>
                                <div Class='form-group col-lg-4'>
                                    <Label For='txtPRECIO_ARTICULO'>Precio/Uni(Inc.IGV)</Label>
                                    <input type='text' Class='form-control' onkeyup="CalcularArticulo()" value='' name='txtPRECIO_ARTICULO' id='txtPRECIO_ARTICULO' />
                                </div>
                                <div Class='form-group col-lg-4'>
                                    <Label For='txtCANTIDAD_ARTICULO'>Cantidad</Label>
                                    <input type='text' Class='form-control' onkeyup="CalcularArticulo()" value='' name='txtCANTIDAD_ARTICULO' id='txtCANTIDAD_ARTICULO' />
                                </div>
                                <div Class='form-group col-lg-4'>
                                    <Label For='txtSUB_TOTAL_ARTICULO'>Sub.Total</Label>
                                    <input type='text' Class='form-control' value='' name='txtSUB_TOTAL_ARTICULO' id='txtSUB_TOTAL_ARTICULO' />
                                </div>
                                <div Class='form-group col-lg-4'>
                                    <Label For='txtIGV_ARTICULO'>IGV(18%)</Label>
                                    <input type='text' Class='form-control' value='' name='txtIGV_ARTICULO' id='txtIGV_ARTICULO' />
                                </div>
                                <div Class='form-group col-lg-4'>
                                    <Label For='txtTOTAL_ARTICULO'>Total</Label>
                                    <input type='text' Class='form-control' value='' name='txtTOTAL_ARTICULO' id='txtTOTAL_ARTICULO' />
                                </div>
                            </div>
                        </div>
                        <div Class='modal-footer'>
                            <Button type='submit'  Class='btn btn-primary' id='btnAdd'>Aceptar</Button>
                            <Button type='button' Class='btn btn-Default' data-dismiss='modal'>Close</Button>
                        </div>
                    </Form>
                </div>
            </div>
        </div>
    </div>
    <!--/.FIN MODAL ARTICULO-->    

    <script src="css_js/bootstrap.min.js" type="text/javascript"></script>    
    <!--PLUGIN JQGRID-->
    <script src="css_js/jquery.jqGrid.js" type="text/javascript"></script>     
    <script src="css_js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="css_js/numero_letras.js" type="text/javascript"></script>    
    <!--FIN PLUGIN JQGRID-->
    <script type='text/javascript'>
                                        $.jgrid.no_legacy_api = true;
                                        $.jgrid.useJSON = true;
    </script>

    <script type='text/javascript'>
        var lst = '';
        var tbl = '';
        var frm = '';

        function responsive_jqgrid(jqgrid) {
            jqgrid.find('.ui-jqgrid').addClass('clear-margin span12').css('width', '');
            jqgrid.find('.ui-jqgrid-view').addClass('clear-margin span12').css('width', '');
            jqgrid.find('.ui-jqgrid-view > div').eq(1).addClass('clear-margin span12').css('width', '').css('min-height', '0');
            jqgrid.find('.ui-jqgrid-view > div').eq(2).addClass('clear-margin span12').css('width', '').css('min-height', '0');
            jqgrid.find('.ui-jqgrid-sdiv').addClass('clear-margin span12').css('width', '');
            jqgrid.find('.ui-jqgrid-pager').addClass('clear-margin span12').css('width', '');
        }

        function redondeo(numero, decimales) {
            var flotante = parseFloat(numero);
            var resultado = Math.round(flotante * Math.pow(10, decimales)) / Math.pow(10, decimales);
            return resultado;
        }

        function nuevo() {
            document.location = 'demo_factura_electronica.php';
        }

        function serie_numero() {
            //==============fecha actual===============
            var hoy = new Date().toJSON().slice(0, 10);
            $('#txtFECHA_DOCUMENTO').val(hoy);
            //===========================numero correlativo==========================
            var TipoComprobate = $('#txtID_TIPO_DOCUMENTO').val();
            var TipoComprobateRef = $('#txtID_TIPO_DOCUMENTO_MODIFICA').val();
            if (TipoComprobate == '01') {
                $('#txtSERIE').val('F001');
                $('#txtNRO_DOC_MODIFICA').val("");
            } else if (TipoComprobate == '03') {
                $('#txtSERIE').val('B001');
                $('#txtNRO_DOC_MODIFICA').val("");
            } else if (TipoComprobate == '07') {
                if (TipoComprobateRef == '01') {
                    $('#txtSERIE').val('F001');
                    var nroDocModfic = Math.floor(100000 + Math.random() * 900000);
                    $('#txtNRO_DOC_MODIFICA').val("F001-" + nroDocModfic.toString().substring(0, 6));
                } else {
                    $('#txtSERIE').val('B001');
                    var nroDocModfic = Math.floor(100000 + Math.random() * 900000);
                    $('#txtNRO_DOC_MODIFICA').val("B001-" + nroDocModfic.toString().substring(0, 6));
                }
                tipo_documento_cliente_NCND();
            } else if (TipoComprobate == '08') {
                if (TipoComprobateRef == '01') {
                    $('#txtSERIE').val('F001');
                    var nroDocModfic = Math.floor(100000 + Math.random() * 900000);
                    $('#txtNRO_DOC_MODIFICA').val("F001-" + nroDocModfic.toString().substring(0, 6));
                } else {
                    $('#txtSERIE').val('B001');
                    var nroDocModfic = Math.floor(100000 + Math.random() * 900000);
                    $('#txtNRO_DOC_MODIFICA').val("B001-" + nroDocModfic.toString().substring(0, 6));
                }
                tipo_documento_cliente_NCND();
            }
            var a = Math.floor(100000 + Math.random() * 900000);
            $('#txtNUMERO').val(a.toString().substring(0, 6));
        }

        function BuscarArticulo() {
            $('#myModal').modal('show');
            $('#miFormArticulo')[0].reset();
        }

        function DescargaArchivo(tipo) {
            var archivo = "";
            var ruta = "";
            //var tipoS = "./api_cpe/BETA/";
            if (tipo == "CPE") {
                archivo = "20100066603-" + $('#txtID_TIPO_DOCUMENTO').val() + "-" + $('#txtSERIE').val() + "-" + $('#txtNUMERO').val() + ".XML";
                ruta = "../api_cpe/BETA/20100066603/" + archivo;
            }
            if (tipo == "CDR") {
                archivo = "R-20100066603-" + $('#txtID_TIPO_DOCUMENTO').val() + "-" + $('#txtSERIE').val() + "-" + $('#txtNUMERO').val() + ".XML";
                ruta = "../api_cpe/BETA/20100066603/" + archivo;
            }
            if (tipo == "PDF") {
                archivo = "20100066603-" + $('#txtID_TIPO_DOCUMENTO').val() + "-" + $('#txtSERIE').val() + "-" + $('#txtNUMERO').val() + ".PDF";
                ruta = "../api_cpe/BETA/20100066603/" + archivo;
            }
            //console.log(archivo);
            //document.location = "./facturacion/funcionesGlobales/descargaArchivo.php?tipo=3&archivo=" + archivo;
            document.location = "./funcionesGlobales/descargaArchivo.php?archivo=" + archivo + "&ruta=" + ruta;
        }

        function tipo_documento_cliente_NCND() {
            var TipoComprobateRef = $('#txtID_TIPO_DOCUMENTO_MODIFICA').val();
            if (TipoComprobateRef == '01') {
                //================documento identidad================
                $('#txtTIPO_DOCUMENTO_CLIENTE').html('');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="">SELECCIONE</option>');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="6">RUC</option>');
            } else {
                //================documento identidad================
                $('#txtTIPO_DOCUMENTO_CLIENTE').html('');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="">SELECCIONE</option>');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="0">NO DOMICILIADO(OTROS)</option>');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="1">DNI</option>');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="4">CARNET EXTRANJERIA</option>');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="7">PASAPORTE</option>');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="A">CED. DIPLOMATICA DE IDENTIDAD</option>');
            }
        }

        function MotivoNotaCD() {
            var TipoComprobate = $('#txtID_TIPO_DOCUMENTO').val();
            if (TipoComprobate == '01') {
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').html('');
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').append('<option value="">SELECCIONE</option>');
                $('#txtID_MOTIVO').html('');
                $('#txtID_MOTIVO').append('<option value="">SELECCIONE</option>');
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').attr("disabled", true);
                $('#txtID_MOTIVO').attr("disabled", true);
                $('#txtNRO_DOC_MODIFICA').attr("disabled", true);
                //================documento identidad================
                $('#txtTIPO_DOCUMENTO_CLIENTE').html('');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="">SELECCIONE</option>');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="6">RUC</option>');
            } else if (TipoComprobate == '03') {
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').html('');
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').append('<option value="">SELECCIONE</option>');
                $('#txtID_MOTIVO').html('');
                $('#txtID_MOTIVO').append('<option value="">SELECCIONE</option>');
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').attr("disabled", true);
                $('#txtID_MOTIVO').attr("disabled", true);
                $('#txtNRO_DOC_MODIFICA').attr("disabled", true);
                //================documento identidad================
                $('#txtTIPO_DOCUMENTO_CLIENTE').html('');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="">SELECCIONE</option>');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="0">NO DOMICILIADO(OTROS)</option>');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="1">DNI</option>');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="4">CARNET EXTRANJERIA</option>');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="7">PASAPORTE</option>');
                $('#txtTIPO_DOCUMENTO_CLIENTE').append('<option value="A">CED. DIPLOMATICA DE IDENTIDAD</option>');
            } else if (TipoComprobate == '07') {
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').html('');
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').append('<option value="01">FACTURA</option>');
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').append('<option value="03">BOLETA</option>');
                $('#txtID_MOTIVO').html('');
                $('#txtID_MOTIVO').append('<option value="01">ANULACION DE LA OPERACION</option>');
                $('#txtID_MOTIVO').append('<option value="02">ANULACION POR ERROR EN EL RUC</option>');
                $('#txtID_MOTIVO').append('<option value="03">CORRECION POR ERROR EN LA DESCRIPCION</option>');
                $('#txtID_MOTIVO').append('<option value="04">DESCUENTO GLOBAL</option>');
                $('#txtID_MOTIVO').append('<option value="05">DESCUENTO POR ITEM</option>');
                $('#txtID_MOTIVO').append('<option value="06">DEVOLUCION TOTAL</option>');
                $('#txtID_MOTIVO').append('<option value="07">DEVOLUCION POR ITEM</option>');
                $('#txtID_MOTIVO').append('<option value="08">BONIFICACION</option>');
                $('#txtID_MOTIVO').append('<option value="09">DISMINUCION EN EL VALOR</option>');
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').attr("disabled", false);
                $('#txtID_MOTIVO').attr("disabled", false);
                $('#txtNRO_DOC_MODIFICA').attr("disabled", false);
            } else if (TipoComprobate == '08') {
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').html('');
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').append('<option value="01">FACTURA</option>');
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').append('<option value="03">BOLETA</option>');
                $('#txtID_MOTIVO').html('');
                $('#txtID_MOTIVO').append('<option value="01">INTERES POR MORA</option>');
                $('#txtID_MOTIVO').append('<option value="02">AUMENTO EN EL VALOR</option>');
                $('#txtID_MOTIVO').append('<option value="03">PENALIDADES</option>');
                $('#txtID_TIPO_DOCUMENTO_MODIFICA').attr("disabled", false);
                $('#txtID_MOTIVO').attr("disabled", false);
                $('#txtNRO_DOC_MODIFICA').attr("disabled", false);
            }
            serie_numero();
            //tipo_documento_cliente_NCND();
        }

        var tblEstructura = function () {
            //var id_doc = '<%=Documento_Venta.getID()%>';
            lst = tbl.jqGrid({
                url: '', //'Documento_VentaServlet?accion=obtenerPorIdDetalle&id=' + id_doc,
                datatype: 'json',
                mtype: 'POST',
                colNames: [
                    'Articulo.Id',
                    'Codigo',
                    'Descripcion',
                    'Und.Med.Id',
                    'Und/Medida',
                    'Precio',
                    'Cantidad',
                    'Sub.Total',
                    'Igv',
                    'Importe',
                    'Estado'
                ],
                colModel: [
                    {
                        name: 'ID_ARTICULO',
                        index: '1',
                        hidden: true
                    },
                    {
                        name: 'CODIGO',
                        index: '2',
                        width: 90
                    },
                    {
                        name: 'DESCRIPCION',
                        index: '3',
                        width: 360,
                        //editable: true
                    },
                    {
                        name: 'ID_UNIDAD_MEDIDA',
                        index: '4',
                        hidden: true
                    },
                    {
                        name: 'UNIDAD_MEDIDA',
                        index: '5',
                        width: 120
                    },
                    {
                        name: 'PRECIO',
                        index: '6',
                        width: 80,
                        align: "right",
                        //editable: true,
                        sorttype: 'float'
                    },
                    {
                        name: 'CANTIDAD',
                        index: '6',
                        width: 80,
                        align: "right",
                        //editable: true,
                        sorttype: 'float'
                    },
                    {
                        name: 'SUB_TOTAL',
                        index: '6',
                        width: 70,
                        align: "right",
                        sorttype: 'float'
                    },
                    {
                        name: 'IGV',
                        index: '6',
                        width: 60,
                        align: "right",
                        sorttype: 'float'
                    },
                    {
                        name: 'IMPORTE',
                        index: '6',
                        width: 90,
                        align: "right",
                        sorttype: 'float'
                    },
                    {
                        name: 'ESTADO',
                        index: '8',
                        hidden: true
                    }
                ],
                height: 100,
                //width: 900,
                shrinkToFit: false,
                rowNum: 0,
                loadOnce: true,
                viewrecords: true,
                gridview: true,
                cellEdit: true,
                sortname: 'CODIGO',
                cellsubmit: 'clientArray',
                editurl: 'clientArray',
                //multiselect: true,
                caption: 'DETALLE',
                beforeRequest: function () {
                    responsive_jqgrid($(".jqGrid"));
                },
                jsonReader: {
                    repeatitems: false,
                    root: 'lstLista'
                },
                gridComplete: function () {
                    //SE EJECUTA CUANDO AGREGAS NUEVO REGISTRO A LA GRILLA
                },
                afterSaveCell: function (rowid, name, val, iRow, iCol) {
                    //SE EJECUTA CUANDO MODIFICAMOS UN REGISTRO
                    //                        calculateImporte();
                    //                        calculateTotal();
                }
            });
        };
        function CalcularArticulo() {
            var igv_div = parseFloat((18 / 100) + 1);
            var precio = $('#txtPRECIO_ARTICULO').val(); //filaArticulo.PRECIO_VENTA;//redondeo(parseFloat(importe / igv_div),2);
            var cantidad = $('#txtCANTIDAD_ARTICULO').val();
            var total = redondeo(parseFloat(precio) * parseFloat(cantidad), 2);
            var sub_total = parseFloat(total) / parseFloat(igv_div);
            var igv = parseFloat(total) - parseFloat(sub_total);
            $('#txtSUB_TOTAL_ARTICULO').val(redondeo(sub_total, 2));
            $('#txtIGV_ARTICULO').val(redondeo(igv, 2));
            $('#txtTOTAL_ARTICULO').val(redondeo(total, 2));
        }
        function calculateTotal() {
            var sub_total = 0;
            var igv = 0;
            var importe = 0;
            var grid = jQuery("#list");
            var ids = grid.jqGrid('getDataIDs');
            for (var i = 0; i < ids.length; i++) {
                var id = ids[i];
                sub_total = parseFloat(sub_total) + parseFloat(grid.jqGrid('getCell', id, 'SUB_TOTAL'));
                igv = parseFloat(igv) + parseFloat(grid.jqGrid('getCell', id, 'IGV'));
                importe = parseFloat(importe) + parseFloat(grid.jqGrid('getCell', id, 'IMPORTE'));
            }
            $("#txtSUB_TOTAL").val(redondeo(sub_total, 2));
            $("#txtIGV").val(redondeo(igv, 2));
            $("#txtTOTAL").val(redondeo(importe, 2));
        }
        $(document).ready(function () {
            $('#xmlComprobantes').hide();
            $('#txtSUB_TOTAL_ARTICULO').attr("disabled", true);
            $('#txtIGV_ARTICULO').attr("disabled", true);
            $('#txtTOTAL_ARTICULO').attr("disabled", true);
            $('#miFormArticulo').validate({
                rules: {
                    txtCOD_ARTICULO: {required: true},
                    txtDESCRIPCION_ARTICULO: {required: true},
                    txtUNIDAD_MEDIDA_ARTICULO: {required: true},
                    txtPRECIO_ARTICULO: {required: true, min: 0.0001},
                    txtCANTIDAD_ARTICULO: {required: true, min: 0.0001}
                },
                messages: {
                    txtCOD_ARTICULO: 'El Campo CODIGO es Obligatorio',
                    txtDESCRIPCION_ARTICULO: 'El Campo DESCRIPCION es Obligatorio',
                    txtUNIDAD_MEDIDA_ARTICULO: 'El Campo UND/MEDIDA es Obligatorio',
                    txtPRECIO_ARTICULO: {required: 'El Campo PRECIO es Obligatorio', min: 'PRECIO MINIMO ES 0.0001'},
                    txtCANTIDAD_ARTICULO: {required: 'El Campo CANTIDAD es Obligatorio', min: 'CANTIDAD MINIMA ES 0.0001'}
                },
                submitHandler: function (form) {
                    var datarow = {
                        ID_ARTICULO: $('#txtCOD_ARTICULO').val(),
                        CODIGO: $('#txtCOD_ARTICULO').val(),
                        DESCRIPCION: $('#txtDESCRIPCION_ARTICULO').val(),
                        ID_UNIDAD_MEDIDA: $('#txtUNIDAD_MEDIDA_ARTICULO').val(),
                        UNIDAD_MEDIDA: $('#txtUNIDAD_MEDIDA_ARTICULO').val(),
                        PRECIO: $('#txtPRECIO_ARTICULO').val(),
                        CANTIDAD: $('#txtCANTIDAD_ARTICULO').val(),
                        SUB_TOTAL: $('#txtSUB_TOTAL_ARTICULO').val(),
                        IGV: $('#txtIGV_ARTICULO').val(),
                        IMPORTE: $('#txtTOTAL_ARTICULO').val(),
                        ESTADO: 'V'
                    };
                    //======================LE AGREGAMOS UN ID A NUESTRO REGISTRO(DETALLE)=====================
                    var su = jQuery("#list").addRowData($('#txtCOD_ARTICULO').val(), datarow, 'last');
                    calculateTotal();
                    $('#miFormArticulo')[0].reset();
                }
            });
        });
        function eliminarFila() {
            var rowid = jQuery('#list').jqGrid('getGridParam', 'selrow');
            var $grid = jQuery("#list");
            $grid.jqGrid('delRowData', rowid);
            calculateTotal();
        }

        /*=======================TODO PARA VALIDACION DE RUC=====================*/
        function ValidarRUC(rucVal) {
            var regEx = /\d{11}/;
            //var ruc = new String(document.getElementById(rucVal).value);

            var ruc = new String(rucVal);

            if (ruc.length != 11) {
                alert("¡ALERTA: El RUC " + ruc + " NO es valido!. SI NO TIENE UNO SELECCIONE BOLETA");
                return 0;
            }

            if (regEx.test(ruc)) {
                var factores = new String("5432765432");
                var ultimoIndex = ruc.length - 1;
                var sumaTotal = 0, residuo = 0;
                var ultimoDigitoRUC = 0, ultimoDigitoCalc = 0;

                for (var i = 0; i < ultimoIndex; i++) {
                    sumaTotal += (parseInt(ruc.charAt(i)) * parseInt(factores.charAt(i)));
                }
                residuo = sumaTotal % 11;

                ultimoDigitoCalc = (residuo == 10) ? 0 : ((residuo == 11) ? 1 : (11 - residuo) % 10);
                ultimoDigitoRUC = parseInt(ruc.charAt(ultimoIndex));

                if (ultimoDigitoRUC == ultimoDigitoCalc) {
                    //alert("¡El RUC " + ruc + " SÍ es válido!.");
                    return 1;
                } else {
                    alert("¡ALERTA: El RUC " + ruc + " NO es valido!. SI NO TIENE UNO SELECCIONE BOLETA");
                    return 0;
                }
            } else {
                alert("ALERTA : El RUC no es valido, debe constar de 11 caracteres numericos. SI NO TIENE UNO SELECCIONE BOLETA");
                document.getElementById("txtRUC").focus();
                return 0;
            }
        }

        $(document).ready(function () {/////////////SE EJECUTARA AL CARGAR LA PAGINA
            //Inicializamos las variables
            //info_cliente();
            $('#txtSERIE').attr("disabled", true);
            $('#txtNUMERO').attr("disabled", true);
            $('#txtFECHA_DOCUMENTO').attr("disabled", true);
            $("#txtSUB_TOTAL").attr("disabled", true);
            $("#txtIGV").attr("disabled", true);
            $("#txtTOTAL").attr("disabled", true);

            tbl = $('#list');
            frm = $('#frmBusqueda');
            tblEstructura();
            $('#miForm').validate({
                rules: {
                    txtID_TIPO_DOCUMENTO: {required: true},
                    txtSERIE: {required: true},
                    txtNUMERO: {required: true},
                    txtFECHA_DOCUMENTO: {required: true},
                    txtRUC: {required: true},
                    txtRAZON_SOCIAL: {required: true},
                    txtTIPO_DOCUMENTO_CLIENTE: {required: true},
                    txtID_MONEDA: {required: true}
                },
                messages: {
                    txtID_TIPO_DOCUMENTO: 'El Campo TIPO DOCUMENTO es Obligatorio',
                    txtSERIE: 'El Campo SERIE es Obligatorio',
                    txtNUMERO: 'El Campo NUMERO es Obligatorio',
                    txtFECHA_DOCUMENTO: 'El Campo FECHA es Obligatorio',
                    txtRUC: 'El Campo NRO. DOCU es Obligatorio',
                    txtRAZON_SOCIAL: 'El Campo RAZON SOCIAL es Obligatorio',
                    txtTIPO_DOCUMENTO_CLIENTE: 'El Campo TIPO.DOC.CLIENTE es Obligatorio',
                    txtID_MONEDA: 'El Campo MONEDA es Obligatorio'
                },
                submitHandler: function (form) {
                    var tipo_doc = $('#txtTIPO_DOCUMENTO_CLIENTE').val();
                    if (tipo_doc == "6") {
                        var valRUC = ValidarRUC(document.getElementById("txtRUC").value);
                        if (valRUC == '0') {
                            return;
                        }
                    } else if (tipo_doc == "1" && $('#txtRUC').val().length != 8) {
                        alert('El nro DNI debe tener 8 Digitos');
                        return;
//                    } else if (tipo_doc == "1" && $('#txtRUC').val().length == 8 && $('#txtRAZON_SOCIAL').val()=='') {
//                        alert('El nro DNI No existe porque no cargo el nombre Seleccione OTRO DOCUMENTO');
                    }

                    //==========================VALIDAMOS DETALLE=======================
                    var lista = jQuery('#list').getDataIDs();
                    if (lista.length == 0) {
                        alert('Agregue un Articulo como Minimo');
                        return;
                    }

                    var i = 0;
                    var rowData;
                    var DATA = [];

                    for (i = 0; i < lista.length; i++) {
                        detalle = {};
                        rowData = jQuery('#list').getRowData(lista[i]);
                        detalle["txtITEM"] = i + 1;
                        detalle["txtUNIDAD_MEDIDA_DET"] = rowData.ID_UNIDAD_MEDIDA;
                        detalle["txtCANTIDAD_DET"] = rowData.CANTIDAD;
                        detalle["txtPRECIO_DET"] = rowData.SUB_TOTAL;
                        detalle["txtIMPORTE_DET"] = rowData.IMPORTE;
                        detalle["txtPRECIO_TIPO_CODIGO"] = "01";
                        detalle["txtIGV"] = rowData.IGV;
                        detalle["txtISC"] = "0";
                        detalle["txtCOD_TIPO_OPERACION"] = "10";
                        detalle["txtCODIGO_DET"] = rowData.CODIGO;
                        detalle["txtDESCRIPCION_DET"] = rowData.DESCRIPCION;
                        DATA.push(detalle);
                    }

                    var total_letras = NumeroALetras($("#txtTOTAL").val());

                    var motivo = ''
                    if ($('#txtID_MOTIVO').val() == '') {
                        motivo = '';
                    } else {
                        motivo = $("#txtID_MOTIVO :selected").text();
                    }
                    $.ajax({
                        url: "controller/controller_cpe.php",
                        type: "post",
                        dataType: 'json',
                        data: JSON.stringify({
                            "txtTOTAL_GRAVADAS": $("#txtSUB_TOTAL").val(),
                            "txtSUB_TOTAL": $("#txtSUB_TOTAL").val(),
                            "txtTOTAL_IGV": $("#txtIGV").val(),
                            "txtTOTAL": $("#txtTOTAL").val(),
                            "txtTOTAL_LETRAS": total_letras, //"SETECIENTOS TREINTA Y SIETE CON 50/100 SOLES",
                            "txtNRO_COMPROBANTE": $('#txtSERIE').val() + '-' + $('#txtNUMERO').val(),
                            "txtFECHA_DOCUMENTO": $('#txtFECHA_DOCUMENTO').val(), //$("#txtTOTAL").val(),
                            "txtCOD_TIPO_DOCUMENTO": $('#txtID_TIPO_DOCUMENTO').val(), //01=factura,03=boleta
                            "txtCOD_MONEDA": $('#txtID_MONEDA').val(),
                            //==========documentos de referencia(nota credito, debito)=============
                            "txtTIPO_COMPROBANTE_MODIFICA": $('#txtID_TIPO_DOCUMENTO_MODIFICA').val(),
                            "txtNRO_DOCUMENTO_MODIFICA": $('#txtNRO_DOC_MODIFICA').val(),
                            "txtCOD_TIPO_MOTIVO": $('#txtID_MOTIVO').val(),
                            "txtDESCRIPCION_MOTIVO": motivo, //$("[name='txtID_MOTIVO'] option:selected").text(),
                            //=================datos del cliente=================
                            "txtNRO_DOCUMENTO_CLIENTE": $('#txtRUC').val(),
                            "txtRAZON_SOCIAL_CLIENTE": $('#txtRAZON_SOCIAL').val(),
                            "txtTIPO_DOCUMENTO_CLIENTE": $('#txtTIPO_DOCUMENTO_CLIENTE').val(), //DNI
                            "txtDIRECCION_CLIENTE": $('#txtDIRECCION').val(),
                            "txtCIUDAD_CLIENTE": "LIMA",
                            "txtCOD_PAIS_CLIENTE": "PE",
                            //===================datos de la empresa===================
                            "txtNRO_DOCUMENTO_EMPRESA": "20100066603",
                            "txtTIPO_DOCUMENTO_EMPRESA": "6", //RUC
                            "txtNOMBRE_COMERCIAL_EMPRESA": "CREV PERU COMER'CIAL",
                            "txtCODIGO_UBIGEO_EMPRESA": "070104",
                            "txtDIRECCION_EMPRESA": "PSJ HUAMPANI",
                            "txtDEPARTAMENTO_EMPRESA": "LIMA",
                            "txtPROVINCIA_EMPRESA": "LIMA",
                            "txtDISTRITO_EMPRESA": "CHACLACAYO",
                            "txtCODIGO_PAIS_EMPRESA": "PE",
                            "txtRAZON_SOCIAL_EMPRESA": "CREVPERU S.A.",
                            //==================datos sunat====================
                            "txtUSUARIO_SOL_EMPRESA": "MODDATOS",
                            "txtPASS_SOL_EMPRESA": "moddatos",
                            "txtTIPO_PROCESO": "3", //3=beta,2=homologacion,1=produccion
                            //====================detalle del comprobante===================
                            "detalle": DATA
                        }),
                        success: function (response) {
                            alert(response.msj_sunat);
                            if (response.cod_sunat == "0") {
                                $('#xmlComprobantes').show();
                            }

                            //

                            //console.log(response);
                            //alert(response.flg_rta + ' - ' + response.cod_msj_sunat + ' - ' + response.des_msj_sunat + ' - ' + response.hash_cpe);
                        },
                        error: function (data) {
                            console.log(data);
                            alert('Error Al conectar la Base Datos');
                            //console.log(data);
                        }
                    });
                }
            });
        });
    </script>

</body>
</html>
