<?php
	include('conexion.php');

	/**
	* 
	*/
	class Grado
	{
		public $model;

		public $descripcion;
		public $nivel;

		public $usuario = 'root';
		public $pass = '';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';
		
		function __construct($nivel = "", $descripcion = "") 
	 	{
			$this->descripcion = $descripcion;
			$this->nivel = $nivel;

			$this->model = new Modelo();
		}

		function registrarGrado() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.grado (nivel, descripcion) VALUES ('".$this->nivel."', '".$this->descripcion."')");

			mysql_close($strConexion);
			
			return 0;
		}

		function listarGrado() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT descripcion FROM leopoldo_aguerrevere.grado");

			mysql_close($strConexion);

			return $result;
			
		}

		function verificarSiExisteGrado() {
			
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.grado");

			mysql_close($strConexion);
			
			$registros = mysql_num_rows($result);

			if ($registros > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function verificarSiExistePeriodo() {
			
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.periodo");

			mysql_close($strConexion);
			
			$registros = mysql_num_rows($result);

			if ($registros > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function listarPeriodo() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT anho FROM leopoldo_aguerrevere.periodo");
			/*
			$result = mysql_query("SELECT nombre, direccion, telefono, encargado FROM probuhos_sistema_ice.cliente");
			*/
			mysql_close($strConexion);
			
			return $result;
			
		}
	}
?>