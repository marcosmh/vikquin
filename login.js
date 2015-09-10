// JavaScript Document

$(document).ready(function(){
	$("#usuario").focus();
	//******************EVENTO DE ENTER*****************************************
	$("#password").keypress(function(event) {
		  if(event.which == 13){
			  validaLogin();
			  }
	});
	$("#usuario").keypress(function(event) {
		  if(event.which == 13){
			  validaLogin();
			  }
	});
});
	
function validaLogin()
{
	var usuario = $('#usuario').val().trim();
	var pass = $('#password').val().trim();
	
	if(usuario == '')
	{
		$('#usuario').jAlert('Indique su usuario',"info");
	}
	else if (pass == '')
	{
		$('#password').jAlert('Indique su contrase&ntilde;a',"info");
	}
	else 
	{
		document.forms["envio_datos"].action="sesion/ctrl_sesion.php";
		document.forms["envio_datos"].target ="iproceso";
		document.forms["envio_datos"].submit();
	}
}
	
function error()
{
	$('#password').jAlert('El usuario y Contrase&ntilde;a no coinciden',"fatal", 'errboxid');
}

function redirrecciona(clave)
{
	if(clave == 1)
	{
		location.href = '../marcos/control_pronostico.php';
	}
	else if(clave == 2)
	{
		location.href = '../marcos/control_detalle.php';
	}
	else
	{
		location.href = '../marcos/control_admin.php';
	}
}
function registro_nuevo()
{
	location.href = 'modulos/captura_usuarios/ctrl_vista_registra_usuario.php';
}
function ver_reglas()
{
	MostrarMensajeReglas(
						"<link rel='stylesheet' href='includes/css/style_modulo.css' type='text/css'/>"
						+"<link rel='stylesheet' href='includes/css/tablas.css' type='text/css'/>"
						+"</br></br><center>"
						+"<h1>Criterios de Puntajes</h1>"
						+"<br>"
					   +"<table width='90%' class='form' style='background-color:#FFF' border='1'>"
						+"<tr>"
							+"<td width='319' rowspan='2' class='titulo'><div align='center'>Descripción</div></td>"
							+"<td width='118' rowspan='2' class='titulo'><div align='center'>Total de Puntos</div></td>"
							+"<td width='415' colspan='2' class='titulo'><div align='center'>Ejemplos</div></td>"
						  +"</tr>"
						  +"<tr>"
							+"<td class='titulo'><div align='center'>Mi Pronostico</div></td>"
							+"<td class='titulo'><div align='center'>Resultado Final</div></td>"
						  +"</tr>"
						  +"<tr>"
							+"<td class='etiqueta_alaizquierda'>*.- Equipo Ganador y Marcador</td>"
							+"<td><div align='center'>3</div></td>"
							+"<td><div align='center'>3 - 1</div></td>"
							+"<td><div align='center'>3 - 1</div></td>"
						  +"</tr>"
						  +"<tr>"
							+"<td class='etiqueta_alaizquierda'>*.- Equipo Ganador</td>"
							+"<td><div align='center'>1</div></td>"
							+"<td><div align='center'>3 - 1</div></td>"
							+"<td><div align='center'>1 - 0</div></td>"
						  +"</tr>"
						  +"<tr>"
							+"<td class='etiqueta_alaizquierda'>*.- Empate y Marcador</td>"
							+"<td><div align='center'>2</div></td>"
							+"<td><div align='center'>2 - 2</div></td>"
							+"<td><div align='center'>2 - 2</div></td>"
						  +"</tr>"
						  +"<tr>"
							+"<td class='etiqueta_alaizquierda'>*.- Empate</td>"
							+"<td><div align='center'>1</div></td>"
							+"<td><div align='center'>2 - 2</div></td>"
							+"<td><div align='center'>1 - 1</div></td>"
						  +"</tr>"
						+"</table>"
						+"<br/>"
						+"<div align='center'><h2>La fecha limite de captura de pronostico es el 11 de junio del 2014</h2></div>");
}
function ver_premios()
{
	var primero = $("#1er_lugar").val();
	var dos = $("#2er_lugar").val();
	var tres = $("#3er_lugar").val();
	var cuatro = $("#gasto").val();
	MostrarMensajeReglas(
						"<link rel='stylesheet' href='includes/css/style_modulo.css' type='text/css'/>"
						+"<link rel='stylesheet' href='includes/css/tablas.css' type='text/css'/>"
						+"</br></br><center>"
						+"<h1>Criterios de Premios</h1>"
						+"<br>"
						+"<table width='95%' class='form' style='background-color:#FFF' border='1' align='center'>"
						+"<tr>"
						+"<td width='319' class='titulo'><div align='center'><h3>Descripción de Premios</h3></div></td>"
						+"<td width='118' class='titulo'><div align='center'><h3>Porcentaje</h3></div></td>"
						+"<td width='118' class='titulo'><div align='center'><h3>Monto Acumulado</h3></div></td>"
						+"</tr>"
						+"<tr>"
						+"<td class='etiqueta_alaizquierda'><h4>*.- Primer Lugar</h4></td>"
						+"<td align='center'><h4>50%</h4></td>"
						+"<td align='right'><h4>"+primero+"</h4></td>"
						+"</tr>"
						+"<tr>"
						+"<td class='etiqueta_alaizquierda'><h4>*.- Segundo Lugar</h4></td>"
						+"<td align='center'><h4>30%</h4></td>"
						+"<td align='right'><h4>"+dos+"</h4></td>"
						+"</tr>"
						+"<tr>"
						+"<td class='etiqueta_alaizquierda'><h4>*.- Tercer Lugar</h4></td>"
						+"<td align='center'><h4>10%</h4></td>"
						+"<td align='right'><h4>"+tres+"</h4></td>"
						+"</tr>"
						+"<tr>"
						+"<td class='etiqueta_alaizquierda'><h4>*.- Pago de servidor y mantenimiento del sistema vikquin.com.mx</h4></td>"
						+"<td align='center'><h4>10%</h4></td>"
						+"<td align='right'><h4>"+cuatro+"</h4></td>"
						+"</tr>"
						+"</table>");
}