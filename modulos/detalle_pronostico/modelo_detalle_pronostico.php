<?php 
require("../../bd/Conexion.php");
class Modelo_Detalle_Pronostico
{
	function total($cve_usuario)
	  {
		 $objConexion = new Conexion;
		 $conexion= $objConexion->conectar();
		 $query = " SELECT  
							CASE WHEN SUM(pro.PUNTAJE_PARTIDO) IS NULL THEN 0 ELSE SUM(pro.PUNTAJE_PARTIDO) END TOTAL
						  FROM  
							pronosticos pro,
							usuarios us
						  WHERE  pro.cve_usuario = us.cve_usuario 
							AND  pro.cve_usuario = $cve_usuario ";
		 $resultado = mysql_query($query,$conexion);
		 $verifica = mysql_fetch_assoc($resultado);
		 if($verifica)
		 {
		   return $verifica;
		 }
		 else 
		 { 
	  	   return false; 
		 }
	  }
	  function VerificarEstatusFases()
	  {
		 $objConexion = new Conexion;
		 $conexion= $objConexion->conectar();
		 $query = " SELECT COUNT(*)total 
		   		    FROM cat_fases 
				    WHERE CVE_ESTATUS = 'FTE' 
					 AND DESC_FASE = 'FASE DE GRUPOS' ";
		 $resultado = mysql_query($query,$conexion);
		 $verifica = mysql_fetch_assoc($resultado);
			if($verifica)
			{
				return $verifica;
			}
			else
			{
				mysql_error();
				exit;
			}
	  }
	  
	  	//Consulta grupo A
	function consultar_grupo_A($cve_usuario)
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
								CONCAT(pro.GOLES_LOCAL,' - ',pro.GOLES_VISITANTE)RESULTADO,
								eqp.CVE_EQUIPO AS CVE_EQUIPO_VISITANTE,
								eqp.DESC_EQUIPO AS DESC_EQUIPO_VISITANTE,
								eqp.BANDERA AS BANDERA_VISITANTE,
								CASE WHEN pro.PUNTAJE_PARTIDO IS NULL THEN 0 ELSE pro.PUNTAJE_PARTIDO END PUNTAJE_PARTIDO
						FROM enfrentamientos enf,
							 cat_grupos ct_g,
							 equipos eqi,
							 equipos eqp,
							 pronosticos pro
						WHERE  enf.CVE_GRUPO = ct_g.CVE_GRUPO
						AND enf.CVE_EQUIPO = eqi.CVE_EQUIPO
						AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
						AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
						AND ct_g.CVE_GRUPO = 1
						AND pro.CVE_USUARIO = $cve_usuario
						ORDER BY enf.CVE_ENFRENTAMIENTO,ct_g.CVE_GRUPO ";
										
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
	
