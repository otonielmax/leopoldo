<?php
	include('modulos.php');

	/**
	* 
	*/
	class SubModulos extends Modulos
	{
		public $descripcion;
		public $accion;

		public $usuario = 'root';
		public $pass = '';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';
		
		public function __construct($descripcion = "", $accion = "") 
	 	{
			$this->descripcion = $descripcion;
			$this->accion = $accion;
		}

		function registrarSubModulo() {

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.sub_modulos (descripcion, accion, activo) VALUES ('".$this->descripcion."', '".$this->accion."' 1)");

			mysql_close($strConexion);
			
			return 0;
		}

		function listarSubModulos() {

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT descripcion, accion, activo FROM leopoldo_aguerrevere.sub_modulos");
			
			mysql_close($strConexion);

			return $result;
			
		}

		function existenSubModulos() {
			
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.sub_modulos");

			mysql_close($strConexion);

			$registros = mysql_num_rows($result);

			if ($registros > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function cargarDatosPredefinidos() {
			$datos = array(
				'Modulos' => , 
			);
		}
	}
?>