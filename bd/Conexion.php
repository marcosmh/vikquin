<?php

class Conexion
{
	function conectar()
	{
		
		$conexion  = mysql_connect("localhost","vikquinc_vikingo","adminV1king0");
		$basedatos = mysql_select_db("vikquinc_pro",$conexion);
		
		
		if(!$conexion)
		{
			echo "Conexión fallida ";
			mysql_error();
			exit();
		}

		if(!$basedatos)
		{
			echo "La base de datos no existe";
			mysql_error();
		}

		return $conexion;

	}
}



?>