	//Consulta grupo B
	function consultar_grupo_B($cve_usuario)
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
								CONCAT(pro.GOLES_LOCAL,' - ',pro.GOLES_VISITANTE)RESULTADO,
								eqp.CVE_EQUIPO AS CVE_EQUIPO_VISITANTE,
								eqp.DESC_EQUIPO AS DESC_EQUIPO_VISITANTE,
								eqp.BANDERA AS BANDERA_VISITANTE,
								CASE WHEN pro.PUNTAJE_PARTIDO IS NULL THEN 0 ELSE pro.PUNTAJE_PARTIDO END PUNTAJE_PARTIDO
						FROM enfrentamientos enf,
							 cat_grupos ct_g,
							 equipos eqi,
							 equipos eqp,
							 pronosticos pro
						WHERE  enf.CVE_GRUPO = ct_g.CVE_GRUPO
						AND enf.CVE_EQUIPO = eqi.CVE_EQUIPO
						AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
						AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
						AND ct_g.CVE_GRUPO = 2
						AND pro.CVE_USUARIO = $cve_usuario
						ORDER BY enf.CVE_ENFRENTAMIENTO,ct_g.CVE_GRUPO ";
										
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
	//Consulta grupo C
	function consultar_grupo_C($cve_usuario)
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
								CONCAT(pro.GOLES_LOCAL,' - ',pro.GOLES_VISITANTE)RESULTADO,
								eqp.CVE_EQUIPO AS CVE_EQUIPO_VISITANTE,
								eqp.DESC_EQUIPO AS DESC_EQUIPO_VISITANTE,
								eqp.BANDERA AS BANDERA_VISITANTE,
								CASE WHEN pro.PUNTAJE_PARTIDO IS NULL THEN 0 ELSE pro.PUNTAJE_PARTIDO END PUNTAJE_PARTIDO
						FROM enfrentamientos enf,
							 cat_grupos ct_g,
							 equipos eqi,
							 equipos eqp,
							 pronosticos pro
						WHERE  enf.CVE_GRUPO = ct_g.CVE_GRUPO
						AND enf.CVE_EQUIPO = eqi.CVE_EQUIPO
						AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
						AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
						AND ct_g.CVE_GRUPO = 3
						AND pro.CVE_USUARIO = $cve_usuario
						ORDER BY enf.CVE_ENFRENTAMIENTO,ct_g.CVE_GRUPO ";
										
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
	//Consulta grupo D
	function consultar_grupo_D($cve_usuario)
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
								CONCAT(pro.GOLES_LOCAL,' - ',pro.GOLES_VISITANTE)RESULTADO,
								eqp.CVE_EQUIPO AS CVE_EQUIPO_VISITANTE,
								eqp.DESC_EQUIPO AS DESC_EQUIPO_VISITANTE,
								eqp.BANDERA AS BANDERA_VISITANTE,
								CASE WHEN pro.PUNTAJE_PARTIDO IS NULL THEN 0 ELSE pro.PUNTAJE_PARTIDO END PUNTAJE_PARTIDO
						FROM enfrentamientos enf,
							 cat_grupos ct_g,
							 equipos eqi,
							 equipos eqp,
							 pronosticos pro
						WHERE  enf.CVE_GRUPO = ct_g.CVE_GRUPO
						AND enf.CVE_EQUIPO = eqi.CVE_EQUIPO
						AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
						AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
						AND ct_g.CVE_GRUPO = 4
						AND pro.CVE_USUARIO = $cve_usuario
						ORDER BY enf.CVE_ENFRENTAMIENTO,ct_g.CVE_GRUPO ";
										
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
	//Consulta grupo E
	function consultar_grupo_E($cve_usuario)
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
								CONCAT(pro.GOLES_LOCAL,' - ',pro.GOLES_VISITANTE)RESULTADO,
								eqp.CVE_EQUIPO AS CVE_EQUIPO_VISITANTE,
								eqp.DESC_EQUIPO AS DESC_EQUIPO_VISITANTE,
								eqp.BANDERA AS BANDERA_VISITANTE,
								CASE WHEN pro.PUNTAJE_PARTIDO IS NULL THEN 0 ELSE pro.PUNTAJE_PARTIDO END PUNTAJE_PARTIDO
						FROM enfrentamientos enf,
							 cat_grupos ct_g,
							 equipos eqi,
							 equipos eqp,
							 pronosticos pro
						WHERE  enf.CVE_GRUPO = ct_g.CVE_GRUPO
						AND enf.CVE_EQUIPO = eqi.CVE_EQUIPO
						AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
						AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
						AND ct_g.CVE_GRUPO = 5
						AND pro.CVE_USUARIO = $cve_usuario
						ORDER BY enf.CVE_ENFRENTAMIENTO,ct_g.CVE_GRUPO ";
										
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
	//Consulta grupo F
	function consultar_grupo_F($cve_usuario)
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
								CONCAT(pro.GOLES_LOCAL,' - ',pro.GOLES_VISITANTE)RESULTADO,
								eqp.CVE_EQUIPO AS CVE_EQUIPO_VISITANTE,
								eqp.DESC_EQUIPO AS DESC_EQUIPO_VISITANTE,
								eqp.BANDERA AS BANDERA_VISITANTE,
								CASE WHEN pro.PUNTAJE_PARTIDO IS NULL THEN 0 ELSE pro.PUNTAJE_PARTIDO END PUNTAJE_PARTIDO
						FROM enfrentamientos enf,
							 cat_grupos ct_g,
							 equipos eqi,
							 equipos eqp,
							 pronosticos pro
						WHERE  enf.CVE_GRUPO = ct_g.CVE_GRUPO
						AND enf.CVE_EQUIPO = eqi.CVE_EQUIPO
						AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
						AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
						AND ct_g.CVE_GRUPO = 6
						AND pro.CVE_USUARIO = $cve_usuario
						ORDER BY enf.CVE_ENFRENTAMIENTO,ct_g.CVE_GRUPO ";
										
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
	//Consulta grupo G
	function consultar_grupo_G($cve_usuario)
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
								CONCAT(pro.GOLES_LOCAL,' - ',pro.GOLES_VISITANTE)RESULTADO,
								eqp.CVE_EQUIPO AS CVE_EQUIPO_VISITANTE,
								eqp.DESC_EQUIPO AS DESC_EQUIPO_VISITANTE,
								eqp.BANDERA AS BANDERA_VISITANTE,
								CASE WHEN pro.PUNTAJE_PARTIDO IS NULL THEN 0 ELSE pro.PUNTAJE_PARTIDO END PUNTAJE_PARTIDO
						FROM enfrentamientos enf,
							 cat_grupos ct_g,
							 equipos eqi,
							 equipos eqp,
							 pronosticos pro
						WHERE  enf.CVE_GRUPO = ct_g.CVE_GRUPO
						AND enf.CVE_EQUIPO = eqi.CVE_EQUIPO
						AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
						AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
						AND ct_g.CVE_GRUPO = 7
						AND pro.CVE_USUARIO = $cve_usuario
						ORDER BY enf.CVE_ENFRENTAMIENTO,ct_g.CVE_GRUPO ";
										
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
	//Consulta grupo H
	function consultar_grupo_H($cve_usuario)
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
								CONCAT(pro.GOLES_LOCAL,' - ',pro.GOLES_VISITANTE)RESULTADO,
								eqp.CVE_EQUIPO AS CVE_EQUIPO_VISITANTE,
								eqp.DESC_EQUIPO AS DESC_EQUIPO_VISITANTE,
								eqp.BANDERA AS BANDERA_VISITANTE,
								CASE WHEN pro.PUNTAJE_PARTIDO IS NULL THEN 0 ELSE pro.PUNTAJE_PARTIDO END PUNTAJE_PARTIDO
						FROM enfrentamientos enf,
							 cat_grupos ct_g,
							 equipos eqi,
							 equipos eqp,
							 pronosticos pro
						WHERE  enf.CVE_GRUPO = ct_g.CVE_GRUPO
						AND enf.CVE_EQUIPO = eqi.CVE_EQUIPO
						AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
						AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
						AND ct_g.CVE_GRUPO = 8
						AND pro.CVE_USUARIO = $cve_usuario
						ORDER BY enf.CVE_ENFRENTAMIENTO,ct_g.CVE_GRUPO ";
										
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