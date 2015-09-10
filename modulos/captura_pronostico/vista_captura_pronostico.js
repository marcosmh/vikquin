// JavaScript Document
$(document).ready(function() {
	
	var $dialog; 
	PageInit();
	$('#Validacion').dialog({
		autoOpen: false,
		height: 250 ,
		width:420, 
		modal: false, 
		resizable: true,
		buttons:
		{
			Aceptar: function(){
			$(this).dialog('close');
			}
		}
	});
	
	$('#msj_confirmacion').dialog({
		autoOpen: false,
		height: 150 ,
		width:450, 
		modal: false, 
		resizable: true,
		buttons:
		{
			Aceptar: function(){
				document.forms['captura_datos'].action = "ctrl_guardar_pronostico.php";
				document.forms['captura_datos'].submit();
				$(this).dialog('close');
			},
			Cancelar: function(){
			$(this).dialog('close');
			}
		}
	});

}); //fin de document ready

function continuar1()
{
	var mensajeGrupoA = validarGrupoA();
	if(mensajeGrupoA.length > 0)
	{
		$('#textMensaje').html("<h4>Los siguientes datos del grupo A son requerido:</h4><br/>"+mensajeGrupoA);
		$('#Validacion').dialog("open");
	}
	else
	{
		$("#bt_continuar_1").css('display','none');
		$("#grupoA").css('display','none');
		$("#bt_regresar_1").css('display','');
		$("#bt_continuar_2").css('display','');
		$("#grupoB").css('display','');
	}
}

