<?php
	require("modelo_detalle_pronostico.php");
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
		$objetoModelo = new Modelo_Detalle_Pronostico;
		
		$verificacion_fase = $objetoModelo->VerificarEstatusFases();
		if($verificacion_fase["total"] == 0)
		{   
		    $total = $objetoModelo->total($cve_usuario);
			$rs_consulta_grupo_a = $objetoModelo->consultar_grupo_A($cve_usuario);
			$rs_consulta_grupo_b = $objetoModelo->consultar_grupo_B($cve_usuario);
			$rs_consulta_grupo_c = $objetoModelo->consultar_grupo_C($cve_usuario);
			$rs_consulta_grupo_d = $objetoModelo->consultar_grupo_D($cve_usuario);
			$rs_consulta_grupo_e = $objetoModelo->consultar_grupo_E($cve_usuario);
			$rs_consulta_grupo_f = $objetoModelo->consultar_grupo_F($cve_usuario);
			$rs_consulta_grupo_g = $objetoModelo->consultar_grupo_G($cve_usuario);
			$rs_consulta_grupo_h = $objetoModelo->consultar_grupo_H($cve_usuario);
			require("vista_detalle_pronostico.php");
        }
		else
		{
			$url_estilo = "<link rel='stylesheet' href='../../includes/css/style_modulo.css' type='text/css' />";
			$url_estilo2 = "<link rel='stylesheet' href='../../includes/css/tablas.css' type='text/css' />";
			$mensaje = "<div align='center' style='color:#333'><img src='../../imagenes/admiracion.png' height='80px' width='80px'/>
						<h2>La captura de pronostico esta cerrada.</h2></div>";
			$url_continuar = "vista_detalle_pronostico.php";				
			require("../../mensajes/exito.php");
			exit();	
		}
	}
?>