<?php
class Datos_usuario{
	
	var $cve_usuario;
	var $nombre_completo;
	var $nick;
	var $cve_pago_acceso;
	var $key_acceso;

	function set_cve_usuario($cve_usuario)
	{
		$this->cve_usuario = $cve_usuario;
	}
	
	function get_cve_usuario() 
	{
		return $this->cve_usuario;
	}	
	
	function set_nombre_completo($nombre_completo)
	{
		$this->nombre_completo = $nombre_completo;
	}
	
	function get_nombre_completo() 
	{
		return $this->nombre_completo;
	}
	
	function set_nick($nick)
	{
		$this->nick = $nick;
	}
	
	function get_nick()
	{
		return $this->nick;
	}
	
	function set_cve_pago_acceso($cve_pago_acceso)
	{
		$this->cve_pago_acceso = $cve_pago_acceso;
	}
	
	function get_cve_pago_acceso()
	{
		return $this->cve_pago_acceso;
	}
	
	function set_key_acceso($key_acceso)
	{
		$this->key_acceso = $key_acceso;
	}
	
	function get_key_acceso()
	{
		return $this->key_acceso;
	}
	
}
?>
