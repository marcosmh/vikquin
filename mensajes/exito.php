<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::VikQuin::.</title>
<?php  if(!empty($url_estilo)) echo $url_estilo ?>
<?php  if(!empty($url_estilo2)) echo $url_estilo2 ?>
</head>

<body>
<div id="content">
<div class="title" align="center"><h4>Mensaje:</h4></div>
<form method="post" name="frm1" id="frm1" action="<?php if(!empty($url_continuar )) echo $url_continuar  ?>">
<input type="hidden"  name="parametro" id="parametro" value="<?php if(!empty($parametro)) echo $parametro ?>"/>
<div align="center">
<table width="100%" height="31" border="0" cellpadding="1" cellspacing="1" class="form">
  <tr>
    <td height="27" align="center"><?php if(!empty($mensaje)) echo $mensaje ?></td>
    </tr>
    <tr>
    <td height="27" align="center"><?php if(!empty($mensaje_negativo)) echo $mensaje_negativo ?></td>
    </tr>
</table>
</div>
 <br />
<div align="center">
    <input type="submit"  name="cancelar"  class="input_button" id="cancelar"  value="Continuar" onclick="<?php if(!empty($onclick)) echo $onclick ?>"/>
</div>
</form>
</div>
</body>
</html>