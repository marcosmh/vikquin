<?php
require_once("../bd/Conexion.php");
require_once("../sesion/datos_usuario.php");
session_start();

if(empty($_SESSION['visa']))
{
	$estilo_link = "../includes/css/style_modulo.css";
	$estilo_link2 = "../includes/css/tablas.css";
	$mensajeTitulo = "Sesi&oacute;n terminada";
	$mensajeError = "<ul><li><h3>La sesi&oacute;n de usuario a finalizado.</h3></li> <li><h3>Registrese para ingresar al sistema.</h3></li></ul>";
	$url_retorno = "../index.php";
	require("../mensajes/mensaje_sesion_error.php");}
else
{
$objeto = unserialize($_SESSION['visa']);
$nombre_usuario = $objeto->nombre_completo;

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>.::VikQuin::.</title>
    <link rel="stylesheet" href="../includes/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="../includes/css/jquery-ui-1.10.4.custom.css" type="text/css"/>
    <script type="text/javascript" src="../includes/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../includes/js/jquery-ui-1.10.4.custom.js"></script>
    <script type="text/javascript" src="../includes/js/swfobject.js"></script>
    <script type="text/javascript" src="../includes/js/utilerias.js"></script>
    <script type="text/javascript" src="top.js"></script>

</head>
<body>
<!-- inicio del div inicial --><div id="main">
<div class="header" align="right">
<div class="header-position">
<div class="header-wrapper"> 
<div class="header-inner">
<div class="headerobject">
<div align="left" style="margin-top:160px"><label style="color:#FFF; font-weight:bold">BIENVENIDO: <?php echo $nombre_usuario ?></label></div>
</div>             
<script type="text/javascript">
jQuery((function (swf) 
{
	return function () 
	{
		swf.switchOffAutoHideShow();
		swf.registerObject("flash-object", "9.0.0", "images/expressInstall.swf");
	}
})
(swfobject));
</script>

<!-- inicia div --> 
<div id="flash-area">
<div id="flash-container">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="479" id="flash-object">
    <param name="movie" value="../images/flash.swf" />
    <param name="quality" value="high" />
    <param name="scale" value="exactfit" />
    <param name="wmode" value="transparent" />
    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
    <param name="swfliveconnect" value="true" />
<!--[if !IE]>-->
<object type="application/x-shockwave-flash" data="../images/flash.swf" width="100%" height="479">
    <param name="quality" value="high" />
    <param name="scale" value="exactfit" />
    <param name="wmode" value="transparent" />
    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
    <param name="swfliveconnect" value="true" />
<!--<![endif]-->
<!--[if !IE]>-->
</object>
<!--<![endif]-->
</object>
</div>
</div>
  <!-- fin del div --> 
</div>
</div>
</div>
</div>

<div align="right" style="margin-top:-5px">
<input type="hidden" id="1er_lugar" name="1er_lugar" value="<?php echo "$ ".number_format($verifica["primer_lugar"],2);?>" />
<input type="hidden" id="2er_lugar" name="2er_lugar" value="<?php echo "$ ".number_format($verifica["segundo_lugar"],2);?>" />
<input type="hidden" id="3er_lugar" name="3er_lugar" value="<?php echo "$ ".number_format($verifica["tercer_lugar"],2);?>" />
<input type="hidden" id="gasto" name="gasto" value="<?php echo "$ ".number_format($verifica["gasto"],2);?>" />
                
<input type="button" name="bt_premios" id="bt_premios" onclick="ver_premios()" class="button-menubar" value="Premios" />
<input type="button" name="bt_reglas" id="bt_reglas" onclick="ver_reglas()" class="button-menubar" value="Ver Reglas" />
<input type="button" name="bt_salir" id="bt_salir" onclick="salir()" class="button-menubar" value="Salir" />
</div>
<!-- fin del div inicial --></div>
</body>
</html>
<?php 
}
?>