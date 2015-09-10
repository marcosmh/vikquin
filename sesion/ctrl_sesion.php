<?php
require('modelo_sesion.php');
require('datos_usuario.php');
session_start();

$objModeloSesion = new Modelo_sesion;

  $usuario = addslashes(!empty($_POST["usuario"])? $_POST["usuario"]:"");
  $password = addslashes(md5(!empty($_POST["password"])? $_POST["password"]:""));

  $resultado = $objModeloSesion->ConsultaUsuario($usuario, $password);
  if($resultado)
  {
      $objDatos= new Datos_usuario;
      $objDatos->set_cve_usuario($resultado['cve_usuario']);
      $objDatos->set_nombre_completo( $resultado['nombre_completo']);
      $objDatos->set_nick($resultado['nick']);
      $objDatos->set_cve_pago_acceso($resultado['cve_pago_acceso']);
      $objDatos->set_key_acceso($resultado['key_acceso']);
      $_SESSION['visa'] = serialize($objDatos);
	  
	  if($resultado['nick'] != 'administrador')
	  {
		  $verifica_estatus_fase = $objModeloSesion->VerificarEstatusFases();
		  if($verifica_estatus_fase["total"] == 0)
		  {
			  $resultado = $objModeloSesion->VerificarPronosticos($resultado['cve_usuario']);
			  if($resultado["pronosticos_capturados"] == 0)
			  { 
			  	$clave = 1; ?>
				<script type='text/javascript'>
					parent.redirrecciona(<?php echo $clave?>);
				</script>
		<?php }
			  else
			  { 
			  	$clave = 2; ?>
				 <script type='text/javascript'>
					parent.redirrecciona(<?php echo $clave?>);
				 </script>
		<?php
			  }	
			}
			else
			{ 
				$clave = 2; ?>
				<script type='text/javascript'>
					parent.redirrecciona(<?php echo $clave?>);
				 </script>
	  <?php	}
	 }
	 else
	 { 
	 	 $clave = 3; ?>
		 <script type='text/javascript'>
			parent.redirrecciona(<?php echo $clave?>);
		 </script>
<?php }
  }
  else  
   { ?>
	  <script type='text/javascript'>
        parent.error();
      </script>
	  
 <?php 
   }
?>

