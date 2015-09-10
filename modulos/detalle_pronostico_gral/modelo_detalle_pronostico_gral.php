<?php 
require("../../bd/Conexion.php");
class Modelo_Detalle_Pronosti
{
	// consulta de encabezado
	function consultar_encabezado()
	{
		try
		{
			$objeto = new Conexion;
			$conn = $objeto->conectar();	
					
			$vquery = " SELECT  DISTINCT
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 1)enf1,
								
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 2)enf2,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 3)enf3,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 4)enf4,	
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 5)enf5,	
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 6)enf6,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 7)enf7,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 8)enf8,

								   (SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 9)enf9,	
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 10)enf10,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 11)enf11,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 12)enf12,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 13)enf13,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 14)enf14,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 15)enf15,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
								     equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 16)enf16,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 17)enf17,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 18)enf18,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 19)enf19,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 20)enf20, ";
						$vquery .= "(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 21)enf21,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 22)enf22,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 23)enf23,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 24)enf24,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 25)enf25,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 26)enf26,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 27)enf27,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 28)enf28,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 29)enf29,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 30)enf30,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 31)enf31,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 32)enf32,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 33)enf33,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 34)enf34,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 35)enf35,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 36)enf36,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 37)enf37,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 38)enf38,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 39)enf39,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 40)enf40,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 41)enf41,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 42)enf42,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 43)enf43,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 44)enf44,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 45)enf45,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 46)enf46,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 47)enf47,
								(SELECT CONCAT(eqi.DESC_EQUIPO,' ',CONCAT(IF(enf.GOL_LOCAL IS NULL,'-',enf.GOL_LOCAL),' - ',IF(enf.GOL_VISITANTE IS NULL,'-',enf.GOL_VISITANTE)),' ',eqp.DESC_EQUIPO )enfrentamiento
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 48)enf48

								FROM pronosticos pronos,
									 usuarios us
								WHERE pronos.CVE_USUARIO = us.CVE_USUARIO 
								GROUP BY us.CVE_USUARIO";
										
			$resultado = mysql_query($vquery,$conn);

			if($resultado)
			{
				return $resultado;
			}
			else
			{
				mysql_error();
				exit;
			}
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	//Consulta resultado
	function consultar_detalle()
	{
		try
		{
			$objeto = new Conexion;
			$conn = $objeto->conectar();	
					
			$vquery = " SELECT  us.NOMBRE_COMPLETO,
			                    us.NICK,
								(SELECT CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 1)enf1,
								(SELECT CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 2)enf2,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 3)enf3,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 4)enf4,	
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 5)enf5,	
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 6)enf6,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 7)enf7,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 8)enf8,
								   (SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 9)enf9,	
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 10)enf10,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 11)enf11,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 12)enf12,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 13)enf13,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 14)enf14,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 15)enf15,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
								     equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 16)enf16,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 17)enf17,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 18)enf18,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 19)enf19,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 20)enf20, ";
						$vquery .= "(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 21)enf21,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 22)enf22,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 23)enf23,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 24)enf24,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 25)enf25,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 26)enf26,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 27)enf27,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 28)enf28,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 29)enf29,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 30)enf30,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 31)enf31,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 32)enf32,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 33)enf33,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 34)enf34,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 35)enf35,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 36)enf36,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 37)enf37,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 38)enf38,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 39)enf39,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 40)enf40,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 41)enf41,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 42)enf42,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 43)enf43,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 44)enf44,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 45)enf45,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 46)enf46,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 47)enf47,
								(SELECT 
								CONCAT(IF(pro.GOLES_LOCAL IS NULL,'-',pro.GOLES_LOCAL),' - ',IF(pro.GOLES_VISITANTE IS NULL,'-',pro.GOLES_VISITANTE)) resultado
								FROM enfrentamientos enf,
									 equipos eqi,
									 equipos eqp,
									 pronosticos pro
								WHERE  enf.CVE_EQUIPO = eqi.CVE_EQUIPO
								AND enf.CVE_EQUIPO_VISITANTE = eqp.CVE_EQUIPO
								AND enf.CVE_ENFRENTAMIENTO = pro.CVE_ENFRENTAMIENTO
								AND pro.CVE_USUARIO = us.CVE_USUARIO
								AND enf.CVE_ENFRENTAMIENTO = 48)enf48,
								
								SUM(pronos.PUNTAJE_PARTIDO)PUNTAJE
								
								FROM pronosticos pronos,
									 usuarios us
								WHERE pronos.CVE_USUARIO = us.CVE_USUARIO
								GROUP BY us.NOMBRE_COMPLETO
								ORDER BY PUNTAJE DESC ";
										
			$resultado = mysql_query($vquery,$conn);

			if($resultado)
			{
				return $resultado;
			}
			else
			{
				mysql_error();
				exit;
			}
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	function consultar_encuentros()
	{
		try
		{
			$objeto = new Conexion;
			$conn = $objeto->conectar();	
					
			$vquery = " SELECT
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 1)enf1,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 2)enf2,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 3)enf3,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 4)enf4,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 5)enf5,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 6)enf6,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 7)enf7,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 8)enf8,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 9)enf9,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 10)enf10,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 11)enf11,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 12)enf12,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 13)enf13,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 14)enf14,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 15)enf15,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 16)enf16,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 17)enf17,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 18)enf18,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 19)enf19,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 20)enf20,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 21)enf21,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 22)enf22,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 23)enf23,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 24)enf24,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 25)enf25,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 26)enf26,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 27)enf27,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 28)enf28,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 29)enf29,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 30)enf30,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 31)enf31,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 32)enf32,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 33)enf33,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 34)enf34,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 35)enf35,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 36)enf36,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 37)enf37,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 38)enf38,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 39)enf39,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 40)enf40,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 41)enf41,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 42)enf42,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 43)enf43,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 44)enf44,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 45)enf45,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 46)enf46,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 47)enf47,
							(SELECT count(GOL_LOCAL) FROM enfrentamientos WHERE cve_enfrentamiento = 48)enf48
						FROM dual ";
										
			$resultado = mysql_query($vquery,$conn);

			if($resultado)
			{
				return $resultado;
			}
			else
			{
				mysql_error();
				exit;
			}
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
}
?>