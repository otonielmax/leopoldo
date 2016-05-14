<?php
	include('conexion.php');

	/**
	* 
	*/
	class Rol
	{
		public $model;

		//public $usuario;
		//public $password;
		public $descripcion;
		
		function __construct($descripcion = "") 
	 	{
			$this->descripcion = $descripcion;

			$this->model = new Modelo();
		}

		function registrarRol() {
			$this->model->crearConexion();

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.rol (descripcion) VALUES ('".$this->descripcion."')");
			/*
			$result = pg_query($this->model->cnx, "INSERT INTO public.usuario(\"user\", pass, nombre, apellido, telefono, correo) VALUES ('".$this->usuario."','".$this->password."','".$this->nombre."','".$this->apellido."','".$this->telefono."','".$this->correo."')");

			if (!$result) {
				echo "Query: error presenciado";
			}
			*/
			$this->model->cerrarConexion();
			
			return 0;
		}

		function listarRol() {
			$this->model->crearConexion();

			$result = mysql_query("SELECT descripcion FROM leopoldo_aguerrevere.rol");
			/*
			$result = mysql_query("SELECT nombre, direccion, telefono, encargado FROM probuhos_sistema_ice.cliente");
			*/
			$this->model->cerrarConexion();

			return $result;
			
		}
	}
?>