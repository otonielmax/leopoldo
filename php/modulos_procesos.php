<?php
	include('modulos.php');

	/**
	* 
	*/
	class SubModulos extends Modulos
	{
		public $descripcion;
		public $accion;
		public $activo;
		public $id_modulo;

		public $usuario = 'root';
		public $pass = '21091361';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';
		
		public function __construct($descripcion = "", $accion = "", $activo = "", $id_modulo = "") 
	 	{
			$this->descripcion = $descripcion;
			$this->accion = $accion;
			$this->activo = $activo;
			$this->id_modulo = $id_modulo;
		}

		function estaRepetido() {
			
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.sub_modulos WHERE accion = '".$this->accion."' AND id_modulo = ".$this->id_modulo."");

			mysql_close($strConexion);
			
			$registros = mysql_num_rows($result);

			if ($registros > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function registrarSubModulo() {
			if ($this->estaRepetido()) {
				return 1;
			}
			else {
				$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
				mysql_select_db($this->baseDeDatos, $strConexion);

				$result = mysql_query("INSERT INTO leopoldo_aguerrevere.sub_modulos (descripcion, accion, activo, id_modulo) VALUES ('".$this->descripcion."', '".$this->accion."', 1, '".$this->id_modulo."')");

				mysql_close($strConexion);
			
				return 0;
			}
		}

		function listarSubModulos() {

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT descripcion, accion, activo FROM leopoldo_aguerrevere.sub_modulos");
			
			mysql_close($strConexion);

			return $result;
			
		}

		function generarVistas() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT m.descripcion, sm.descripcion, sm.accion FROM leopoldo_aguerrevere.sub_modulos AS sm JOIN leopoldo_aguerrevere.modulos AS m ON sm.id_modulo = m.id WHERE m.activo = 1");
			
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
		/*
		function cargarDatosPredefinidos() {
			$datos = array(
				'Modulos' => , 
			);
		}
		*/
	}
?>