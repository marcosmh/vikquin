<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>.::VikQuin::.</title>
     <link rel="stylesheet" href="../../includes/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="../../includes/css/style_modulo.css" type="text/css" />
    <link rel="stylesheet" href="../../includes/css/tablas.css" type="text/css" />
    <link rel="stylesheet" href="../../includes/css/jquery-validate/screen.css" type="text/css" />
    <link rel="stylesheet" href="../../includes/css/jquery-validate/reset.css" type="text/css" />
    
    <script type="text/javascript" src="../../includes/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../../includes/js/jquery-ui-1.10.4.custom.js"></script>
    <script type="text/javascript" src="../../includes/js/swfobject.js"></script>
    <script type="text/javascript" src="../../includes/js/utilerias.js"></script>
    <script type="text/javascript" src="../../includes/js/jquery.validate.js"></script>
    <script type="text/javascript" src="../../includes/js/jquery.maskedinput-1.3.1.js"></script>
    <script type="text/javascript" src="vista_registra_usuario.js"></script>

</head>
<body>
<!-- inicio del div inicial --><div id="main">
<div class="header">
<div class="header-position">
<div class="header-wrapper">
<div class="header-inner">
<div class="headerobject"></div>
                
<script type="text/javascript">
jQuery((function (swf) 
{
	return function () 
	{
		swf.switchOffAutoHideShow();
		swf.registerObject("flash-object", "9.0.0", "../../images/expressInstall.swf");
	}
})
(swfobject));
</script>

<!-- inicia div --> 
<div id="flash-area">
<div id="flash-container">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="479" id="flash-object">
    <param name="movie" value="images/flash.swf" />
    <param name="quality" value="high" />
    <param name="scale" value="exactfit" />
    <param name="wmode" value="transparent" />
    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
    <param name="swfliveconnect" value="true" />
<!--[if !IE]>-->
<object type="application/x-shockwave-flash" data="../../images/flash.swf" width="100%" height="479">
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

<div class="box-body sheet-body">
<div class="content-layout">
<div class="content-layout-row">
<!-- ********************************** aqui codigo a pintar -->
<form name="frm_captura_datos" id="frm_captura_datos" method="post">
 <div id="content">
 <div class="title">Captura de Datos del Usuario</div>
 <!--div class="datagrid"-->
  <table width="100%" class="form">
    <tr>
          <td colspan="2" class="titulo">Datos de Captura</td>
    </tr>
     <tbody>
            <tr>
              <td width="15%" class="etiqueta_alaizquierda">Nombre Completo:</td>
              <td width="85%">
              <input name="nombre_completo" type="text" required class="input" id="nombre_completo" size="80" maxlength="290" /></td>
            </tr>
            <tr>
              <td class="etiqueta_alaizquierda">Usuario:</td>
              <td><input name="nick" type="text" required class="input" id="nick" size="50" maxlength="49" /></td>
            </tr>
            <tr>
              <td class="etiqueta_alaizquierda">Contrase&ntilde;a:</td>
              <td><input name="contrasenia" type="password" required class="input" id="contrasenia" size="50" maxlength="95" /></td>
            </tr>            
            <tr>
              <td class="etiqueta_alaizquierda">Correo Electr&oacute;nico:</td>
              <td><input name="correo" type="text" class="input" id="correo" required size="80" /></td>
            </tr>
            <tr>
              <td class="etiqueta_alaizquierda">Tel. Celular:</td>
              <td><input name="celular" type="text" required class="input" id="celular" size="15" maxlength="15" onkeypress="return getKeyNumber(event);" /></td>
            </tr>
            <tr>
              <td class="etiqueta_alaizquierda">C&oacute;digo de Acceso:</td>
              <td><input name="cve_pago_acceso" type="text" required class="input" id="cve_pago_acceso" size="30" maxlength="15" /></td>
            </tr>
        </tbody>
    </table>
    <br/>
    <br/>
    <div align="center">
    <input type="button" class="input_button" name="btn_cancelar" id="btn_cancelar" value="Cancelar" />
    <input type="button" class="input_button" name="btn_limpiar" id="btn_limpiar" value="Limpiar" />
    <input type="submit" class="input_button" name="btn_guardar" id="btn_guardar" value="Guardar"/>
    </div>
</div>
</form>
<!-- ******************************************* fin de codigo a pintar -->               
</div>
</div>
 </div>
<!-- fin del div inicial --></div>
</body>
</html>