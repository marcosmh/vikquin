<?php
require_once("bd/Conexion.php");
try
{
	$objeto = new Conexion;
	$conn = $objeto->conectar();
				
	$vquery = "SELECT (COUNT(*)* 100)* 0.5 primer_lugar,
					  (COUNT(*)* 100)* 0.3 segundo_lugar,
					  (COUNT(*)* 100)* 0.1 tercer_lugar,
					  (COUNT(*)* 100)* 0.1 gasto
			   FROM usuarios u
			   WHERE u.NICK != 'administrador' ";
								
	$resultado = mysql_query($vquery,$conn);
	$verifica = mysql_fetch_assoc($resultado);
}
catch(Exception $e)
{
	echo $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <title>.::VikQuin::.</title>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="includes/css/style_login.css" />
        <link rel="stylesheet" type="text/css" href="includes/js/jalert/jalert.css" />
        <script type="text/javascript" src="includes/js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="includes/js/jalert/jquery.jalert.packed.js"></script>
        <script type="text/javascript" src="includes/js/utilerias.js"></script>
		<script type="text/javascript" src="login.js"></script>
    </head>
    <body>
    <div id="Validacion" title="VikQuin" style="display: none;">
     <p id="textMensaje"></p>
    </div>
        <div class="line">
        <div class="container">
        <div class="sidebar1"><img src="images/vikingo.png" width="669" height="394"></div>
                
                <div class="sidebar2">
                <form class="form-1" id="envio_datos" name="envio_datos" method="POST" onSubmit="return false">
                <input type="hidden" id="1er_lugar" name="1er_lugar" value="<?php echo "$ ".number_format($verifica["primer_lugar"],2);?>" />
                <input type="hidden" id="2er_lugar" name="2er_lugar" value="<?php echo "$ ".number_format($verifica["segundo_lugar"],2);?>" />
                <input type="hidden" id="3er_lugar" name="3er_lugar" value="<?php echo "$ ".number_format($verifica["tercer_lugar"],2);?>" />
                <input type="hidden" id="gasto" name="gasto" value="<?php echo "$ ".number_format($verifica["gasto"],2);?>" />
                   <p class="field"><input type="text" name="usuario" id="usuario" placeholder="Username">
                      <i class="icon-user icon-large"></i>
                   </p>
                   <p class="field"><input type="password" name="password" id="password" placeholder="Password">
                      <i class="icon-lock icon-large"></i>
                   </p>
                   <p class="submit"><button type="button" name="bt_entrar" id="bt_entrar" onClick="validaLogin()"><i class="icon-arrow-right icon-large"></i></button>
                   </p>
                 </form>
                </div>
                <div align="center">
                 <input name="registrar_new" type="button" class="button" id="registrar_new" value="Registrar" onClick="registro_nuevo()"/>
                 <input name="bt_ver_reglas" type="button" class="button" id="bt_ver_reglas" value="Ver Reglas" onClick="ver_reglas()"/>
                 <input name="bt_premios" type="button" class="button" id="bt_premios" value="Premios" onClick="ver_premios()"/>
                </div>  
       </div>
       </div>
       <div align="center" style="color:#FFF; font-weight:bold">Derechos Reservados Para Grupo Vikquin &reg;</div> 
    </body>
    <iframe id="iproceso" name="iproceso" style="display:none"></iframe>
</html>

