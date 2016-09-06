<?php
	//include('conexion.php');

	/**
	* 
	*/
	class Modulos
	{
		public $nombre;
		public $activar;

		public $usuario = 'root';
		public $pass = '21091361';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';
		
		public function __construct($nombre = "", $activar = "") 
	 	{
			$this->nombre = $nombre;
			$this->activar = $activar;
			//$this->model = new Modelo();
		}

		function estaRepetido() {
			
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.modulos WHERE descripcion = '".$this->nombre."'");

			mysql_close($strConexion);
			
			$registros = mysql_num_rows($result);

			if ($registros > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function verificarSiExistenModulosActivos() {
			
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.modulos WHERE activo = 1");

			mysql_close($strConexion);
			
			$registros = mysql_num_rows($result);

			if ($registros > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function verificarSiExistenModulos() {
			
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.modulos");

			mysql_close($strConexion);
			
			$registros = mysql_num_rows($result);

			if ($registros > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function registrarModulo() {

			if ($this->estaRepetido()) {
				return 1;
			}
			else {
				$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
				mysql_select_db($this->baseDeDatos, $strConexion);
				
				$result = mysql_query("INSERT INTO leopoldo_aguerrevere.modulos (descripcion, activo) VALUES ('".$this->nombre."', '".$this->activar."')");

				mysql_close($strConexion);
				
				return 0;
			}
			
		}

		function listarModulos() {

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT descripcion, activo, id FROM leopoldo_aguerrevere.modulos");
			
			mysql_close($strConexion);

			return $result;
			
		}
		/*
		function generarVistas() {

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT descripcion FROM leopoldo_aguerrevere.modulos WHERE activo = 1");
			
			mysql_close($strConexion);

			return $result;
			
		}
		*/

		function existenModulos() {
			
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.modulos");

			mysql_close($strConexion);

			$registros = mysql_num_rows($result);

			if ($registros > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
	}
?>