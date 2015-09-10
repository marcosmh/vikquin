<?php
	require("modelo_captura_pronostico.php");
	require_once("../../../sesion/datos_usuario.php");
	session_start();
	
	/*valida la sesion*/
	if(empty($_SESSION['visa']))
	{
		$estilo_link = "../../../includes/css/style_modulo.css";
		$estilo_link2 = "../../../includes/css/tablas.css";
		$script = "../../../mensajes/prueba.js";
		$mensajeTitulo = "Sesi&oacute;n terminada";
		$mensajeError = "<ul><li><h3>La sesi&oacute;n de usuario a finalizado.</h3></li> <li><h3>Registrese para ingresar al sistema.</h3></li></ul>";
		//$url_retorno = "../../../index.php";
		require("../../../mensajes/mensaje_sesion_error.php");
	}
	else
	{
		$objeto = unserialize($_SESSION['visa']);
		$cve_usuario = $objeto->cve_usuario;
		$objetoModelo = new Modelo_Captura_Pronostico;
	
		$rs_consulta_grupos = $objetoModelo->consultar_grupos();
		require("vista_captura_pronostico.php");
	}
?>