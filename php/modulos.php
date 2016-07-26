<?php
	//include('conexion.php');

	/**
	* 
	*/
	class Modulos
	{
		public $nombre;

		public $usuario = 'root';
		public $pass = '';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';
		
		public function __construct($nombre = "") 
	 	{
			$this->nombre = $nombre;
			//$this->model = new Modelo();
		}

		function registrarModulo() {

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.modulos (descripcion, activo) VALUES ('".$this->nombre."', 1)");

			mysql_close($strConexion);
			
			return 0;
		}

		function listarModulos() {

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT descripcion, activo FROM leopoldo_aguerrevere.modulos");
			
			mysql_close($strConexion);

			return $result;
			
		}

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