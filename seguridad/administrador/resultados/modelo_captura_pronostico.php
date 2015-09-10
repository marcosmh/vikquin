<?php 
require("../../../bd/Conexion.php");
class Modelo_Captura_Pronostico
{

	function consultar_grupos()
	{
		try
		{
			$objeto = new Conexion;
			$conn = $objeto->conectar();
						
			$vquery = " SELECT  enf.CVE_ENFRENTAMIENTO,
								DATE_FORMAT(enf.FECHA_ENFRENTAMIENTO,'%d-%m-%Y')FECHA_ENFRENTAMIENTO,
								ct_g.DESC_GRUPO,
								eqi.BANDERA AS BANDERA_LOCAL,
								eqi.CVE_EQUIPO AS CVE_EQUIPO_LOCAL,
								eqi.DESC_EQUIPO AS DESC_EQUIPO_LOCAL,
								eqp.BANDERA AS BANDERA_VISITANTE,
								eqp.CVE_EQUIPO AS CVE_EQUIPO_VISITANTE,
								eqp.DESC_EQUIPO AS DESC_EQUIPO_VISITANTE
						FROM enfrentamientos enf,
							 cat_grupos ct_g,
							 equipos eqi,
							 equipos eqp
						WHERE  enf.CVE_GRUPO = ct_g.CVE_GRUPO
						AND enf.CVE_EQUIPO = eqi.CVE_EQUIPO
						AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
						AND enf.CVE_ESTATUS = 'FAB'
						AND enf.GOL_LOCAL IS NULL
						AND enf.GOL_VISITANTE IS NULL 
						ORDER BY enf.FECHA_ENFRENTAMIENTO ";
										
			$resultado = mysql_query($vquery,$conn);

			if($resultado)
			{
				return $resultado;
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
	function verificacion_pronostico($cve_usuario)
	{
		try
		{
			$objeto = new Conexion;
			$conn = $objeto->conectar();
						
			$vquery = " SELECT COUNT(*)TOTAL 
						FROM pronosticos
						WHERE CVE_USUARIO = $cve_usuario ";
										
			$resultado = mysql_query($vquery,$conn);

			if($resultado)
			{
				return $resultado;
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
	function verificacion_pronostico_estatus($cve_usuario)
	{
		try
		{
			$objeto = new Conexion;
			$conn = $objeto->conectar();
						
			$vquery = " SELECT COUNT(*)TOTAL 
						FROM pronosticos
						WHERE CVE_USUARIO = $cve_usuario
						  AND CVE_ESTATUS = 'FTE' ";
										
			$resultado = mysql_query($vquery,$conn);

			if($resultado)
			{
				return $resultado;
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
	
	function resultados_usuarios($cve_enfrentamiento)
	{
		try
		{
			$objeto = new Conexion;
			$conn = $objeto->conectar();
						
			$vquery = "SELECT 
							CVE_PRONOSTICO, CVE_USUARIO, GOLES_LOCAL, GOLES_VISITANTE 
					   FROM pronosticos 
					   WHERE CVE_ENFRENTAMIENTO = $cve_enfrentamiento";
			$resultado = mysql_query($vquery,$conn);

			if($resultado)
			{
				return $resultado;
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
	
	function actualiza_puntaje($cve_usuario,$cve_enfrentamiento,$puntaje)
	{
	try
		{
			$objeto = new Conexion;
			$conn = $objeto->conectar();
						
			$vquery = "UPDATE pronosticos SET 
					PUNTAJE_PARTIDO = $puntaje
					WHERE CVE_ENFRENTAMIENTO = $cve_enfrentamiento
					AND CVE_USUARIO = $cve_usuario ";
					
			$resultado = mysql_query($vquery,$conn);

			if($resultado)
			{
				return $resultado;
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
	
	function actualizaEnfrentamiento($cve_enfrentamiento,$visitante,$local)
	{
	try
		{
			$objeto = new Conexion;
			$conn = $objeto->conectar();
						
			$vquery = "UPDATE enfrentamientos SET 
						GOL_VISITANTE = $visitante ,
						GOL_LOCAL = $local
						WHERE CVE_ENFRENTAMIENTO = $cve_enfrentamiento
						  AND CVE_ESTATUS = 'FAB'";
			$resultado = mysql_query($vquery,$conn);

			if($resultado)
			{
				return $resultado;
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