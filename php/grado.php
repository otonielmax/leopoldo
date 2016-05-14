<?php
	include('conexion.php');

	/**
	* 
	*/
	class Grado
	{
		public $model;

		public $descripcion;
		
		function __construct($descripcion = "") 
	 	{
			$this->descripcion = $descripcion;

			$this->model = new Modelo();
		}

		function registrarGrado() {
			$this->model->crearConexion();

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.grado (descripcion) VALUES ('".$this->descripcion."')");

			$this->model->cerrarConexion();
			
			return 0;
		}

		function listarPeriodo() {
			$this->model->crearConexion();

			$result = mysql_query("SELECT descripcion FROM leopoldo_aguerrevere.grado");

			$this->model->cerrarConexion();

			return $result;
			
		}
	}
?>