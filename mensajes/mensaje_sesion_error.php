<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Error de Session</title>
<link rel="stylesheet" href="<?php echo $estilo_link; ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo $estilo_link2; ?>" type="text/css" />
<script type="text/javascript" src="<?php echo $script; ?>"></script>
</head>
<body>
<div id="content">
<div class="title">VikQuin</div>
<form method="post" id="msj_error" name="msj_error" action="" >
<table width="100%" border="0" cellspacing="1" cellpadding="1" class="form">
  <tr>
    <td class="titulo"><?php echo $mensajeTitulo; ?></td>
  </tr>
  <tr>
    <td><?php echo $mensajeError;  ?></td>
  </tr>
  <tr>
  <tr>
  <td></td>
  </tr>
    <td align="center">
    <input type="button" id="bt_aceptar" name="bt_aceptar" value="Aceptar" class="input_button" onblur="retornar_index()" />
	</td>
  </tr>
</table>
</form>
</div>
</body>
</html>