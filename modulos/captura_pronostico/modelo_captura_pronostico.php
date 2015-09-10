<?php 
require("../../bd/Conexion.php");
class Modelo_Captura_Pronostico
{
	//Consulta grupo A
	function consultar_grupo_A()
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
						AND ct_g.CVE_GRUPO = 1
						AND enf.CVE_ESTATUS = 'FAB'
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
	function consultar_grupo_B()
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
						AND ct_g.CVE_GRUPO = 2
						AND enf.CVE_ESTATUS = 'FAB'
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
	function consultar_grupo_C()
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
						AND ct_g.CVE_GRUPO = 3
						AND enf.CVE_ESTATUS = 'FAB'
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
	function consultar_grupo_D()
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
						AND ct_g.CVE_GRUPO = 4
						AND enf.CVE_ESTATUS = 'FAB'
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
	function consultar_grupo_E()
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
						AND ct_g.CVE_GRUPO = 5
						AND enf.CVE_ESTATUS = 'FAB'
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
	function consultar_grupo_F()
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
						AND ct_g.CVE_GRUPO = 6
						AND enf.CVE_ESTATUS = 'FAB'
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
	function consultar_grupo_G()
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
						AND ct_g.CVE_GRUPO = 7
						AND enf.CVE_ESTATUS = 'FAB'
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
	function consultar_grupo_H()
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
						AND ct_g.CVE_GRUPO = 8
						AND enf.CVE_ESTATUS = 'FAB'
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
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
}
?>