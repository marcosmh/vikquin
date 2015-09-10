<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::VikQuin::.</title>
<link rel="stylesheet" href="../../includes/css/style_modulo.css" type="text/css" />
<link rel="stylesheet" href="../../includes/css/tablas.css" type="text/css" />
<script type="text/javascript" src="../../includes/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="vista_detalle_pronostico_gral.js"></script>
</head>
<body>
<form name="detalle" id="detalle" method="post">
 <div id="content">
 <div class="title">Detalle de Pronostico general </div>
 <div align="left">
 <input name="bt_ver_detalle" type="button" class="input_button" id="bt_ver_detalle" value="Regresar" onclick="regresar();" />
 </div>
 
 <br/>
 <br/>
 <div class="datagrid" align="left">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="datagrid">
	<thead>
      <?php //Colocamos en un arreglo los datos obtenidos para luego pintarlos en la vista 
	  $verde = "#8AD167";
	  $amarillo = "#FDFF69";
	  $rojo = "#E83F3F";
	  $blanco = "#FFFFFF";
	  $color = $verde;
	  $pivote = 0;   
	while($resul_enc = mysql_fetch_assoc($encabezado))
    {?>
  <tr>
    <th width="13%">#</th>
    <th width="21%">Usuario</th>
    <th width="13%">Puntaje Total</th>
    <th width="66%" <?php echo $er1; ?>><?php echo $resul_enc['enf1']; ?></th>
    <th width="66%" <?php echo $er2; ?>><?php echo $resul_enc['enf2']; ?></th>
    <th width="66%" <?php echo $er3; ?>><?php echo $resul_enc['enf3']; ?></th>
    <th width="66%" <?php echo $er4; ?>><?php echo $resul_enc['enf4']; ?></th>
    <th width="66%" <?php echo $er5; ?>><?php echo $resul_enc['enf5']; ?></th>
    <th width="66%" <?php echo $er6; ?>><?php echo $resul_enc['enf6']; ?></th>
    <th width="66%" <?php echo $er7; ?>><?php echo $resul_enc['enf7']; ?></th>
    <th width="66%" <?php echo $er8; ?>><?php echo $resul_enc['enf8']; ?></th>
    <th width="66%" <?php echo $er9; ?>><?php echo $resul_enc['enf9']; ?></th>
    <th width="66%" <?php echo $er10; ?>><?php echo $resul_enc['enf10']; ?></th>
    <th width="66%" <?php echo $er11; ?>><?php echo $resul_enc['enf11']; ?></th>
    <th width="66%" <?php echo $er12; ?>><?php echo $resul_enc['enf12']; ?></th>
    <th width="66%" <?php echo $er13; ?>><?php echo $resul_enc['enf13']; ?></th>
    <th width="66%" <?php echo $er14; ?>><?php echo $resul_enc['enf14']; ?></th>
    <th width="66%" <?php echo $er15; ?>><?php echo $resul_enc['enf15']; ?></th>
    <th width="66%" <?php echo $er16; ?>><?php echo $resul_enc['enf16']; ?></th>
    <th width="66%" <?php echo $er17; ?>><?php echo $resul_enc['enf17']; ?></th>
    <th width="66%" <?php echo $er18; ?>><?php echo $resul_enc['enf18']; ?></th>
    <th width="66%" <?php echo $er19; ?>><?php echo $resul_enc['enf19']; ?></th>
    <th width="66%" <?php echo $er20; ?>><?php echo $resul_enc['enf20']; ?></th>
    <th width="66%" <?php echo $er21; ?>><?php echo $resul_enc['enf21']; ?></th>
    <th width="66%" <?php echo $er22; ?>><?php echo $resul_enc['enf22']; ?></th>
    <th width="66%" <?php echo $er23; ?>><?php echo $resul_enc['enf23']; ?></th>
    <th width="66%" <?php echo $er24; ?>><?php echo $resul_enc['enf24']; ?></th>
    <th width="66%" <?php echo $er25; ?>><?php echo $resul_enc['enf25']; ?></th>
    <th width="66%" <?php echo $er26; ?>><?php echo $resul_enc['enf26']; ?></th>
    <th width="66%" <?php echo $er27; ?>><?php echo $resul_enc['enf27']; ?></th>
    <th width="66%" <?php echo $er28; ?>><?php echo $resul_enc['enf28']; ?></th>
    <th width="66%" <?php echo $er29; ?>><?php echo $resul_enc['enf29']; ?></th>
    <th width="66%" <?php echo $er30; ?>><?php echo $resul_enc['enf30']; ?></th>
    <th width="66%" <?php echo $er31; ?>><?php echo $resul_enc['enf31']; ?></th>
    <th width="66%" <?php echo $er32; ?>><?php echo $resul_enc['enf32']; ?></th>
    <th width="66%" <?php echo $er33; ?>><?php echo $resul_enc['enf33']; ?></th>
    <th width="66%" <?php echo $er34; ?>><?php echo $resul_enc['enf34']; ?></th>
    <th width="66%" <?php echo $er35; ?>><?php echo $resul_enc['enf35']; ?></th>
    <th width="66%" <?php echo $er36; ?>><?php echo $resul_enc['enf36']; ?></th>
    <th width="66%" <?php echo $er37; ?>><?php echo $resul_enc['enf37']; ?></th>
    <th width="66%" <?php echo $er38; ?>><?php echo $resul_enc['enf38']; ?></th>
    <th width="66%" <?php echo $er39; ?>><?php echo $resul_enc['enf39']; ?></th>
    <th width="66%" <?php echo $er40; ?>><?php echo $resul_enc['enf40']; ?></th>
    <th width="66%" <?php echo $er41; ?>><?php echo $resul_enc['enf41']; ?></th>
    <th width="66%" <?php echo $er42; ?>><?php echo $resul_enc['enf42']; ?></th>
    <th width="66%" <?php echo $er43; ?>><?php echo $resul_enc['enf43']; ?></th>
    <th width="66%" <?php echo $er44; ?>><?php echo $resul_enc['enf44']; ?></th>
    <th width="66%" <?php echo $er45; ?>><?php echo $resul_enc['enf45']; ?></th>
    <th width="66%" <?php echo $er46; ?>><?php echo $resul_enc['enf46']; ?></th>
    <th width="66%" <?php echo $er47; ?>><?php echo $resul_enc['enf47']; ?></th>
    <th width="66%" <?php echo $er48; ?>><?php echo $resul_enc['enf48']; ?></th>
  </tr>
  <?php } ?>
  </thead>
   <?php //Colocamos en un arreglo los datos obtenidos para luego pintarlos en la vista    
	$contador = 0;
	while($resul= mysql_fetch_assoc($resultado))
    { 
		if($color == $verde)
	  	{
		  if($resul["PUNTAJE"] < $pivote)
		  {
			  $color = $amarillo;
		  }
          $pivote = $resul["PUNTAJE"];
	  	}
	  	else if($color == $amarillo)
	    {
		   if($resul["PUNTAJE"] < $pivote)
		   {
			 $color = $rojo;
		   }
			 $pivote = $resul["PUNTAJE"];
		}
		else if($color == $rojo)
		{
		   if($resul["PUNTAJE"] < $pivote)
		   {
			  $color = $blanco;
		   }
			 $pivote = $resul["PUNTAJE"];
		}

	   $nombre_usuario = $resul['NICK'];
		$i++;
	?>
          <tbody>
            <tr bgcolor="<?php echo $color?>" >
              <td><?php echo $i; ?></td>
              <td class="etiqueta_alaizquierda"><?php echo $resul['NOMBRE_COMPLETO']; ?></td>
              <td class="etiqueta_alcentro"><?php echo $resul['PUNTAJE']; ?></td>
              <td title="<?php echo "Partido: ".$e1."\n".$nombre_usuario.": ".$resul['enf1']; ?>"><?php echo $resul['enf1']; ?></td>
              <td title="<?php echo "Partido: ".$e2."\n".$nombre_usuario.": ".$resul['enf2'];  ?>" ><?php echo $resul['enf2']; ?></td>
              <td title="<?php echo "Partido: ".$e3."\n".$nombre_usuario.": ".$resul['enf3']; ?>"><?php echo $resul['enf3']; ?></td>
              <td title="<?php echo "Partido: ".$e4."\n".$nombre_usuario.": ".$resul['enf4']; ?>"><?php echo $resul['enf4']; ?></td>
              <td title="<?php echo "Partido: ".$e5."\n".$nombre_usuario.": ".$resul['enf5']; ?>"><?php echo $resul['enf5']; ?></td>
              <td title="<?php echo "Partido: ".$e6."\n".$nombre_usuario.": ".$resul['enf6']; ?>"><?php echo $resul['enf6']; ?></td>
              <td title="<?php echo "Partido: ".$e7."\n".$nombre_usuario.": ".$resul['enf7']; ?>"><?php echo $resul['enf7']; ?></td>
              <td title="<?php echo "Partido: ".$e8."\n".$nombre_usuario.": ".$resul['enf8']; ?>"><?php echo $resul['enf8']; ?></td>
              <td title="<?php echo "Partido: ".$e9."\n".$nombre_usuario.": ".$resul['enf9']; ?>"><?php echo $resul['enf9']; ?></td>
              <td title="<?php echo "Partido: ".$e10."\n".$nombre_usuario.": ".$resul['enf10'];?>"><?php echo $resul['enf10']; ?></td>
              <td title="<?php echo "Partido: ".$e11."\n".$nombre_usuario.": ".$resul['enf11']; ?>"><?php echo $resul['enf11']; ?></td>
              <td title="<?php echo "Partido: ".$e12."\n".$nombre_usuario.": ".$resul['enf12']; ?>"><?php echo $resul['enf12']; ?></td>
              <td title="<?php echo "Partido: ".$e13."\n".$nombre_usuario.": ".$resul['enf13']; ?>"><?php echo $resul['enf13']; ?></td>
              <td title="<?php echo "Partido: ".$e14."\n".$nombre_usuario.": ".$resul['enf14']; ?>"><?php echo $resul['enf14']; ?></td>
              <td title="<?php echo "Partido: ".$e15."\n".$nombre_usuario.": ".$resul['enf15']; ?>"><?php echo $resul['enf15']; ?></td>
              <td title="<?php echo "Partido: ".$e16."\n".$nombre_usuario.": ".$resul['enf16']; ?>"><?php echo $resul['enf16']; ?></td>
              <td title="<?php echo "Partido: ".$e17."\n".$nombre_usuario.": ".$resul['enf17']; ?>"><?php echo $resul['enf17']; ?></td>
              <td title="<?php echo "Partido: ".$e18."\n".$nombre_usuario.": ".$resul['enf18']; ?>"><?php echo $resul['enf18']; ?></td>
              <td title="<?php echo "Partido: ".$e19."\n".$nombre_usuario.": ".$resul['enf19']; ?>"><?php echo $resul['enf19']; ?></td>
              <td title="<?php echo "Partido: ".$e20."\n".$nombre_usuario.": ".$resul['enf20']; ?>"><?php echo $resul['enf20']; ?></td>
              <td title="<?php echo "Partido: ".$e21."\n".$nombre_usuario.": ".$resul['enf21']; ?>"><?php echo $resul['enf21']; ?></td>
              <td title="<?php echo "Partido: ".$e22."\n".$nombre_usuario.": ".$resul['enf22']; ?>"><?php echo $resul['enf22']; ?></td>
              <td title="<?php echo "Partido: ".$e23."\n".$nombre_usuario.": ".$resul['enf23']; ?>"><?php echo $resul['enf23']; ?></td>
              <td title="<?php echo "Partido: ".$e24."\n".$nombre_usuario.": ".$resul['enf24']; ?>"><?php echo $resul['enf24']; ?></td>
              <td title="<?php echo "Partido: ".$e25."\n".$nombre_usuario.": ".$resul['enf25']; ?>"><?php echo $resul['enf25']; ?></td>
              <td title="<?php echo "Partido: ".$e26."\n".$nombre_usuario.": ".$resul['enf26']; ?>"><?php echo $resul['enf26']; ?></td>
              <td title="<?php echo "Partido: ".$e27."\n".$nombre_usuario.": ".$resul['enf27']; ?>"><?php echo $resul['enf27']; ?></td>
              <td title="<?php echo "Partido: ".$e28."\n".$nombre_usuario.": ".$resul['enf28']; ?>"><?php echo $resul['enf28']; ?></td>
              <td title="<?php echo "Partido: ".$e29."\n".$nombre_usuario.": ".$resul['enf29']; ?>"><?php echo $resul['enf29']; ?></td>
              <td title="<?php echo "Partido: ".$e30."\n".$nombre_usuario.": ".$resul['enf30']; ?>"><?php echo $resul['enf30']; ?></td>
              <td title="<?php echo "Partido: ".$e31."\n".$nombre_usuario.": ".$resul['enf31']; ?>"><?php echo $resul['enf31']; ?></td>
              <td title="<?php echo "Partido: ".$e32."\n".$nombre_usuario.": ".$resul['enf32']; ?>"><?php echo $resul['enf32']; ?></td>
              <td title="<?php echo "Partido: ".$e33."\n".$nombre_usuario.": ".$resul['enf33']; ?>"><?php echo $resul['enf33']; ?></td>
              <td title="<?php echo "Partido: ".$e34."\n".$nombre_usuario.": ".$resul['enf34']; ?>"><?php echo $resul['enf34']; ?></td>
              <td title="<?php echo "Partido: ".$e35."\n".$nombre_usuario.": ".$resul['enf35']; ?>"><?php echo $resul['enf35']; ?></td>
              <td title="<?php echo "Partido: ".$e36."\n".$nombre_usuario.": ".$resul['enf36']; ?>"><?php echo $resul['enf36']; ?></td>
              <td title="<?php echo "Partido: ".$e37."\n".$nombre_usuario.": ".$resul['enf37']; ?>"><?php echo $resul['enf37']; ?></td>
              <td title="<?php echo "Partido: ".$e38."\n".$nombre_usuario.": ".$resul['enf38']; ?>"><?php echo $resul['enf38']; ?></td>
              <td title="<?php echo "Partido: ".$e39."\n".$nombre_usuario.": ".$resul['enf39']; ?>"><?php echo $resul['enf39']; ?></td>
              <td title="<?php echo "Partido: ".$e40."\n".$nombre_usuario.": ".$resul['enf40']; ?>"><?php echo $resul['enf40']; ?></td>
              <td title="<?php echo "Partido: ".$e41."\n".$nombre_usuario.": ".$resul['enf41']; ?>"><?php echo $resul['enf41']; ?></td>
              <td title="<?php echo "Partido: ".$e42."\n".$nombre_usuario.": ".$resul['enf42']; ?>"><?php echo $resul['enf42']; ?></td>
              <td title="<?php echo "Partido: ".$e43."\n".$nombre_usuario.": ".$resul['enf43']; ?>"><?php echo $resul['enf43']; ?></td>
              <td title="<?php echo "Partido: ".$e44."\n".$nombre_usuario.": ".$resul['enf44']; ?>"><?php echo $resul['enf44']; ?></td>
              <td title="<?php echo "Partido: ".$e45."\n".$nombre_usuario.": ".$resul['enf45']; ?>"><?php echo $resul['enf45']; ?></td>
              <td title="<?php echo "Partido: ".$e46."\n".$nombre_usuario.": ".$resul['enf46']; ?>"><?php echo $resul['enf46']; ?></td>
              <td title="<?php echo "Partido: ".$e47."\n".$nombre_usuario.": ".$resul['enf47']; ?>"><?php echo $resul['enf47']; ?></td>
              <td title="<?php echo "Partido: ".$e48."\n".$nombre_usuario.": ".$resul['enf48']; ?>"><?php echo $resul['enf48']; ?></td>
            </tr>
          </tbody>
            <?php $contador++;} ?>
</table>
</div>
 </div>
</form>
</body>
</html>