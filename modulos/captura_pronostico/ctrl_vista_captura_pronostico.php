<?php
	require("modelo_captura_pronostico.php");
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
		$objetoModelo = new Modelo_Captura_Pronostico;
		
		$verificacion_pronostico = $objetoModelo->verificacion_pronostico($cve_usuario);
		if($verificacion_pronostico["TOTAL"] > 0)
		{ 
			$url_estilo = "<link rel='stylesheet' href='../../includes/css/style_modulo.css' type='text/css' />";
			$url_estilo2 = "<link rel='stylesheet' href='../../includes/css/tablas.css' type='text/css' />";
			$mensaje = "<div align='center' style='color:#333'><img src='../../imagenes/admiracion.png' height='80px' width='80px'/>
						<h2>Ya usted tiene registrado los pronosticos.</h2></div>";
			$url_continuar = "../detalle_pronostico/ctrl_vista_detalle_pronostico.php";				
			require("../../mensajes/exito.php");
			exit();	
        }
		else
		{
			$verificacion_pronostico_estatus = $objetoModelo->verificacion_pronostico_estatus($cve_usuario);
			if($verificacion_pronostico_estatus["TOTAL"] == 0)
			{
				$rs_consulta_grupo_a = $objetoModelo->consultar_grupo_A();
				$rs_consulta_grupo_b = $objetoModelo->consultar_grupo_B();
				$rs_consulta_grupo_c = $objetoModelo->consultar_grupo_C();
				$rs_consulta_grupo_d = $objetoModelo->consultar_grupo_D();
				$rs_consulta_grupo_e = $objetoModelo->consultar_grupo_E();
				$rs_consulta_grupo_f = $objetoModelo->consultar_grupo_F();
				$rs_consulta_grupo_g = $objetoModelo->consultar_grupo_G();
				$rs_consulta_grupo_h = $objetoModelo->consultar_grupo_H();
				require("vista_captura_pronostico.php");
			}
			else
			{
				$url_estilo = "<link rel='stylesheet' href='../../includes/css/style_modulo.css' type='text/css' />";
				$url_estilo2 = "<link rel='stylesheet' href='../../includes/css/tablas.css' type='text/css' />";
				$mensaje = "<div align='center' style='color:#333'><img src='../../imagenes/admiracion.png' height='80px' width='80px'/>
							<h2>La captura de pronostico esta cerrada.</h2></div>";
				$url_continuar = "../detalle_pronostico/ctrl_vista_detalle_pronostico.php";				
				require("../../mensajes/exito.php");
				exit();	
			}
		}
	}
?>