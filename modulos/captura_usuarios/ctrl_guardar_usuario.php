<?php

require_once("modelo_registra_usuario.php");

$nombre_completo = $_POST["nombre_completo"];
$nick            = $_POST["nick"];
$contrasenia     = md5($_POST["contrasenia"]);
$correo          = $_POST["correo"];
$celular         = $_POST["celular"];
$cve_pago_acceso = $_POST["cve_pago_acceso"];

$objetoModelo = new Modelo_registro_usuario;

	$verifica_acceso = $objetoModelo->existe_clave_acceso($cve_pago_acceso);
	if($verifica_acceso["existe_cve_acceso"] > 0)
	{	
		$verificacion_existe = $objetoModelo->existe_clave_acceso_usuario($cve_pago_acceso);
		if($verificacion_existe["existe_cve_acceso_usuario"] == 0)
		{
			$verifica_usuario = $objetoModelo->existe_usuario($nick);
			if($verifica_usuario["existe_usuario"] == 0)
			{
				if( $objetoModelo->insertar_usuarios($nombre_completo,$nick,$contrasenia,$correo,$celular,$cve_pago_acceso) )
				{
					$mensaje = "<div align='center' style='color:#333'><img src='../../imagenes/header-object_2.png' height='90px' width='90px'/>
								<h3>El Usuario ha sido registrado correctamente.</h3></div>";
					$url_continuar = "../../index.php";
					$url_estilo = "<link rel='stylesheet' href='../../includes/css/style_modulo.css' type='text/css' />";
					$url_estilo2 = "<link rel='stylesheet' href='../../includes/css/tablas.css' type='text/css' />";				
					require("../../mensajes/exito.php");	
				}
				else
				{
					$mensaje_negativo = "<div align='center' style='color:#333'><img src='../../imagenes/admiracion.png' height='90px' width='90px'/>
										 <h3>No se pudo registrar el usuario.</h3></div>";
					$url_continuar = "ctrl_vista_registra_usuario.php";
					$url_estilo = "<link rel='stylesheet' href='../../includes/css/style_modulo.css' type='text/css' />";
					$url_estilo2 = "<link rel='stylesheet' href='../../includes/css/tablas.css' type='text/css' />";								
					require("../../mensajes/exito.php");
				}
			}
			else
			{
				$mensaje_negativo = "<div align='center' style='color:#333'><img src='../../imagenes/admiracion.png' height='90px' width='90px'/>
									 <h3>El usuario ya se encuentra registrado.</h3></div>";
				$url_continuar = "ctrl_vista_registra_usuario.php";
				$url_estilo = "<link rel='stylesheet' href='../../includes/css/style_modulo.css' type='text/css' />";
				$url_estilo2 = "<link rel='stylesheet' href='../../includes/css/tablas.css' type='text/css' />";								
				require("../../mensajes/exito.php");	
			}
		}
		else
		{
			$mensaje_negativo = "<div align='center' style='color:#333'><img src='../../imagenes/admiracion.png' height='90px' width='90px'/>
							     <h3>Esta clave ya se encuentra registrada con otro usuario.</h3></div>";
			$url_continuar = "ctrl_vista_registra_usuario.php";
			$url_estilo = "<link rel='stylesheet' href='../../includes/css/style_modulo.css' type='text/css' />";
			$url_estilo2 = "<link rel='stylesheet' href='../../includes/css/tablas.css' type='text/css' />";								
			require("../../mensajes/exito.php");
		}
	}
	else
	{
		$mensaje_negativo = "<div align='center' style='color:#333'><img src='../../imagenes/admiracion.png' height='90px' width='90px'/>
							 <h3>Esta clave no se encuentra registrada comunicarse con el administrador .</h3></div>";
		$url_continuar = "ctrl_vista_registra_usuario.php";
		$url_estilo = "<link rel='stylesheet' href='../../includes/css/style_modulo.css' type='text/css' />";
		$url_estilo2 = "<link rel='stylesheet' href='../../includes/css/tablas.css' type='text/css' />";								
		require("../../mensajes/exito.php");	
	}

?>