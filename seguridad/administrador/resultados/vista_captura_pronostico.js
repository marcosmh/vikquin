// JavaScript Document
$(document).ready(function() {
	
	var $dialog; 
	PageInit();
	
	$('#msj_confirmacion').dialog({
		autoOpen: false,
		height: 150 ,
		width:450, 
		modal: false, 
		resizable: true,
		buttons:
		{
			Cancelar: function()
			{
				$(this).dialog('close');
			},
			Aceptar: function()
			{
				document.forms['captura_datos'].action = "ctrl_guardar_pronostico.php";
				document.forms['captura_datos'].submit();
				$(this).dialog('close');
			}
		}
	});

}); //fin de document ready


function guardar()
{
	$('#textMsjConfirmacion').html("<h4>¿Realmente desea registrar los resultados registrados?</h4>");
	$('#msj_confirmacion').dialog("open");
}
function generar_key()
{
	document.forms['captura_datos'].action = "../generaKeys/auto_keys.php";
	document.forms['captura_datos'].submit();
}
function limpiar()
{
	document.forms['captura_datos'].reset();
}