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
		
		function __construct($lapso = "", $id_lapso = "") 
	 	{
			$this->lapso = $lapso;
			$this->id_lapso = $id_lapso;

			$this->model = new Modelo();
		}

		function registrarLapso() {
			$this->model->crearConexion();

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.lapsos (lapso, id_periodo) VALUES ('".$this->lapso."', '".$this->id_lapso."')");

			$this->model->cerrarConexion();
			
			return 0;
		}

		function listarLapso() {
			$this->model->crearConexion();

			$result = mysql_query("SELECT tl.lapso, tp.anho FROM leopoldo_aguerrevere.lapsos AS tl, leopoldo_aguerrevere.periodo AS tp WHERE tl.id_periodo = tp.id");

			$this->model->cerrarConexion();

			return $result;
			
		}

		function verificarSiExistePeriodo() {
			$this->model->crearConexion();

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.periodo");

			$this->model->cerrarConexion();

			$registros = mysql_num_rows($result);

			if ($registros > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function listarPeriodo() {
			$this->model->crearConexion();

			$result = mysql_query("SELECT id, anho FROM leopoldo_aguerrevere.periodo");

			$this->model->cerrarConexion();

			return $result;
		}
	}
?>