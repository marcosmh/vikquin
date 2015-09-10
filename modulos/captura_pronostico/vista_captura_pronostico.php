<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>.::VikQuin::.</title>
    <link rel="stylesheet" href="../../includes/css/style_modulo.css" type="text/css" />
	<link rel="stylesheet" href="../../includes/css/tablas.css" type="text/css" />
    <link rel="stylesheet" href="../../includes/css/jquery-ui-1.10.4.custom.css" type="text/css" />
    
    <script type="text/javascript" src="../../includes/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../../includes/js/jquery-ui-1.10.4.custom.js"></script>
    <script type="text/javascript" src="../../includes/js/utilerias.js"></script>
    <script type="text/javascript" src="vista_captura_pronostico.js"></script>
</head>
<body>
<div id="Validacion" title="VikQuin" style="display: none;">
<p id="textMensaje"></p>
</div>
<div id="msj_confirmacion" title="VikQuin" style="display: none;">
<p id="textMsjConfirmacion"></p>
</div>
<!-- ********************************** aqui codigo a pintar -->
<div id="content">
<form name="captura_datos" id="captura_datos" method="post" onsubmit="return false">
<input type="hidden" name="cve_usuario" id="cve_usuario" value="<?php if(!empty($cve_usuario)) echo $cve_usuario?>" />
    <div align="center" id="grupoA">
    <div class="title" align="left">Captura de Pronosticos del Grupo A</div>
    <table width="60%" class="form">
      <tr>
        <td colspan="2" class='titulo'>Fecha Encuentro</td>
        <td class="titulo"><div align="right">Local</div></td>
        <td colspan="3" class="titulo">&nbsp;</td>
        <td colspan="2" class='titulo'>Visitante</td>
       </tr>
      <?php
		while($consulta_grupo_a = mysql_fetch_array($rs_consulta_grupo_a))
		{ 
           echo "<tr>";
		   echo "<td width='25%' class='etiqueta_alaizquierda'>".$consulta_grupo_a["FECHA_ENFRENTAMIENTO"]."</td>";
		   echo "<td width='10%' class='etiqueta_aladerecha'><img src='../".$consulta_grupo_a["BANDERA_LOCAL"]."'/></td>";
           echo "<td width='12%' class='etiqueta_aladerecha'>".$consulta_grupo_a["DESC_EQUIPO_LOCAL"]."</td>";
           echo "<td width='9%' align='center'><input name='local_".$consulta_grupo_a["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='local_".$consulta_grupo_a["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='5%' align='center' class='etiqueta_alcentro'>VS</td>";
           echo "<td width='9%' align='center'><input name='visitante_".$consulta_grupo_a["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='visitante_".$consulta_grupo_a["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='12%' class='etiqueta_alaizquierda'>".$consulta_grupo_a["DESC_EQUIPO_VISITANTE"]."</td>";
		   echo "<td width='18%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_a["BANDERA_VISITANTE"]."'/></td>";
           echo "</tr>";
		}
      ?>
    </table>
    </div>
    <div align="center" style="display:none" id="grupoB">
    <div class="title" align="left">Captura de Pronosticos del Grupo B</div>
	 <table width="60%" class="form">
      <tr>
        <td colspan="2" class="titulo">Fecha Encuentro</td>
        <td class="titulo"><div align="right">Local</div></td>
        <td colspan="3" class="titulo">&nbsp;</td>
        <td colspan="2" class="titulo">Visitante</td>
       </tr>
      <?php
		while($consulta_grupo_b = mysql_fetch_assoc($rs_consulta_grupo_b))
		{
           echo "<tr>";
		   echo "<td width='25%' class='etiqueta_alaizquierda'>".$consulta_grupo_b["FECHA_ENFRENTAMIENTO"]."</td>";
		   echo "<td width='10%' class='etiqueta_aladerecha'><img src='../".$consulta_grupo_b["BANDERA_LOCAL"]."'/></td>";
           echo "<td width='12%' class='etiqueta_aladerecha'>".$consulta_grupo_b["DESC_EQUIPO_LOCAL"]."</td>";
           echo "<td width='9%' align='center'><input name='local_".$consulta_grupo_b["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='local_".$consulta_grupo_b["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='5%' align='center' class='etiqueta_alcentro'>VS</td>";
           echo "<td width='9%' align='center'><input name='visitante_".$consulta_grupo_b["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='visitante_".$consulta_grupo_b["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='12%' class='etiqueta_alaizquierda'>".$consulta_grupo_b["DESC_EQUIPO_VISITANTE"]."</td>";
		   echo "<td width='18%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_b["BANDERA_VISITANTE"]."'/></td>";
           echo "</tr>";
		}
      ?>
    </table> 
    </div>
    <div align="center" style="display:none"  id="grupoC">
    <div class="title" align="left">Captura de Pronosticos del Grupo C</div>
	 <table width="60%" class="form">
      <tr>
        <td colspan="2" class="titulo">Fecha Encuentro</td>
        <td class="titulo"><div align="right">Local</div></td>
        <td colspan="3" class="titulo">&nbsp;</td>
        <td colspan="2" class="titulo">Visitante</td>
       </tr>
      <?php
		while($consulta_grupo_c = mysql_fetch_assoc($rs_consulta_grupo_c))
		{
           echo "<tr>";
		   echo "<td width='25%' class='etiqueta_alaizquierda'>".$consulta_grupo_c["FECHA_ENFRENTAMIENTO"]."</td>";
		   echo "<td width='10%' class='etiqueta_aladerecha'><img src='../".$consulta_grupo_c["BANDERA_LOCAL"]."'/></td>";
           echo "<td width='12%' class='etiqueta_aladerecha'>".$consulta_grupo_c["DESC_EQUIPO_LOCAL"]."</td>";
           echo "<td width='9%' align='center'><input name='local_".$consulta_grupo_c["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='local_".$consulta_grupo_c["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='5%' align='center' class='etiqueta_alcentro'>VS</td>";
           echo "<td width='9%' align='center'><input name='visitante_".$consulta_grupo_c["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='visitante_".$consulta_grupo_c["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='12%' class='etiqueta_alaizquierda'>".$consulta_grupo_c["DESC_EQUIPO_VISITANTE"]."</td>";
		   echo "<td width='18%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_c["BANDERA_VISITANTE"]."'/></td>";
           echo "</tr>";
		}
      ?>
    </table> 
    </div>
    <div align="center" style="display:none"  id="grupoD">
    <div class="title" align="left">Captura de Pronosticos del Grupo D</div>
	 <table width="60%" class="form">
      <tr>
        <td colspan="2" class="titulo">Fecha Encuentro</td>
        <td class="titulo"><div align="right">Local</div></td>
        <td colspan="3" class="titulo">&nbsp;</td>
        <td colspan="2" class="titulo">Visitante</td>
       </tr>
      <?php
		while($consulta_grupo_d = mysql_fetch_assoc($rs_consulta_grupo_d))
		{
           echo "<tr>";
		   echo "<td width='25%' class='etiqueta_alaizquierda'>".$consulta_grupo_d["FECHA_ENFRENTAMIENTO"]."</td>";
		   echo "<td width='10%' class='etiqueta_aladerecha'><img src='../".$consulta_grupo_d["BANDERA_LOCAL"]."'/></td>";
           echo "<td width='12%' class='etiqueta_aladerecha'>".$consulta_grupo_d["DESC_EQUIPO_LOCAL"]."</td>";
           echo "<td width='9%' align='center'><input name='local_".$consulta_grupo_d["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='local_".$consulta_grupo_d["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='5%' align='center' class='etiqueta_alcentro'>VS</td>";
           echo "<td width='9%' align='center'><input name='visitante_".$consulta_grupo_d["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='visitante_".$consulta_grupo_d["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='12%' class='etiqueta_alaizquierda'>".$consulta_grupo_d["DESC_EQUIPO_VISITANTE"]."</td>";
		   echo "<td width='18%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_d["BANDERA_VISITANTE"]."'/></td>";
           echo "</tr>";
		}
      ?>
    </table> 
    </div>
    <div align="center" style="display:none"  id="grupoE">
    <div class="title" align="left">Captura de Pronosticos del Grupo E</div>
	 <table width="60%" class="form">
      <tr>
        <td colspan="2" class="titulo">Fecha Encuentro</td>
        <td class="titulo"><div align="right">Local</div></td>
        <td colspan="3" class="titulo">&nbsp;</td>
        <td colspan="2" class="titulo">Visitante</td>
       </tr>
      <?php
		while($consulta_grupo_e = mysql_fetch_assoc($rs_consulta_grupo_e))
		{
           echo "<tr>";
		   echo "<td width='25%' class='etiqueta_alaizquierda'>".$consulta_grupo_e["FECHA_ENFRENTAMIENTO"]."</td>";
		   echo "<td width='10%' class='etiqueta_aladerecha'><img src='../".$consulta_grupo_e["BANDERA_LOCAL"]."'/></td>";
           echo "<td width='12%' class='etiqueta_aladerecha'>".$consulta_grupo_e["DESC_EQUIPO_LOCAL"]."</td>";
           echo "<td width='9%' align='center'><input name='local_".$consulta_grupo_e["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='local_".$consulta_grupo_e["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='5%' align='center' class='etiqueta_alcentro'>VS</td>";
           echo "<td width='9%' align='center'><input name='visitante_".$consulta_grupo_e["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='visitante_".$consulta_grupo_e["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='12%' class='etiqueta_alaizquierda'>".$consulta_grupo_e["DESC_EQUIPO_VISITANTE"]."</td>";
		   echo "<td width='18%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_e["BANDERA_VISITANTE"]."'/></td>";
           echo "</tr>";
		}
      ?>
    </table> 
    </div>
    <div align="center" style="display:none"  id="grupoF">
    <div class="title" align="left">Captura de Pronosticos del Grupo F</div>
	 <table width="60%" class="form">
      <tr>
        <td colspan="2" class="titulo">Fecha Encuentro</td>
        <td class="titulo"><div align="right">Local</div></td>
        <td colspan="3" class="titulo">&nbsp;</td>
        <td colspan="2" class="titulo">Visitante</td>
       </tr>
      <?php
		while($consulta_grupo_f = mysql_fetch_assoc($rs_consulta_grupo_f))
		{
           echo "<tr>";
		   echo "<td width='25%' class='etiqueta_alaizquierda'>".$consulta_grupo_f["FECHA_ENFRENTAMIENTO"]."</td>";
		   echo "<td width='10%' class='etiqueta_aladerecha'><img src='../".$consulta_grupo_f["BANDERA_LOCAL"]."'/></td>";
           echo "<td width='12%' class='etiqueta_aladerecha'>".$consulta_grupo_f["DESC_EQUIPO_LOCAL"]."</td>";
           echo "<td width='9%' align='center'><input name='local_".$consulta_grupo_f["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='local_".$consulta_grupo_f["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='5%' align='center' class='etiqueta_alcentro'>VS</td>";
           echo "<td width='9%' align='center'><input name='visitante_".$consulta_grupo_f["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='visitante_".$consulta_grupo_f["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='12%' class='etiqueta_alaizquierda'>".$consulta_grupo_f["DESC_EQUIPO_VISITANTE"]."</td>";
		   echo "<td width='18%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_f["BANDERA_VISITANTE"]."'/></td>";
           echo "</tr>";
		}
      ?>
    </table> 
    </div>
      <div align="center" style="display:none"  id="grupoG">
    <div class="title" align="left">Captura de Pronosticos del Grupo G</div>
	 <table width="60%" class="form">
      <tr>
        <td colspan="2" class="titulo">Fecha Encuentro</td>
        <td class="titulo"><div align="right">Local</div></td>
        <td colspan="3" class="titulo">&nbsp;</td>
        <td colspan="2" class="titulo">Visitante</td>
       </tr>
      <?php
		while($consulta_grupo_g = mysql_fetch_assoc($rs_consulta_grupo_g))
		{
           echo "<tr>";
		   echo "<td width='25%' class='etiqueta_alaizquierda'>".$consulta_grupo_g["FECHA_ENFRENTAMIENTO"]."</td>";
		   echo "<td width='10%' class='etiqueta_aladerecha'><img src='../".$consulta_grupo_g["BANDERA_LOCAL"]."'/></td>";
           echo "<td width='12%' class='etiqueta_aladerecha'>".$consulta_grupo_g["DESC_EQUIPO_LOCAL"]."</td>";
           echo "<td width='9%' align='center'><input name='local_".$consulta_grupo_g["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='local_".$consulta_grupo_g["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='5%' align='center' class='etiqueta_alcentro'>VS</td>";
           echo "<td width='9%' align='center'><input name='visitante_".$consulta_grupo_g["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='visitante_".$consulta_grupo_g["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='12%' class='etiqueta_alaizquierda'>".$consulta_grupo_g["DESC_EQUIPO_VISITANTE"]."</td>";
		   echo "<td width='18%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_g["BANDERA_VISITANTE"]."'/></td>";
           echo "</tr>";
		}
      ?>
    </table> 
    </div>
       <div align="center" style="display:none"  id="grupoH">
    <div class="title" align="left">Captura de Pronosticos del Grupo H</div>
	 <table width="60%" class="form">
      <tr>
        <td colspan="2" class="titulo">Fecha Encuentro</td>
        <td class="titulo"><div align="right">Local</div></td>
        <td colspan="3" class="titulo">&nbsp;</td>
        <td colspan="2" class="titulo">Visitante</td>
       </tr>
      <?php
		while($consulta_grupo_h = mysql_fetch_assoc($rs_consulta_grupo_h))
		{
           echo "<tr>";
		   echo "<td width='25%' class='etiqueta_alaizquierda'>".$consulta_grupo_h["FECHA_ENFRENTAMIENTO"]."</td>";
		   echo "<td width='10%' class='etiqueta_aladerecha'><img src='../".$consulta_grupo_h["BANDERA_LOCAL"]."'/></td>";
           echo "<td width='12%' class='etiqueta_aladerecha'>".$consulta_grupo_h["DESC_EQUIPO_LOCAL"]."</td>";
           echo "<td width='9%' align='center'><input name='local_".$consulta_grupo_h["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='local_".$consulta_grupo_h["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='5%' align='center' class='etiqueta_alcentro'>VS</td>";
           echo "<td width='9%' align='center'><input name='visitante_".$consulta_grupo_h["CVE_ENFRENTAMIENTO"]."' type='text' class='input' id='visitante_".$consulta_grupo_h["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='12%' class='etiqueta_alaizquierda'>".$consulta_grupo_h["DESC_EQUIPO_VISITANTE"]."</td>";
		   echo "<td width='18%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_h["BANDERA_VISITANTE"]."'/></td>";
           echo "</tr>";
		}
      ?>
    </table> 
    </div>
    <br/>
    <div align="center">
      <input name="bt_continuar_1" type="button" class="input_button" id="bt_continuar_1" value="Continuar" onclick="continuar1()"/>
      
      <input name="bt_regresar_1" type="button" class="input_button" id="bt_regresar_1" value="Regresar" style="display:none" onclick="regresar1()"/>
      <input name="bt_continuar_2" type="button" class="input_button" id="bt_continuar_2" value="Continuar" style="display:none" onclick="continuar2()"/>
      
      <input name="bt_regresar_2" type="button" class="input_button" id="bt_regresar_2" value="Regresar" style="display:none" onclick="regresar2()"/>
      <input name="bt_continuar_3" type="button" class="input_button" id="bt_continuar_3" value="Continuar" style="display:none" onclick="continuar3()"/>
      
      <input name="bt_regresar_3" type="button" class="input_button" id="bt_regresar_3" value="Regresar" style="display:none" onclick="regresar3()"/>
      <input name="bt_continuar_4" type="button" class="input_button" id="bt_continuar_4" value="Continuar" style="display:none" onclick="continuar4()"/>
      
      <input name="bt_regresar_4" type="button" class="input_button" id="bt_regresar_4" value="Regresar" style="display:none" onclick="regresar4()"/>
      <input name="bt_continuar_5" type="button" class="input_button" id="bt_continuar_5" value="Continuar" style="display:none" onclick="continuar5()"/>
      
      <input name="bt_regresar_5" type="button" class="input_button" id="bt_regresar_5" value="Regresar" style="display:none" onclick="regresar5()"/>
      <input name="bt_continuar_6" type="button" class="input_button" id="bt_continuar_6" value="Continuar" style="display:none" onclick="continuar6()"/>
      
      <input name="bt_regresar_6" type="button" class="input_button" id="bt_regresar_6" value="Regresar" style="display:none" onclick="regresar6()"/>
      <input name="bt_continuar_7" type="button" class="input_button" id="bt_continuar_7" value="Continuar" style="display:none" onclick="continuar7()"/>
      
      <input name="bt_regresar_7" type="button" class="input_button" id="bt_regresar_7" value="Regresar" style="display:none" onclick="regresar7()"/>
      <input name="bt_guardar" type="button" class="input_button" id="bt_guardar" value="Guardar Registro" style="display:none" onclick="guardarFinal()"/>
    </div>
</form>
 </div>
<!-- ******************************************* fin de codigo a pintar -->               
</body>
</html>