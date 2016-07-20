<?php
	include('conexion.php');

	/**
	* 
	*/
	class Lapso
	{
		public $model;

		//public $usuario;
		//public $password;
		public $lapso;
		public $id_lapso;

		public $usuario = 'root';
		public $pass = '';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';
		
		function __construct($lapso = "", $id_lapso = "") 
	 	{
			$this->lapso = $lapso;
			$this->id_lapso = $id_lapso;

			$this->model = new Modelo();
		}

		function registrarLapso() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.lapsos (lapso, id_periodo) VALUES ('".$this->lapso."', '".$this->id_lapso."')");

			mysql_close($strConexion);

			return 0;
		}

		function listarLapso() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT tl.lapso, tp.anho FROM leopoldo_aguerrevere.lapsos AS tl, leopoldo_aguerrevere.periodo AS tp WHERE tl.id_periodo = tp.id");

			mysql_close($strConexion);

			return $result;
			
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
			
			$result = mysql_query("SELECT id, anho FROM leopoldo_aguerrevere.periodo");

			mysql_close($strConexion);

			return $result;
		}
	}
?>