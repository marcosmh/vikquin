<?php
require("../../bd/Conexion.php");

class Modelo_registro_usuario
{
	function insertar_usuarios($nombre_completo,$nick,$contrasenia,$correo,$celular,$cve_pago_acceso)
	{
		try
		{
			$objeto = new Conexion;
			$conn = $objeto->conectar();
			
			$vquery = " INSERT INTO usuarios
										(nombre_completo,
										 nick,
										 contrasenia,
										 correo,
										 celular,
										 cve_pago_acceso)
								VALUES 	(UPPER('$nombre_completo'),
										 TRIM(LOWER('$nick')),
						  				 TRIM(LOWER('$contrasenia')),
						  				 '$correo',
						  				 '$celular',
						  				 (SELECT CVE_PAGO_ACCESO 
						                  FROM pago_acceso 
										  WHERE TRIM(key_acceso) = TRIM('$cve_pago_acceso'))) ";
										  
			$ejecutar = mysql_query($vquery,$conn);
							
			if($ejecutar)
			{
				return true;
			}
			else
			{
				return false;
				exit();
			}
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	
	function existe_usuario($nick)
	{
		try
		{
			$objeto = new Conexion;
			$conn = $objeto->conectar();
						
			$vquery = " SELECT COUNT(*) existe_usuario
						FROM usuarios
						WHERE TRIM(nick) = TRIM(LOWER('$nick')) ";
					
			$resultado = mysql_query($vquery,$conn);
			$resultado_existe = mysql_fetch_assoc($resultado);
			if($resultado_existe)
			{
				return $resultado_existe;
			}
			else
			{
				mysql_error();
				exit;
			}
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	
	function existe_clave_acceso($cve_pago_acceso)
	{
		try
		{
			$objeto = new Conexion;
			$conn = $objeto->conectar();
						
			$vquery = " SELECT COUNT(*) existe_cve_acceso
						FROM pago_acceso
						WHERE key_acceso = '$cve_pago_acceso' ";
												
			$resultado = mysql_query($vquery,$conn);
			$resultado_existe = mysql_fetch_assoc($resultado);
			if($resultado_existe)
			{
				return $resultado_existe;
			}
			else
			{
				mysql_error();
				exit;
			}
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	
	function existe_clave_acceso_usuario($cve_pago_acceso)
	{
		try
		{
			$objeto = new Conexion;
			$conn = $objeto->conectar();
						
			$vquery = " SELECT COUNT(*) existe_cve_acceso_usuario
						FROM usuarios
						WHERE CVE_PAGO_ACCESO = (SELECT CVE_PAGO_ACCESO 
						                         FROM pago_acceso 
												 WHERE TRIM(key_acceso) = TRIM('$cve_pago_acceso')) ";
												
			$resultado = mysql_query($vquery,$conn);
			$resultado_existe = mysql_fetch_assoc($resultado);
			
			if($resultado_existe)
			{
				return $resultado_existe;
			}
			else
			{
				mysql_error();
				exit;
			}
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
}
?>