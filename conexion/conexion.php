<?php


/**
 * @author Jc
 * @version 1.0
 * @created 21-jun-2016 08:10:33 p.m.
 */
class conexion
{

	var $animal;
	var $con = NULL;
	static var $conexion;

	function conexion()
	{
	}



	function __construct()
	{
	}

	function cerrar()
	{
	}

	/**
	 * 
	 * @param query
	 */
	function consulta($query)
	{
	}

	function getanimal()
	{
		return $this->animal;
	}

	static function getConexion()
	{
	}

	/**
	 * 
	 * @param newVal
	 */
	function setanimal($newVal)
	{
		$this->animal = $newVal;
	}

}
?>