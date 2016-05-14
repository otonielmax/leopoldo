<?php
	include('conexion.php');

	/**
	* 
	*/
	class Periodo
	{
		public $model;

		//public $usuario;
		//public $password;
		public $anho;
		
		function __construct($anho = "") 
	 	{
			$this->anho = $anho;

			$this->model = new Modelo();
		}

		function registrarPeriodo() {
			$this->model->crearConexion();

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.periodo (anho) VALUES ('".$this->anho."')");
			/*
			$result = pg_query($this->model->cnx, "INSERT INTO public.usuario(\"user\", pass, nombre, apellido, telefono, correo) VALUES ('".$this->usuario."','".$this->password."','".$this->nombre."','".$this->apellido."','".$this->telefono."','".$this->correo."')");

			if (!$result) {
				echo "Query: error presenciado";
			}
			*/
			$this->model->cerrarConexion();
			
			return 0;
		}

		function listarPeriodo() {
			$this->model->crearConexion();

			$result = mysql_query("SELECT anho FROM leopoldo_aguerrevere.periodo");
			/*
			$result = mysql_query("SELECT nombre, direccion, telefono, encargado FROM probuhos_sistema_ice.cliente");
			*/
			$this->model->cerrarConexion();

			return $result;
			
		}
	}
?>