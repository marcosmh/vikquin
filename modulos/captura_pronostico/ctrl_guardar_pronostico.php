<?php
require("../../bd/Conexion.php");
 try 
 {
	$objeto = new Conexion;
	$conn = $objeto->conectar();
	$cve_usuario = !empty($_POST["cve_usuario"])? $_POST["cve_usuario"]:"";
	
	for($x = 1; $x <= 48; $x++)
	{ 
		$num_enfrentamiento = $x;
		$local = !empty($_POST["local_".$num_enfrentamiento])? $_POST["local_".$num_enfrentamiento]:0;
		$visitante = !empty($_POST["visitante_".$num_enfrentamiento])? $_POST["visitante_".$num_enfrentamiento]:0;
				
		$vquery = " INSERT INTO pronosticos
									(CVE_USUARIO,
									 CVE_ESTATUS,
									 CVE_ENFRENTAMIENTO,
									 GOLES_LOCAL,
									 GOLES_VISITANTE,
									 PUNTAJE_PARTIDO,
									 CVE_FASE)
							VALUES ($cve_usuario,
							 		'FAB',
							 		$num_enfrentamiento,
							 		$local,
							 		$visitante,
							 		NULL,
							 		1) ";			
		$ejecutar_registro = mysql_query($vquery,$conn);
	}
	if ($ejecutar_registro)
	{	
		//return true;
		$url_estilo = "<link rel='stylesheet' href='../../includes/css/style_modulo.css' type='text/css' />";
		$url_estilo2 = "<link rel='stylesheet' href='../../includes/css/tablas.css' type='text/css' />";
		$mensaje = "<div align='center' style='color:#333'><img src='../../imagenes/header-object_2.png' height='80px' width='80px'/>
				    <h2>El proceso se realiz&oacute; correctamente.</h2></div>";
		$url_continuar = "../detalle_pronostico/ctrl_vista_detalle_pronostico.php";				
		require("../../mensajes/exito.php");
	}
	else
	{
		
		$url_estilo = "<link rel='stylesheet' href='../../includes/css/style_modulo.css' type='text/css' />";
		$url_estilo2 = "<link rel='stylesheet' href='../../includes/css/tablas.css' type='text/css' />";
		$url_continuar = "ctrl_vista_captura_pronostico.php";
		$mensaje_negativo = "<div align='center' style='color:#333'><img src='../../imagenes/admiracion.png' height='80px' width='80px'/>
						     <h2>El proceso no se realiz&oacute; correctamente.</h2></div>";
		require("../../mensajes/exito.php");
		return false;
		exit();		
	}
 }
 catch(Exeception $e)
 {
	 echo $e->getMessage();
 }
?>