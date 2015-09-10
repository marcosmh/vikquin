<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>.::VikQuin::.</title>
    <link rel="stylesheet" href="../../../includes/css/style_modulo.css" type="text/css" />
	<link rel="stylesheet" href="../../../includes/css/tablas.css" type="text/css" />
    <link rel="stylesheet" href="../../../includes/css/jquery-ui-1.10.4.custom.css" type="text/css" />
    
    <script type="text/javascript" src="../../../includes/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../../../includes/js/jquery-ui-1.10.4.custom.js"></script>
    <script type="text/javascript" src="../../../includes/js/utilerias.js"></script>
    <script type="text/javascript" src="vista_captura_pronostico.js"></script>
</head>
<body>
<div id="msj_confirmacion" title="VikQuin" style="display: none;">
<p id="textMsjConfirmacion"></p>
</div>
<!-- ********************************** aqui codigo a pintar -->
<div id="content">
<form name="captura_datos" id="captura_datos" method="post" onsubmit="return false">
<input type="hidden" name="cve_usuario" id="cve_usuario" value="<?php if(!empty($cve_usuario)) echo $cve_usuario?>" />
<div align="center" id="grupoA">
<div class="title" align="left">Captura de Resultados</div>
<div align="left">
 <input name="bt_gene_key" type="button" class="input_button" id="bt_gene_key" value="Generar Keys" onclick="generar_key()"/>
 </div>
    <table width="60%" class="form">
      <tr>
        <td colspan="2" class='titulo'>Fecha Encuentro</td>
        <td class="titulo"><div align="right">Local</div></td>
        <td colspan="3" class="titulo">&nbsp;</td>
        <td colspan="2" class='titulo'>Visitante</td>
       </tr>
      <?php
		while($consulta_grupos = mysql_fetch_array($rs_consulta_grupos))
		{ 
           echo "<tr>";
		   echo "<td width='25%' class='etiqueta_alaizquierda'>".$consulta_grupos["FECHA_ENFRENTAMIENTO"]."
		         <input name='partido[]' type='hidden' value='".$consulta_grupos["CVE_ENFRENTAMIENTO"]."' /></td>";
		   echo "<td width='10%' class='etiqueta_aladerecha'><img src='../../".$consulta_grupos["BANDERA_LOCAL"]."'/></td>";
           echo "<td width='12%' class='etiqueta_aladerecha'>".$consulta_grupos["DESC_EQUIPO_LOCAL"]."</td>";
           echo "<td width='9%' align='center'><input name='local[]' type='text' class='input' id='local_".$consulta_grupos["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='5%' align='center' class='etiqueta_alcentro'>VS</td>";
           echo "<td width='9%' align='center'><input name='visitante[]' type='text' class='input' id='visitante_".$consulta_grupos["CVE_ENFRENTAMIENTO"]."' size='3' onkeypress='return getKeyNumber(event);' maxlength='2' /></td>";
           echo "<td width='12%' class='etiqueta_alaizquierda'>".$consulta_grupos["DESC_EQUIPO_VISITANTE"]."</td>";
		   echo "<td width='18%' class='etiqueta_alaizquierda'><img src='../../".$consulta_grupos["BANDERA_VISITANTE"]."'/></td>";
           echo "</tr>";
		}
      ?>
    </table>
    </div>
	<br/>
    <div align="center">
      <input name="bt_cancela" type="button" class="input_button" id="bt_cancela" value="Limpiar" onclick="limpiar()"/>
      <input name="bt_guarda" type="button" class="input_button" id="bt_guarda" value="Guardar" onclick="guardar()"/>
    </div>
</form>
 </div>
<!-- ******************************************* fin de codigo a pintar -->               
</body>
</html>