<?php
	/*
	class Modelo
	{	
		
		public $usuario = 'root';
		public $pass = '21091361';
		public $baseDeDatos = 'leopoldo_aguerrevere';

		public $port = 5432;
		public $host = 'localhost';

		public $strConexion = null;
		public $cnx = null;

		public function __construct() 
	 	{
	 		$this->strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
		}

		public function crearConexion() 
		{
			mysql_select_db($this->baseDeDatos, $this->strConexion);
		}

		public function cerrarConexion() 
		{
			mysql_close($this->strConexion);
		}
	}
	*/
	/*
		$usuario = 'root';
		$pass = '21091361';
		$baseDeDatos = 'leopoldo_aguerrevere';
		$host = 'localhost';
	*/

	/**
	* 
	*/
	class Modelo
	{
		public $usuario = 'root';
		public $pass = '21091361';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';
	}
?>