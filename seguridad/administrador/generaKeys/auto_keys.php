<?php
	require("../../../bd/Conexion.php");
	$objeto = new Conexion;
	$conn = $objeto->conectar();
	
	

	$nombres = "N,E,Y,S,E,R,J,E,F,E,J,E,S,U,S,C,H,U,Y,M,A,R,C,O,S,V,I,K,I,N,G,O,R,O,B,E,R,T,O,B,A,S,S,O,N,R,O,D,R,I,G,O,F,L,O,T,A,G,U,I,L,L,E,R,M,O,M,E,M,O,V,I,K,Q,U,I,N,2,0,1,4";
	
	$combinaciones = explode(",",$nombres);
	
	for($x = 0; $x < count($combinaciones); $x++)
	{
		$sql = "INSERT INTO pago_acceso (KEY_ACCESO) VALUES ('".$combinaciones[$x].(time()*rand(1,99))."')";
		$ejecuta = mysql_query($sql,$conn);
	}
	
	
	$url_estilo = "<link rel='stylesheet' href='../../../includes/css/style_modulo.css' type='text/css' />";
	$url_estilo2 = "<link rel='stylesheet' href='../../../includes/css/tablas.css' type='text/css' />";
	$mensaje = "<div align='center' style='color:#333'><img src='../../../imagenes/correcto.png' height='80px' width='80px'/>
				<h2>El proceso se realiz&oacute; correctamente.</h2></div>";
	$url_continuar = "../resultados/ctrl_vista_captura_pronostico.php";				
	require("../../../mensajes/exito.php");
	
?>