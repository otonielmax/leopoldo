<?php
	include('conexion.php');

	/**
	* 
	*/
	class Estudiante
	{
		public $model;

		//public $usuario;
		//public $password;
		public $id_usuario;
		
		function __construct($id_usuario = "") 
	 	{
			$this->id_usuario = $id_usuario;

			$this->model = new Modelo();
		}

		function registrarEstudiante() {
			$this->model->crearConexion();

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.estudiante (id_usuario) VALUES ('".$this->id_usuario."')");
			$result2 = mysql_query("UPDATE leopoldo_aguerrevere.usuario SET id_rol = 2 WHERE id = '".$this->id_usuario."'");
		
			$this->model->cerrarConexion();
			
			return 0;
		}

		function listarEstudiante() {
			$this->model->crearConexion();

			$result = mysql_query("SELECT nombre1, nombre2, apellido1, apellido2, cedula, fecha_nac, direccion FROM leopoldo_aguerrevere.usuario U, leopoldo_aguerrevere.Estudiante E WHERE U.id = E.id_usuario");
			/*
			$result = mysql_query("SELECT nombre, direccion, telefono, encargado FROM probuhos_sistema_ice.cliente");
			*/
			$this->model->cerrarConexion();

			return $result;
			
		}

		function validarSiExtudianteExiste($id_usuario) {
			$this->model->crearConexion();

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.estudiante WHERE id_usuario = '".$id_usuario."'");

			$this->model->cerrarConexion();

			$num = mysql_num_rows($result);

			if ($num > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function existenUsuarios() {
			$this->model->crearConexion();

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.usuario");

			$this->model->cerrarConexion();

			$registros = mysql_num_rows($result);

			if ($registros > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function listarUsuarios() { 
			$this->model->crearConexion();

			$result = mysql_query("SELECT id, nombre1, apellido1 FROM leopoldo_aguerrevere.usuario WHERE id_rol IS NULL");

			$this->model->cerrarConexion();

			return $result;
		}
	}
?>