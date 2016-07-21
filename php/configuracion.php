<?php
	include('conexion.php');

	/**
	* 
	*/
	class Configuracion
	{
		public $model;

		// Datos para configuracion de periodo
		public $grados;
		public $lapsos;

		public $usuario = 'root';
		public $pass = '21091361';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';
		
		function __construct($grados = "", $lapsos = "") 
	 	{
			$this->grados = $grados;
			$this->lapsos = $lapsos;

			$this->model = new Modelo();
		}

		function crearConfiguracion() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.configuracion (grados, lapsos) VALUES ('".$this->grados."', '".$this->lapsos."')");

			mysql_close($strConexion);
			
			return 0;
		}

		function verConfiguraciones() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT grados, lapsos FROM leopoldo_aguerrevere.configuracion");
			/*
			$result = mysql_query("SELECT nombre, direccion, telefono, encargado FROM probuhos_sistema_ice.cliente");
			*/
			mysql_close($strConexion);

			return $result;
			
		}

		function listarGrado() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id, descripcion FROM leopoldo_aguerrevere.grado");

			mysql_close($strConexion);

			return $result;
			
		}

		function listarLapso() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id, lapso FROM leopoldo_aguerrevere.lapsos");

			mysql_close($strConexion);

			return $result;
			
		}

		function listarRol() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id, descripcion FROM leopoldo_aguerrevere.rol");
			/*
			$result = mysql_query("SELECT nombre, direccion, telefono, encargado FROM probuhos_sistema_ice.cliente");
			*/
			mysql_close($strConexion);

			return $result;
			
		}
	}
?>