<?require_once('ifrm-valida-sesion.php')?>	
<!DOCTYPE html>
<html>
	<head>
		<title>SGC2</title>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<link rel="shortcut icon" href="../images/favicon.ico">

		<link rel="stylesheet" type="text/css" href="../css/temas/default/css-sistema.php">
		<link type="text/css" rel="stylesheet" media="screen" href="../javascript/includes/jqgrid-4.3.2/css/ui.jqgrid.css" />
        <link type="text/css" rel="stylesheet" media="screen" href="../javascript/includes/multiselect/css/jquery.multiselect.css" />
        <link type="text/css" rel="stylesheet" media="screen" href="../javascript/includes/multiselect/css/jquery.multiselect.filter.css" />

		<script type="text/javascript" src="../javascript/includes/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="../javascript/includes/jquery-ui-1.8.18.custom.min.js"></script>
        <script type="text/javascript" src="../javascript/includes/jqgrid-4.3.2/js/i18n/grid.locale-es.js" ></script>
        <script type="text/javascript" src="../javascript/includes/jqgrid-4.3.2/js/jquery.jqGrid.min.js" ></script>
        <script type="text/javascript" src="../javascript/includes/multiselect/js/jquery.multiselect.filter.min.js"></script>
        <script type="text/javascript" src="../javascript/includes/multiselect/js/jquery.multiselect.min.js"></script>

		<script type="text/javascript" src="../javascript/sistema.js"></script>
		<script type="text/javascript" src="../javascript/templates.js"></script>

		<script type="text/javascript" src="../javascript/js/js-grupo_alumno.js"></script>
        <script type="text/javascript" src="../javascript/dao/DAOpago.js"></script>		
        <script type="text/javascript" src="../javascript/jqGrid/JqGridPersona.js"></script>
    </head>

	<body>
		<div id="capaOscura" class="capaOscura" style="display:none"></div>
		<div id="capaCargando" class="capaCargando" style="display:none"><div class="girando"><div class="estrella"></div></div></div>
		<?require_once('ifrm-header.php')?>	
		<?require_once('ifrm-nav.php')?>	
        <div class="contenido">
			<div class="cuerpo">
				<div class="secc-izq" id="secc-izq" style="width:0px;">
					<ul class="lca" style="display:none">
						<li id="list_buscar_alu" onclick="sistema.activaPanel('list_buscar_alu','panel_buscar_alu')" class="active"><span><i class="icon-gray icon-list-alt"></i> Buscar </span></li>
					</ul>
				</div>
				<div id="secc-divi" class="secc-divi secc-divi-izq"><i class="icon-white icon-der"></i></div>
				<div class="secc-der" id="secc-der">
                    
                    <div id="panel_buscar_alu" style="display:block">
    					<div class="barra1"><i class="icon-gray icon-list-alt"></i> <b>BUSCAR ALUMNO</b></div>         
                        <div class="cont-der">

                            <!-- inicio buscar -->
                            <div style="overflow:auto;">
                                <table id="table_persona_ingalum"></table>
                                <div id="pager_table_persona_ingalum"></div>
                            </div>
                            <!-- fin buscar -->
                            <BR><BR>
                            <table align="center" width="80%">
                            <tr>
                                <td>
                                    <div class="barra4 contentBarra t-blanco"><i class="icon-white icon-th"></i> GRUPO DEL CUAL SE ESTA RETIRANDO</div>
                                    <br>
                                    <table cellspacing="1" cellpadding="2" border="0" style="table-layout:fixed;" class="EditTable">
                                       <tr class="FormData">
                                        <td class="t-left label" >
                                          <b>Operación</b>
                                        </td>
                                        <td class="t-left">
                                          <select id="slct_operacion" style="width:220px" onChange="Visualizar(this.value);" disabled>
                                          <option value="R" selected>RETIRO</option>
                                          <!--<option value="C">CAMBIO PERSONA/GRUPO</option>-->
                                          </select>
                                        </td>
                                      </tr>
                                      <tr class="FormData">
                                        <td class="t-left label" >
                                          <b>Alumno</b>
                                        </td>
                                        <td class="t-left">
                                          <input type="text" id="txt_nombre" class="input-large" disabled>
                                          <input type="text" class="esconde" id="txt_cingalu">
                                          <input type="text" class="esconde" id="txt_cgracpr">
                                        </td>
                                      </tr><tr class="FormData">
                                        <td class="t-left label" >
                                          <b>Carrera</b>
                                        </td>
                                        <td class="t-left">
                                          <input type="text" id="txt_dcarrer" onKeyPress="return sistema.validaNumeros(event)" class="input-xlarge" disabled>
                                        </td>
                                        <td class="t-left label" >
                                          <b>Ode</b>
                                        </td>
                                        <td class="t-left">
                                          <input type="text" id="txt_dfilial" class="input-mediun" disabled>
                                        </td>
                                        <td class="t-left label" >
                                          <b>Instituto</b>
                                        </td>
                                        <td class="t-left">
                                          <input type="text" id="txt_dinstit" class="input-mediun" disabled>
                                        </td>
                                      </tr>
                                      </tr><tr class="FormData">
                                        <td class="t-left label" >
                                          <b>Semestre</b>
                                        </td>
                                        <td class="t-left">
                                          <input type="text" id="txt_csemaca" onKeyPress="return sistema.validaNumeros(event)" class="input-xlarge" disabled>
                                        </td>
                                        <td class="t-left label" >
                                          <b>Inicio</b>
                                        </td>
                                        <td class="t-left">
                                          <input type="text" id="txt_cinicio" class="input-mediun" disabled>
                                        </td>
                                        <td class="t-left label" >
                                          <b>Fecha Inicio</b>
                                        </td>
                                        <td class="t-left">
                                          <input type="text" id="txt_finicio" class="input-mediun" disabled>
                                        </td>
                                      </tr>
                                      </tr>
                                        <tr class="FormData">
                                            <td class="t-left label" >
                                              <b>Horario</b>
                                            </td>
                                            <td class="t-left">
                                              <input type="text" id="txt_dhorari" onKeyPress="return sistema.validaNumeros(event)" class="input-xlarge" disabled>
                                            </td>

                                            <td class="t-left label" >
                                                <b>Devolucion de dinero: </b>
                                            </td>
                                            <td class="t-left">
                                                <select id="slct_devolucion_seccion" style="width:220px" onChange="MostrarDevolucionSeccion(this.value);">
                                                    <option value="No" selected>No</option>
                                                    <option value="Si" >Si</option>
                                                </select>
                                            </td>
                                      </tr>
                                        <tr>
                                            <td class="t-left label" >
                                                <b>Motivo</b>
                                            </td>
                                            <td class="t-left">
                                                <textarea id="txt_des" style="width: 270px;"></textarea>
                                            </td>
                                            <td class="t-left label" >
                                                <b>Fecha Retiro</b>
                                            </td>
                                            <td class="t-left">
                                                <input type="text" id="txt_fecha_ret" class="input-mediun">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                                <tr class="esconde form" id="frmRetiro">
                                    <td>
                                        <div class="barra4 contentBarra t-blanco"><i class="icon-white icon-th"></i> DATOS ECONOMICOS DEL RETIRO</div>
                                        <br>
                                        <table>
                                            <tr>
                                                <td class="t-left label"><b>Monto Comisión por tramite</b></td>
                                                <td class="t-left">
                                                    <input type="text" class="input-mini" id="txt_monto_comision_retiro" onKeyUp="CalcularComisionMonto();"></td>
                                            </tr>
                                        <tr class="FormData">
                                            <td class="t-left label" >
                                              <b>% Comisión por Tramite</b>
                                            </td>
                                            <td class="t-left">
                                              <input type="text" id="txt_dscto" onKeyPress="return sistema.validaNumeros(event)" onKeyUp="CalcularComision();" maxlength="4" class="input-mediun" value="0.00" disabled>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="t-left label" >
                                              <b>Monto Pagado por la Matrícula</b>
                                            </td>
                                            <td class="t-left">
                                              <input type="text" id="txt_monto_total" class="input-mediun" disabled>
                                            </td>
                                            <td class="t-left label" style="display:none">
                                              <b>Monto Acumulado con Dscto</b>
                                            </td>
                                            <td class="t-left" style="display:none">
                                              <input type="text" id="txt_monto_dscto" class="input-mediun" disabled>
                                            </td>
                                          </tr>

                                        <tr>
                                            <td class="t-left label"><b>Monto Retenido para Devolución</b></td>
                                            <td class="t-left"><input type="text" class="input-mini" id="txt_monto_retension_retiro" disabled></td>
                                        </tr>
                                        </table>

                                    </td>
                                </tr>
                                <tr class="devolucion-seccion">
                                    <td>
                                        <div class=" barra4 contentBarra t-blanco"><i class="icon-white icon-th"></i> DATOS DE DEVOLUCION</div>
                                        <br>
                                        <table cellspacing="1" cellpadding="2" border="0" style="table-layout:fixed;" class="EditTable">
                                            <tr class="FormData">

