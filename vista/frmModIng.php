<div id="frmModIng" title="MANTENIMIENTO OPCIONES DE SISTEMA" class="corner_all" style="background: #ffffff;margin:7px;height: auto">
      <div id="frmErr_mtn" style="display: none" align="center" class="ui-state-error ui-corner-all">Ingrese todos los campos</div>
        <table cellspacing="1" cellpadding="2" border="0" style="table-layout:fixed" class="EditTable">
           <tr class="FormData">
            <td class="t-left label" >
              <b>Instituto</b>
            </td>
            <td class="t-left">
              <select id="slct_instituto">
              <option value="">--Seleccione--</option>
              </select>
            </td>
          </tr>
          <tr class="FormData">
            <td class="t-left label"  >
              <b>Descripción</b>
            </td>
            <td class="t-left">
              <input type="hidden" id="id_opcion" value="" />
              <input type="text" id="txt_descrip" value=""  style="width:200px"/>
            </td>
          </tr>
          <tr class="FormData">
            <td class="t-left label"  >
              <b>Convalidaci&oacute;n?</b>
            </td>
            <td class="t-left">              
              <select id="slct_tipo">
              <option value="S">SI</option>
              <option value="N">NO</option>
              </select>
            </td>
          </tr>
          <tr class="FormData">
            <td class="t-left label" >
              <b>Estado</b>
            </td>
            <td class="t-left">&nbsp;
              <select id="slct_estado">
              <option value="1">Activo</option>
              <option value="0">Inactivo</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <a id="btnFormModIng" class="button fm-button ui-corner-all fm-button-icon-left" style="margin-top: 10px">
              <span id="spanBtnFormModIng"></span><span class="icon-hdd"></span>
              </a>
            </td>
          </tr>
        </table>
    </div>