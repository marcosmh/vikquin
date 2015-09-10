<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::VikQuin::.</title>
<link rel="stylesheet" href="../../includes/css/style_modulo.css" type="text/css" />
<link rel="stylesheet" href="../../includes/css/tablas.css" type="text/css" />
<script type="text/javascript" src="../../includes/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="vista_detalle_pronostico.js"></script>
</head>
<body>
<form name="captura_datos" id="captura_datos" method="post">
 <div id="content">
 <div class="title">Detalle de Pronostico</div>
 <div align="left">
 <input name="bt_ver_detalle" type="button" class="input_button" id="bt_ver_detalle" value="Estadistica Gral. Res." onclick="ver_detalle();"/>
 </div>
 <br/>
 <div align="left">
 <label class="etiqueta_alaizquierda" style="font-size:18px">Puntuaje Total:&nbsp;&nbsp;<?php echo $total["TOTAL"]; ?></label>
 </div>
 <br/>
 <div align="center">
 <table width="100%" align="center">
 <tr>
 <td width="50%" height="36">
       <table width="80%" align="center" class="form">
         <tr>
           <td class="titulo">Grupo A</td>
           <td class="titulo"><div align="right">Local</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo"><div align="left">Visitante</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo">Puntuaje</td>
         </tr>
         <?php
            while($consulta_grupo_a = mysql_fetch_array($rs_consulta_grupo_a))
            { 
               echo "<tr>";
               echo "<td width='10%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_a["BANDERA_LOCAL"]."'/></td>";
               echo "<td width='15%' class='etiqueta_aladerecha'>".$consulta_grupo_a["DESC_EQUIPO_LOCAL"]."</td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_a["RESULTADO"]."</td>";
               echo "<td width='16%' class='etiqueta_alaizquierda'>".$consulta_grupo_a["DESC_EQUIPO_VISITANTE"]."</td>";
               echo "<td width='13%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_a["BANDERA_VISITANTE"]."'/></td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_a["PUNTAJE_PARTIDO"]."</td>";
               echo "</tr>";
           }
          ?>
         </table>
 </td>
 <td width="577">
     <table width="80%" align="center" class="form">
       <tr>
         <td class="titulo">Grupo B</td>
         <td class="titulo"><div align="right">Local</div></td>
         <td class="titulo">&nbsp;</td>
         <td class="titulo"><div align="left">Visitante</div></td>
         <td class="titulo">&nbsp;</td>
         <td class="titulo">Puntuaje</td>
       </tr>
       <?php
            while($consulta_grupo_b = mysql_fetch_array($rs_consulta_grupo_b))
            { 
               echo "<tr>";
               echo "<td width='10%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_b["BANDERA_LOCAL"]."'/></td>";
               echo "<td width='15%' class='etiqueta_aladerecha'>".$consulta_grupo_b["DESC_EQUIPO_LOCAL"]."</td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_b["RESULTADO"]."</td>";
               echo "<td width='16%' class='etiqueta_alaizquierda'>".$consulta_grupo_b["DESC_EQUIPO_VISITANTE"]."</td>";
               echo "<td width='13%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_b["BANDERA_VISITANTE"]."'/></td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_b["PUNTAJE_PARTIDO"]."</td>";
               echo "</tr>";
           }
          ?>
     </table>
 </td>
 </tr>
 <tr>
   <td height="36">
       <table width="80%" align="center" class="form">
         <tr>
           <td class="titulo">Grupo C</td>
           <td class="titulo"><div align="right">Local</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo"><div align="left">Visitante</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo">Puntuaje</td>
         </tr>
          <?php
            while($consulta_grupo_c = mysql_fetch_array($rs_consulta_grupo_c))
            { 
               echo "<tr>";
               echo "<td width='10%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_c["BANDERA_LOCAL"]."'/></td>";
               echo "<td width='15%' class='etiqueta_aladerecha'>".$consulta_grupo_c["DESC_EQUIPO_LOCAL"]."</td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_c["RESULTADO"]."</td>";
               echo "<td width='16%' class='etiqueta_alaizquierda'>".$consulta_grupo_c["DESC_EQUIPO_VISITANTE"]."</td>";
               echo "<td width='13%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_c["BANDERA_VISITANTE"]."'/></td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_c["PUNTAJE_PARTIDO"]."</td>";
               echo "</tr>";
           }
          ?>
       </table>
   </td>
   <td width="50%">
       <table width="80%" align="center" class="form">
         <tr>
           <td class="titulo">Grupo D</td>
           <td class="titulo"><div align="right">Local</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo"><div align="left">Visitante</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo">Puntuaje</td>
         </tr>
          <?php
            while($consulta_grupo_d = mysql_fetch_array($rs_consulta_grupo_d))
            { 
               echo "<tr>";
               echo "<td width='10%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_d["BANDERA_LOCAL"]."'/></td>";
               echo "<td width='15%' class='etiqueta_aladerecha'>".$consulta_grupo_d["DESC_EQUIPO_LOCAL"]."</td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_d["RESULTADO"]."</td>";
               echo "<td width='16%' class='etiqueta_alaizquierda'>".$consulta_grupo_d["DESC_EQUIPO_VISITANTE"]."</td>";
               echo "<td width='13%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_d["BANDERA_VISITANTE"]."'/></td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_d["PUNTAJE_PARTIDO"]."</td>";
               echo "</tr>";
           }
          ?>
       </table>
   </td>
 </tr>
 <tr>
   <td width="50%">
       <table width="80%" align="center" class="form">
         <tr>
           <td class="titulo">Grupo E</td>
           <td class="titulo"><div align="right">Local</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo"><div align="left">Visitante</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo">Puntuaje</td>
         </tr>
         <?php
            while($consulta_grupo_e = mysql_fetch_array($rs_consulta_grupo_e))
            { 
               echo "<tr>";
               echo "<td width='10%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_e["BANDERA_LOCAL"]."'/></td>";
               echo "<td width='15%' class='etiqueta_aladerecha'>".$consulta_grupo_e["DESC_EQUIPO_LOCAL"]."</td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_e["RESULTADO"]."</td>";
               echo "<td width='16%' class='etiqueta_alaizquierda'>".$consulta_grupo_e["DESC_EQUIPO_VISITANTE"]."</td>";
               echo "<td width='13%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_e["BANDERA_VISITANTE"]."'/></td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_e["PUNTAJE_PARTIDO"]."</td>";
               echo "</tr>";
           }
          ?>
       </table>
   </td>
   <td width="50%">
       <table width="80%" align="center" class="form">
         <tr>
           <td class="titulo">Grupo F</td>
           <td class="titulo"><div align="right">Local</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo"><div align="left">Visitante</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo">Puntuaje</td>
         </tr>
         <?php
            while($consulta_grupo_f = mysql_fetch_array($rs_consulta_grupo_f))
            { 
               echo "<tr>";
               echo "<td width='10%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_f["BANDERA_LOCAL"]."'/></td>";
               echo "<td width='15%' class='etiqueta_aladerecha'>".$consulta_grupo_f["DESC_EQUIPO_LOCAL"]."</td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_f["RESULTADO"]."</td>";
               echo "<td width='16%' class='etiqueta_alaizquierda'>".$consulta_grupo_f["DESC_EQUIPO_VISITANTE"]."</td>";
               echo "<td width='13%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_f["BANDERA_VISITANTE"]."'/></td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_f["PUNTAJE_PARTIDO"]."</td>";
               echo "</tr>";
           }
          ?>
       </table>
   </td>
 </tr>
 <tr>
   <td width="50%">
       <table width="80%" align="center" class="form">
         <tr>
           <td class="titulo">Grupo G</td>
           <td class="titulo"><div align="right">Local</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo"><div align="left">Visitante</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo">Puntuaje</td>
         </tr>
         <?php
            while($consulta_grupo_g = mysql_fetch_array($rs_consulta_grupo_g))
            { 
               echo "<tr>";
               echo "<td width='10%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_g["BANDERA_LOCAL"]."'/></td>";
               echo "<td width='15%' class='etiqueta_aladerecha'>".$consulta_grupo_g["DESC_EQUIPO_LOCAL"]."</td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_g["RESULTADO"]."</td>";
               echo "<td width='16%' class='etiqueta_alaizquierda'>".$consulta_grupo_g["DESC_EQUIPO_VISITANTE"]."</td>";
               echo "<td width='13%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_g["BANDERA_VISITANTE"]."'/></td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_g["PUNTAJE_PARTIDO"]."</td>";
               echo "</tr>";
           }
          ?>
       </table>
   </td>
   <td width="50%">
       <table width="80%" align="center" class="form">
         <tr>
           <td class="titulo">Grupo H</td>
           <td class="titulo"><div align="right">Local</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo"><div align="left">Visitante</div></td>
           <td class="titulo">&nbsp;</td>
           <td class="titulo">Puntuaje</td>
         </tr>
         <?php
            while($consulta_grupo_h = mysql_fetch_array($rs_consulta_grupo_h))
            { 
               echo "<tr>";
               echo "<td width='10%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_h["BANDERA_LOCAL"]."'/></td>";
               echo "<td width='15%' class='etiqueta_aladerecha'>".$consulta_grupo_h["DESC_EQUIPO_LOCAL"]."</td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_h["RESULTADO"]."</td>";
               echo "<td width='16%' class='etiqueta_alaizquierda'>".$consulta_grupo_h["DESC_EQUIPO_VISITANTE"]."</td>";
               echo "<td width='13%' class='etiqueta_alaizquierda'><img src='../".$consulta_grupo_h["BANDERA_VISITANTE"]."'/></td>";
               echo "<td width='14%' class='etiqueta_alcentro'>".$consulta_grupo_h["PUNTAJE_PARTIDO"]."</td>";
               echo "</tr>";
           }
          ?>
       </table>
   </td>
 </tr>
 </table>
 </div>
 </div>
</form>
</body>
</html>