<!--                                                <td class="t-left label" >-->
<!--                                                    <b>Fecha de Devolucion</b>-->
<!--                                                </td>-->
<!--                                                <td class="t-left">-->
<!--                                                    <input type="text" id="txt_fecha_dev" class="input-mediun" >-->
<!--                                                </td>-->
                                                <td class="t-left label" >
                                                    <b>Tipo de Devolucion</b>
                                                </td>
                                                <td class="t-left">
                                                    <select id="slct_tip_dev" style="width:220px">
                                                        <option value="E" selected>Efectivo</option>
                                                        <option value="T">Transferencia</option>
                                                    </select>
                                                </td>
<!--                                                <td class="t-left label" >-->
<!--                                                    <b>Autoriza</b>-->
<!--                                                </td>-->
<!--                                                <td class="t-left" colspan="2">-->
<!--                                                    <input type="text" id="txt_autoriza" class="input-xlarge" >-->
<!--                                                </td>-->
                                            </tr>
                                            <tr class="FormData">
                                                <td class="t-left label" >
                                                    <b>Monto a retirar</b>
                                                </td>
                                                <td class="t-left">
                                                    <input type="text" id="txt_mon_ret" class="input-mediun" disabled>
                                                </td>
                                                <td class="t-left label" >
                                                    <b>% Dscto</b>
                                                </td>
                                                <td class="t-left">
                                                    <input type="text" id="txt_por_des" class="input-xlarge" disabled>
                                                </td>
                                                <td class="t-left label" >
                                                    <b>Monto de Descuento</b>
                                                </td>
                                                <td class="t-left">
                                                    <input type="text" id="txt_mon_des" class="input-xlarge" disabled>
                                                </td>
                                            </tr>
                                            <tr class="FormData">
                                                <td class="t-left label" >
                                                    <b>Boleta Serie</b>
                                                </td>
                                                <td class="t-left">
                                                    <input type="text" id="txt_bol_ser" class="input-mediun" >
                                                </td>
                                                <td class="t-left label" >
                                                    <b>Tipo de pago</b>
                                                </td>
                                                <td class="t-left">
                                                    <select id="slct_tip_pag" style="width:220px">
                                                        <option value="B" selected>BOLETA</option>
                                                        <option value="V">VOUCHER</option>
                                                        <option value="F">FACTURA</option>
                                                        <option value="E">RECIBO EGRESO</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="FormData">
                                                <td class="t-left label" >
                                                    <b>Fecha Boleta</b>
                                                </td>
                                                <td class="t-left">
                                                    <input type="text" id="txt_fecha_bol" class="input-mediun" >
                                                </td>
                                                <td class="t-left label" >
                                                    <b>Monto Boleta</b>
                                                </td>
                                                <td class="t-left">
                                                    <input type="text" id="txt_bol_mon" class="input-xlarge" >
                                                </td>
                                                <td class="t-left label" >
                                                    <b>Concepto</b>
                                                </td>
                                                <td class="t-left">
