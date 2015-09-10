<?php
require_once("../bd/Conexion.php");
class Modelo_sesion
{
 
  function ConsultaUsuario($usuario,$password)
  {
		$objConexion = new Conexion;
		$conexion=$objConexion->conectar();
		
		$query = "SELECT u.cve_usuario,
		                 u.nombre_completo,
						 u.nick,
						 pa.cve_pago_acceso,
						 pa.key_acceso 
				  FROM usuarios u
				  LEFT JOIN pago_acceso pa ON u.CVE_PAGO_ACCESO = pa.CVE_PAGO_ACCESO
				  WHERE u.nick = '$usuario' 
				  AND u.contrasenia = '$password' ";
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
  function VerificarPronosticos($cve_usuario)
  {
       $objConexion = new Conexion;
       $conexion=$objConexion->conectar();
        $query = " SELECT count(*) pronosticos_capturados
                   FROM pronosticos p, 
                        enfrentamientos e
                   WHERE p.CVE_ENFRENTAMIENTO = e.CVE_ENFRENTAMIENTO 
                    AND e.CVE_FASE = 1
                    AND p.cve_usuario = $cve_usuario";
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
       $conexion=$objConexion->conectar();
        $query = " SELECT COUNT(*)total 
		           FROM cat_fases 
				   WHERE CVE_ESTATUS = 'FTE' 
				     AND DESC_FASE = 'FASE DE GRUPOS'";
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
}