// JavaScript Document
var ventana = "";
var bandera = false;
function MostrarMensajeReglas(texto)
{	
	if(bandera != true)
	{
		ventana = window.open("", "VikQuin","width=700,height=350,menubar=no,top=200,left=400,location=no");
		ventana.document.write(texto);
		bandera = true;
	}
	else 
	{
		if(bandera == true )
		{
			ventana.close();
		}
		ventana = window.open("", "VikQuin","width=700,height=350,menubar=no,top=200,left=400,location=no");
		ventana.document.write(texto);
	}
}

function MostrarMensajeModal(texto) 
{ 
	$dialog.text(mensajeTexto); 
    $dialog.dialog('open'); 	
}
function PageInit() 
{ 
  $dialog = $('<div></div>') 
	   .dialog({ 
		 autoOpen: false, 
		 title: 'VikQuin', 
	  modal: true,
	   buttons:
	   {
			Aceptar: function()
			{
				$(this).dialog('close');
			}
		}
	  
		}); 
}
/*
* Valida que el texto escrito en el campo sea un 
*  caracter numerico.
* Uso: onkeypress="return getKeyNumber(event);"
*/
function getKeyNumber( events )
{
  	var key = ( window.event )?events.keyCode:events.which;
  	if( ( key >= 48 && key <= 57 ) || key == 8 || key == 0 )
	{
  		return true;
  	}
	else
	{
		//alert('Es un campo numerico');
	  	return false;
	  }
}
function getKeyNumberDecimal( events )
{
	var key = ( window.event )?events.keyCode:events.which;
	if( ( key >= 48 && key <= 57 ) || key == 46 || key == 8)
	{
		return true;
	}
	else
	{
		//alert('Es un campo numerico');
		return false;
	}
}