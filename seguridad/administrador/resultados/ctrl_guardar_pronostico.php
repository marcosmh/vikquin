<?php
require("modelo_captura_pronostico.php");
 try 
 {
	$cve_usuario = !empty($_POST["cve_usuario"])? $_POST["cve_usuario"]:"";
	$local =  !empty($_POST["local"])?$_POST["local"]:"";
	$visitante = !empty($_POST["visitante"])?$_POST["visitante"]:"";
	$enfrentamiento = !empty($_POST["partido"])?$_POST["partido"]:"";
	
	$total = count($local);
	$visitante_ganador = false;
	$local_ganador = false;
	$empate = false;
	
	for($x = 0; $x < $total ; $x++)
	{ 
		if($local[$x] != "")
		{
			if($local[$x] > $visitante[$x])
			{
				$local_ganador = true;
			}
			
			if($local[$x] < $visitante[$x])
			{
				$visitante_ganador = true;
			}
			
			if($local[$x] == $visitante[$x])
			{
				$empate = true;
			}
			
			$obtieneResultados = new Modelo_Captura_Pronostico;
			$resultados = $obtieneResultados->resultados_usuarios($enfrentamiento[$x]);
			
			$actualizaEnfrentamiento = $obtieneResultados->actualizaEnfrentamiento($enfrentamiento[$x],$visitante[$x],$local[$x]);
			
			while($usuarios = mysql_fetch_array($resultados))
			{
				
				if($usuarios["GOLES_LOCAL"] == $local[$x] && $usuarios["GOLES_VISITANTE"] == $visitante[$x])
				{
					if($empate)
					{
//						echo "dos puntos porque atino al marcador pero fue un empate";
						$obtieneResultados->actualiza_puntaje($usuarios["CVE_USUARIO"],$enfrentamiento[$x],2);						
					}
					
					if(!$empate)
					{
						$obtieneResultados->actualiza_puntaje($usuarios["CVE_USUARIO"],$enfrentamiento[$x],3);
//						echo "tres puntos porque le atino al marcador";
					}
				}
				else if($usuarios["GOLES_LOCAL"] > $usuarios["GOLES_VISITANTE"] && $local_ganador == true)
				{
					$obtieneResultados->actualiza_puntaje($usuarios["CVE_USUARIO"],$enfrentamiento[$x],1);
//					echo "un punto solo atino al ganador local";
				}
				else if($usuarios["GOLES_LOCAL"] < $usuarios["GOLES_VISITANTE"] && $visitante_ganador == true)
				{
					$obtieneResultados->actualiza_puntaje($usuarios["CVE_USUARIO"],$enfrentamiento[$x],1);
//					echo "un punto solo atino al ganador visitante";
				}
				else if($usuarios["GOLES_LOCAL"] == $usuarios["GOLES_VISITANTE"] && $empate == true)
				{
					$obtieneResultados->actualiza_puntaje($usuarios["CVE_USUARIO"],$enfrentamiento[$x],1);
//					echo "un punto solo atino al empate";
				}
				else
				{
					$obtieneResultados->actualiza_puntaje($usuarios["CVE_USUARIO"],$enfrentamiento[$x],0);
//					echo "cero puntos";
				}
			}
		}	
	}
		$url_estilo = "<link rel='stylesheet' href='../../../includes/css/style_modulo.css' type='text/css' />";
		$url_estilo2 = "<link rel='stylesheet' href='../../../includes/css/tablas.css' type='text/css' />";
		$url_continuar = "ctrl_vista_captura_pronostico.php";
		$mensaje_negativo = "<div align='center' style='color:#333'><img src='../../../images/vikingo.png' height='150px' width='170px'/>
						     <h2>El proceso se realiz&oacute; correctamente.</h2></div>";
		require("../../../mensajes/exito.php");
		return false;
		exit();		
 }
 catch(Exeception $e)
 {
	 echo $e->getMessage();
 }
?>