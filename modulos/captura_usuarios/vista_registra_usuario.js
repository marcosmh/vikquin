$(document).ready(function(){
	$("#nombre_completo").focus();
 	$("#btn_guardar").click(function()
	{
		valida_formulario();
		var valida = $("#frm_captura_datos").valid();
		if(valida)
		{					
		    document.forms['frm_captura_datos'].action = "ctrl_guardar_usuario.php";
			document.forms['frm_captura_datos'].submit()
		}
	});

	$('#btn_limpiar').click(function(){
		location = "ctrl_vista_registra_usuario.php";
	});
	
	$('#btn_cancelar').click(function(){
		location = "../../index.php";
	});
	$("#celular").mask("(999) 999-9999");
//-----------------------------------
}); // fin de document ready

function valida_formulario()
{
	$("#frm_captura_datos").validate({
		rules:{
			nombre_completo: {required: true},
			nick:            {required: true},
			contrasenia:     {required: true},
			correo:          {required: true, email:true},
			celular:         {required: true},
			cve_pago_acceso: {required: true}
		},
		messages:{
			nombre_completo: { required: "* Escriba el nombre completo. <br>" },
			nick:            { required: "* Escriba el usuario. <br>" },
			contrasenia:     { required: "* Escriba la contraseña. <br>" },
			correo:          { required: "* Escriba el correo electronico. <br>", email:"* Formato de correo invalido <br/>" },
			celular:         { required: "* Escriba el número de celular. <br>"},
			cve_pago_acceso: { required: "* Escriba el código de acceso. <br>" }
		},
		submitHandler:function(){
			
		},
		succes:function(label){

			label.html("&nbsp;").addClass("checked");
			
			
		}
	});

}