<!--                                                    <input type="text" id="txt_concepto" class="input-xlarge" >-->
                                                    <select id="slct_concepto" style="width:220px; display:none;" MULTIPLE>
                                                        <option value="MATRICULA" selected>MATRICULA</option>
                                                        <option value="INSCRIPCION">INSCRIPCION</option>
                                                        <option value="PENSION">PENSION</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="t-left label" >
                                                    <b>Retiro detale</b>
                                                </td>
                                                <td class="t-left">
                                                    <textarea name="tarea_detalle" id="tarea_detalle" cols="30" rows="10"></textarea>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="margin:15px 0px 10px 0px;">
                                            <a id="btn_registrar_retiro" onClick="RegistrarRetiro();" class="btn btn-azul sombra-3d t-blanco" href="javascript:void(0)">
                                                <i class="icon-white icon-ok-sign"></i>
                                                <span>Aceptar Retiro del Grupo</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                        	</table>
    				</div>
            	</div>
			</div>
		</div>
		<!-- dialogs -->
		<div id="form_pagos" title="Registro de Pagos">
			<table>
				<tr>
                    <td class="t-left label">Monto señalado por pagar:</td>
                    <td><input type="text" id="txt_monto_por_pagar" readonly class="input-small t-center t-negrita t-rojo t-13"><span class="t-rojo t-negrita"> *</span></td>
                    <td width="100"></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="t-left label">Fecha de Pago:</td>
                    <td><input type="text" id="txt_fecha_pago" class="input-small t-center"><span class="t-rojo t-negrita"> *</span></td>
                    <td></td>
                    <td rowspan="2">
                    	<table width="100%" id="valConceptos" style="display:none">
                        	<tr><td class="t-left label" colspan="2">Pagos :</td></tr>
                            <tr><td class="t-left label"> Número </td><td> Monto : </td></tr>
                        </table>
                    </td></td>
                </tr>
                <tr>
                    <td class="t-left label">Monto pagado:</td>
                    <td><input type="text" id="txt_monto_pagado" onKeyPress="return sistema.validaNumeros(event)" onKeyUp="CalculaDeuda();" class="input-small t-center" value="0"><span class="t-rojo t-negrita"> *</span></td>
                    <td><input type="hidden" id="txt_monto_minimo" class="input-small t-center"></td></td>
                    <td>
                    	<!--<a class="btn btn-azul sombra-3d t-blanco" onclick="cargarMontoPago();" href="javascript:void(0)">
	                        <i class="icon-white ui-icon-refresh"></i><span>Actualizar Pagos</span>
                        </a>-->
                    </td>
                </tr>
                 <tr>
                    <td class="t-left label">Monto deuda:</td>
                    <td><input type="text" id="txt_monto_deuda" class="input-small t-center" value="0" disabled><span class="t-rojo t-negrita"> *</span></td>
                </tr>
               <tr>
                    <td class="t-left label">Tipo Documento:</td>
                    <td>
                        <select id="slct_tipo_documento_pension" class="input-small" onChange="ValidaTipoPagoPension();">
	                        <option value="">--Seleccione--</option>
	                        <option value="B">Boleta</option>
	                        <option value="V">Voucher</option>
                        </select>
                        <span class="t-rojo t-negrita"> *</span>
                    </td>
                    <td><!--a class="btn btn-azul sombra-3d t-blanco" onClick="cargarMontoPago();" href="javascript:void(0)"> <i class="icon-white ui-icon-refresh"></i><span>Actualizar Pagos</span> </a--></td>
                    <td></td>
                </tr>
                <tr id="val_boleta_pension" style="display:none">
                    <td class="t-left label">Serie Boleta:</td>
                    <td>
                    	<input type="text" id="txt_serie_boleta_pension" class="input-small" onKeyPress="return sistema.validaNumeros(event)"  onBlur="sistema.lpad(this.id,'0',3)"><span class="t-rojo t-negrita"> *</span>
                    </td>
                    <td class="t-left label">Nro Boleta:</td>
                    <td>
                    	<input type="text" id="txt_nro_boleta_pension" class="input-small" onKeyPress="return sistema.validaNumeros(event)"  onBlur="sistema.lpad(this.id,'0',7)"><span class="t-rojo t-negrita"> *</span>

                    </td>
                </tr>
                <tr id="val_voucher_pension" style="display:none">
                    <td class="t-left label">Nro Voucher:</td>
                    <td class="t-left">
                    	<input type="text" id="txt_nro_voucher_pension" class="input-small" onKeyPress="return sistema.validaNumeros(event)" onBlur="sistema.lpad(this.id,'0',11);"><span class="t-rojo t-negrita"> *</span>
                    </td>
                    <td class="t-left label">Banco:</td>
                    <td>
                    	<select id="slct_banco_pension" class="input-small">
                        	<option value="">--Seleccione--</option>
                        </select>
                        <span class="t-rojo t-negrita"> *</span>
                    </td>
                </tr>
			</table>
            <div style="margin:15px 0px 10px 0px;">
                <a id="btn_registrar_pago" class="btn btn-azul sombra-3d t-blanco" href="javascript:void(0)">
                    <i class="icon-white icon-ok-sign"></i>
                    <span>REGISTRAR PAGO</span>
                </a>
            </div>
		</div>

        <div id="capaMensaje" class="capaMensaje" style="display:none"></div>		
		<hr>
		<?require_once('ifrm-footer.php')?>	
	</body>
</html>