function continuar2()
{
	var mensajeGrupoB = validarGrupoB();
	if(mensajeGrupoB.length > 0)
	{
		$('#textMensaje').html("<h4>Los siguientes datos del grupo B son requerido:</h4><br/>"+mensajeGrupoB);
		$('#Validacion').dialog("open");
	}
	else
	{
		$("#bt_regresar_1").css('display','none');
		$("#bt_continuar_2").css('display','none');
		$("#grupoB").css('display','none');
		$("#bt_regresar_2").css('display','');
		$("#bt_continuar_3").css('display','');
		$("#grupoC").css('display','');
	}
}
function regresar1()
{
	$("#bt_regresar_1").css('display','none');
	$("#bt_continuar_2").css('display','none');
	$("#grupoB").css('display','none');
	$("#bt_continuar_1").css('display','');
	$("#grupoA").css('display','');
}
function continuar3()
{
	var mensajeGrupoC = validarGrupoC();
	if(mensajeGrupoC.length > 0)
	{
		$('#textMensaje').html("<h4>Los siguientes datos del grupo C son requerido:</h4><br/>"+mensajeGrupoC);
		$('#Validacion').dialog("open");
	}
	else
	{
		$("#bt_regresar_2").css('display','none');
		$("#bt_continuar_3").css('display','none');
		$("#grupoC").css('display','none');
		$("#bt_regresar_3").css('display','');
		$("#bt_continuar_4").css('display','');
		$("#grupoD").css('display','');
	}
}
function regresar2()
{
	$("#bt_regresar_1").css('display','');
	$("#bt_continuar_2").css('display','');
	$("#grupoB").css('display','');
	$("#bt_regresar_2").css('display','none');
	$("#bt_continuar_3").css('display','none');
	$("#grupoC").css('display','none');
} 
function continuar4()
{
	var mensajeGrupoD = validarGrupoD();
	if(mensajeGrupoD.length > 0)
	{
		$('#textMensaje').html("<h4>Los siguientes datos del grupo D son requerido:</h4><br/>"+mensajeGrupoD);
		$('#Validacion').dialog("open");
	}
	else
	{
		$("#bt_regresar_3").css('display','none');
		$("#bt_continuar_4").css('display','none');
		$("#grupoD").css('display','none');
		$("#bt_regresar_4").css('display','');
		$("#bt_continuar_5").css('display','');
		$("#grupoE").css('display','');
	}
}
function regresar3()
{
	$("#bt_regresar_2").css('display','');
	$("#bt_continuar_3").css('display','');
	$("#grupoC").css('display','');
	$("#bt_regresar_3").css('display','none');
	$("#bt_continuar_4").css('display','none');
	$("#grupoD").css('display','none');
}
function continuar5()
{
	var mensajeGrupoE = validarGrupoE();
	if(mensajeGrupoE.length > 0)
	{
		$('#textMensaje').html("<h4>Los siguientes datos del grupo E son requerido:</h4><br/>"+mensajeGrupoE);
		$('#Validacion').dialog("open");
	}
	else
	{
		$("#bt_regresar_4").css('display','none');
		$("#bt_continuar_5").css('display','none');
		$("#grupoE").css('display','none');
		$("#bt_regresar_5").css('display','');
		$("#bt_continuar_6").css('display','');
		$("#grupoF").css('display','');
	}
}
function regresar4()
{
	$("#bt_regresar_3").css('display','');
	$("#bt_continuar_4").css('display','');
	$("#grupoD").css('display','');
	$("#bt_regresar_4").css('display','none');
	$("#bt_continuar_5").css('display','none');
	$("#grupoE").css('display','none');
}
function continuar6()
{
	var mensajeGrupoF = validarGrupoF();
	if(mensajeGrupoF.length > 0)
	{
		$('#textMensaje').html("<h4>Los siguientes datos del grupo F son requerido:</h4><br/>"+mensajeGrupoF);
		$('#Validacion').dialog("open");
	}
	else
	{
		$("#bt_regresar_5").css('display','none');
		$("#bt_continuar_6").css('display','none');
		$("#grupoF").css('display','none');
		$("#bt_regresar_6").css('display','');
		$("#bt_continuar_7").css('display','');
		$("#grupoG").css('display','');
	}
}
function regresar5()
{
	$("#bt_regresar_4").css('display','');
	$("#bt_continuar_5").css('display','');
	$("#grupoE").css('display','');
	$("#bt_regresar_5").css('display','none');
	$("#bt_continuar_6").css('display','none');
	$("#grupoF").css('display','none');
}
function continuar7()
{
	var mensajeGrupoG = validarGrupoG();
	if(mensajeGrupoG.length > 0)
	{
		$('#textMensaje').html("<h4>Los siguientes datos del grupo G son requerido:</h4><br/>"+mensajeGrupoG);
		$('#Validacion').dialog("open");
	}
	else
	{
		$("#bt_regresar_6").css('display','none');
		$("#bt_continuar_7").css('display','none');
		$("#grupoG").css('display','none');
		$("#bt_regresar_7").css('display','');
		$("#bt_guardar").css('display','');
		$("#grupoH").css('display','');
	}
}
function regresar6()
{
	$("#bt_regresar_5").css('display','');
	$("#bt_continuar_6").css('display','');
	$("#grupoF").css('display','');
	$("#bt_regresar_6").css('display','none');
	$("#bt_continuar_7").css('display','none');
	$("#grupoG").css('display','none');
}
function guardarFinal()
{
	var mensajeGrupoH = validarGrupoH();
	if(mensajeGrupoH.length > 0)
	{
		$('#textMensaje').html("<h4>Los siguientes datos del grupo H son requerido:</h4><br/>"+mensajeGrupoH);
		$('#Validacion').dialog("open");
	}
	else
	{
		$('#textMsjConfirmacion').html("<h4>¿Realmente desea registrar sus pronosticos capturados?</h4>");
	    $('#msj_confirmacion').dialog("open");
	}
}
function regresar7()
{
	$("#bt_regresar_6").css('display','');
	$("#bt_continuar_7").css('display','');
	$("#grupoG").css('display','');
	$("#bt_regresar_7").css('display','none');
	$("#bt_guardar").css('display','none');
	$("#grupoH").css('display','none');
}
//*********************************validacion Grupo A****************************************
function validarGrupoA()
{
	var mensaje = "";
	
	if($("#local_1").val().trim() == "" )
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 1</label><br/>";
	if($("#visitante_1").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 1</label><br/>";
	if($("#local_2").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 2</label><br/>";
	if($("#visitante_2").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 2</label><br/>";
	if($("#local_3").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 3</label><br/>";
	if($("#visitante_3").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 3</label><br/>";
	if($("#local_4").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 4</label><br/>";
	if($("#visitante_4").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 4</label><br/>";
	if($("#local_5").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 5</label><br/>";
	if($("#visitante_5").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 5</label><br/>";	
	if($("#local_6").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 6</label><br/>";
	if($("#visitante_6").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 6</label><br/>";
		
	return mensaje;
}
//*********************************validacion Grupo B****************************************
function validarGrupoB()
{
	var mensaje = "";
	
	if($("#local_7").val().trim() == "" )
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 1</label><br/>";
	if($("#visitante_7").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 1</label><br/>";
	if($("#local_8").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 2</label><br/>";
	if($("#visitante_8").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 2</label><br/>";
	if($("#local_9").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 3</label><br/>";
	if($("#visitante_9").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 3</label><br/>";
	if($("#local_10").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 4</label><br/>";
	if($("#visitante_10").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 4</label><br/>";
	if($("#local_11").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 5</label><br/>";
	if($("#visitante_11").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 5</label><br/>";	
	if($("#local_12").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 6</label><br/>";
	if($("#visitante_12").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 6</label><br/>";
		
	return mensaje;
}
//*********************************validacion Grupo C****************************************
function validarGrupoC()
{
	var mensaje = "";
	
	if($("#local_13").val().trim() == "" )
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 1</label><br/>";
	if($("#visitante_13").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 1</label><br/>";
	if($("#local_14").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 2</label><br/>";
	if($("#visitante_14").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 2</label><br/>";
	if($("#local_15").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 3</label><br/>";
	if($("#visitante_15").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 3</label><br/>";
	if($("#local_16").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 4</label><br/>";
	if($("#visitante_16").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 4</label><br/>";
	if($("#local_17").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 5</label><br/>";
	if($("#visitante_17").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 5</label><br/>";	
	if($("#local_18").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 6</label><br/>";
	if($("#visitante_18").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 6</label><br/>";
		
	return mensaje;
}
//*********************************validacion Grupo D****************************************
function validarGrupoD()
{
	var mensaje = "";
	
	if($("#local_19").val().trim() == "" )
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 1</label><br/>";
	if($("#visitante_19").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 1</label><br/>";
	if($("#local_20").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 2</label><br/>";
	if($("#visitante_20").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 2</label><br/>";
	if($("#local_21").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 3</label><br/>";
	if($("#visitante_21").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 3</label><br/>";
	if($("#local_22").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 4</label><br/>";
	if($("#visitante_22").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 4</label><br/>";
	if($("#local_23").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 5</label><br/>";
	if($("#visitante_23").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 5</label><br/>";	
	if($("#local_24").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 6</label><br/>";
	if($("#visitante_24").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 6</label><br/>";
		
	return mensaje;
}
//*********************************validacion Grupo E****************************************
function validarGrupoE()
{
	var mensaje = "";
	
	if($("#local_25").val().trim() == "" )
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 1</label><br/>";
	if($("#visitante_25").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 1</label><br/>";
	if($("#local_26").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 2</label><br/>";
	if($("#visitante_26").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 2</label><br/>";
	if($("#local_27").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 3</label><br/>";
	if($("#visitante_27").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 3</label><br/>";
	if($("#local_28").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 4</label><br/>";
	if($("#visitante_28").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 4</label><br/>";
	if($("#local_29").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 5</label><br/>";
	if($("#visitante_29").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 5</label><br/>";	
	if($("#local_30").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 6</label><br/>";
	if($("#visitante_30").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 6</label><br/>";
		
	return mensaje;
}
//*********************************validacion Grupo F****************************************
function validarGrupoF()
{
	var mensaje = "";
	
	if($("#local_31").val().trim() == "" )
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 1</label><br/>";
	if($("#visitante_31").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 1</label><br/>";
	if($("#local_32").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 2</label><br/>";
	if($("#visitante_32").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 2</label><br/>";
	if($("#local_33").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 3</label><br/>";
	if($("#visitante_33").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 3</label><br/>";
	if($("#local_34").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 4</label><br/>";
	if($("#visitante_34").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 4</label><br/>";
	if($("#local_35").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 5</label><br/>";
	if($("#visitante_35").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 5</label><br/>";	
	if($("#local_36").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 6</label><br/>";
	if($("#visitante_36").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 6</label><br/>";
		
	return mensaje;
}
//*********************************validacion Grupo G****************************************
function validarGrupoG()
{
	var mensaje = "";
	
	if($("#local_37").val().trim() == "" )
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 1</label><br/>";
	if($("#visitante_37").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 1</label><br/>";
	if($("#local_38").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 2</label><br/>";
	if($("#visitante_38").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 2</label><br/>";
	if($("#local_39").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 3</label><br/>";
	if($("#visitante_39").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 3</label><br/>";
	if($("#local_40").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 4</label><br/>";
	if($("#visitante_40").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 4</label><br/>";
	if($("#local_41").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 5</label><br/>";
	if($("#visitante_41").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 5</label><br/>";	
	if($("#local_42").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 6</label><br/>";
	if($("#visitante_42").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 6</label><br/>";
		
	return mensaje;
}
//*********************************validacion Grupo H****************************************
function validarGrupoH()
{
	var mensaje = "";
	
	if($("#local_43").val().trim() == "" )
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 1</label><br/>";
	if($("#visitante_43").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 1</label><br/>";
	if($("#local_44").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 2</label><br/>";
	if($("#visitante_44").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 2</label><br/>";
	if($("#local_45").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 3</label><br/>";
	if($("#visitante_45").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 3</label><br/>";
	if($("#local_46").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 4</label><br/>";
	if($("#visitante_46").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 4</label><br/>";
	if($("#local_47").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 5</label><br/>";
	if($("#visitante_47").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 5</label><br/>";	
	if($("#local_48").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo local 6</label><br/>";
	if($("#visitante_48").val().trim() == "")
		mensaje += "<label class ='etiqueta_alaizquierda'>* Escriba el marcador del equipo visitante 6</label><br/>";
		
	return mensaje;
}