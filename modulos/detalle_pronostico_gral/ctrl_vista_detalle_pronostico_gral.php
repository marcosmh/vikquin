<?php
	require("modelo_detalle_pronostico_gral.php");
	require_once("../../sesion/datos_usuario.php");
	session_start();
	
	/*valida la sesion*/
	if(empty($_SESSION['visa']))
	{
		$estilo_link = "../../includes/css/style_modulo.css";
		$estilo_link2 = "../../includes/css/tablas.css";
		$mensajeTitulo = "Sesi&oacute;n terminada";
		$mensajeError = "<ul><li><h3>La sesi&oacute;n de usuario a finalizado.</h3></li> <li><h3>Registrese para ingresar al sistema.</h3></li></ul>";
		$url_retorno = "../../index.php";
		require("../../mensajes/mensaje_sesion_error.php");
	}
	else
	{
		$objeto = unserialize($_SESSION['visa']);
		$cve_usuario = $objeto->cve_usuario;
		$objetoModelo = new Modelo_Detalle_Pronosti;    
		
			$encabezado = $objetoModelo->consultar_encabezado();
			$encabezadot = $objetoModelo->consultar_encabezado();
			$encabezadoenc = $objetoModelo->consultar_encuentros();
			$resultado = $objetoModelo->consultar_detalle();
			$i = 0;
			while($resul_enc = mysql_fetch_assoc($encabezadot))
			{	  $e1= $resul_enc['enf1'];
				  $e2= $resul_enc['enf2'];
				  $e3= $resul_enc['enf3'];
				  $e4= $resul_enc['enf4'];
				  $e5= $resul_enc['enf5'];
				  $e6= $resul_enc['enf6'];
				  $e7= $resul_enc['enf7'];
				  $e8= $resul_enc['enf8'];
				  $e9= $resul_enc['enf9'];
				  $e10= $resul_enc['enf10'];
				  $e11= $resul_enc['enf11'];
				  $e12= $resul_enc['enf12'];
				  $e13= $resul_enc['enf13'];
				  $e14= $resul_enc['enf14'];
				  $e15= $resul_enc['enf15'];
				  $e16= $resul_enc['enf16'];
				  $e17= $resul_enc['enf17'];
				  $e18= $resul_enc['enf18'];
				  $e19= $resul_enc['enf19'];
				  $e20= $resul_enc['enf20'];
				  $e21= $resul_enc['enf21'];
				  $e22= $resul_enc['enf22'];
				  $e23= $resul_enc['enf23'];
				  $e24= $resul_enc['enf24'];
				  $e25= $resul_enc['enf25'];
				  $e26= $resul_enc['enf26'];
				  $e27= $resul_enc['enf27'];
				  $e28= $resul_enc['enf28'];
				  $e29= $resul_enc['enf29'];
				  $e30= $resul_enc['enf30'];
				  $e31= $resul_enc['enf31'];
				  $e32= $resul_enc['enf32'];
				  $e33= $resul_enc['enf33'];
				  $e34= $resul_enc['enf34'];
				  $e35= $resul_enc['enf35'];
				  $e36= $resul_enc['enf36'];
				  $e37= $resul_enc['enf37'];
				  $e38= $resul_enc['enf38'];
				  $e39= $resul_enc['enf39'];
				  $e40= $resul_enc['enf40'];
				  $e41= $resul_enc['enf41'];
				  $e42= $resul_enc['enf42'];
				  $e43= $resul_enc['enf43'];
				  $e44= $resul_enc['enf44'];
				  $e45= $resul_enc['enf45'];
				  $e46= $resul_enc['enf46'];
				  $e47= $resul_enc['enf47'];
				  $e48= $resul_enc['enf48'];
			}
			while($resul_enc = mysql_fetch_assoc($encabezadoenc))
			{	  $er1= ($resul_enc['enf1']== 1)? "style='background-color:#CCC'" : "";
				  $er2= ($resul_enc['enf2']== 1)? "style='background-color:#CCC'" : "";
				  $er3= ($resul_enc['enf3']== 1)? "style='background-color:#CCC'" : "";
				  $er4= ($resul_enc['enf4']== 1)? "style='background-color:#CCC'" : "";
				  $er5= ($resul_enc['enf5']== 1)? "style='background-color:#CCC'" : "";
				  $er6= ($resul_enc['enf6']== 1)? "style='background-color:#CCC'" : "";
				  $er7= ($resul_enc['enf7']== 1)? "style='background-color:#CCC'" : "";
				  $er8= ($resul_enc['enf8']== 1)? "style='background-color:#CCC'" : "";
				  $er9= ($resul_enc['enf9']== 1)? "style='background-color:#CCC'" : "";
				  $er10= ($resul_enc['enf10']== 1)? "style='background-color:#CCC'" : "";
				  $er11= ($resul_enc['enf11']== 1)? "style='background-color:#CCC'" : "";
				  $er12= ($resul_enc['enf12']== 1)? "style='background-color:#CCC'" : "";
				  $er13= ($resul_enc['enf13']== 1)? "style='background-color:#CCC'" : "";
				  $er14= ($resul_enc['enf14']== 1)? "style='background-color:#CCC'" : "";
				  $er15= ($resul_enc['enf15']== 1)? "style='background-color:#CCC'" : "";
				  $er16= ($resul_enc['enf16']== 1)? "style='background-color:#CCC'" : "";
				  $er17= ($resul_enc['enf17']== 1)? "style='background-color:#CCC'" : "";
				  $er18= ($resul_enc['enf18']== 1)? "style='background-color:#CCC'" : "";
				  $er19= ($resul_enc['enf19']== 1)? "style='background-color:#CCC'" : "";
				  $er20= ($resul_enc['enf20']== 1)? "style='background-color:#CCC'" : "";
				  $er21= ($resul_enc['enf21']== 1)? "style='background-color:#CCC'" : "";
				  $er22= ($resul_enc['enf22']== 1)? "style='background-color:#CCC'" : "";
				  $er23= ($resul_enc['enf23']== 1)? "style='background-color:#CCC'" : "";
				  $er24= ($resul_enc['enf24']== 1)? "style='background-color:#CCC'" : "";
				  $er25= ($resul_enc['enf25']== 1)? "style='background-color:#CCC'" : "";
				  $er26= ($resul_enc['enf26']== 1)? "style='background-color:#CCC'" : "";
				  $er27= ($resul_enc['enf27']== 1)? "style='background-color:#CCC'" : "";
				  $er28= ($resul_enc['enf28']== 1)? "style='background-color:#CCC'" : "";
				  $er29= ($resul_enc['enf29']== 1)? "style='background-color:#CCC'" : "";
				  $er30= ($resul_enc['enf30']== 1)? "style='background-color:#CCC'" : "";
				  $er31= ($resul_enc['enf31']== 1)? "style='background-color:#CCC'" : "";
				  $er32= ($resul_enc['enf32']== 1)? "style='background-color:#CCC'" : "";
				  $er33= ($resul_enc['enf33']== 1)? "style='background-color:#CCC'" : "";
				  $er34= ($resul_enc['enf34']== 1)? "style='background-color:#CCC'" : "";
				  $er35= ($resul_enc['enf35']== 1)? "style='background-color:#CCC'" : "";
				  $er36= ($resul_enc['enf36']== 1)? "style='background-color:#CCC'" : "";
				  $er37= ($resul_enc['enf37']== 1)? "style='background-color:#CCC'" : "";
				  $er38= ($resul_enc['enf38']== 1)? "style='background-color:#CCC'" : "";
				  $er39= ($resul_enc['enf39']== 1)? "style='background-color:#CCC'" : "";
				  $er40= ($resul_enc['enf40']== 1)? "style='background-color:#CCC'" : "";
				  $er41= ($resul_enc['enf41']== 1)? "style='background-color:#CCC'" : "";
				  $er42= ($resul_enc['enf42']== 1)? "style='background-color:#CCC'" : "";
				  $er43= ($resul_enc['enf43']== 1)? "style='background-color:#CCC'" : "";
				  $er44= ($resul_enc['enf44']== 1)? "style='background-color:#CCC'" : "";
				  $er45= ($resul_enc['enf45']== 1)? "style='background-color:#CCC'" : "";
				  $er46= ($resul_enc['enf46']== 1)? "style='background-color:#CCC'" : "";
				  $er47= ($resul_enc['enf47']== 1)? "style='background-color:#CCC'" : "";
				  $er48= ($resul_enc['enf48']== 1)? "style='background-color:#CCC'" : "";
			}
			require("vista_detalle_pronostico_gral.php");
       
	}
?>