<?php
	//include('conexion.php');
	include('usuario.php');
	
	/**
	* 
	*/
	class Estudiante
	{
		public $model;
		public $user;

		public $id_usuario;

		public $usuario = 'root';
		public $pass = '21091361';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';
		
		function __construct($id_usuario = "") 
	 	{
			$this->id_usuario = $id_usuario;

			//$this->model = new Modelo();
		}

		function registrarEstudiante() {
			//$this->model->crearConexion();

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);


			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.estudiante (id_usuario) VALUES ('".$this->id_usuario."')");
			$result2 = mysql_query("UPDATE leopoldo_aguerrevere.usuario SET id_rol = 2 WHERE id = '".$this->id_usuario."'");
		
			//$this->model->cerrarConexion();

			mysql_close($strConexion);
			
			return 0;
		}

		function registrarEstudianteCompleto($nombre1 = "", $nombre2 = "", $apellido1 = "", $apellido2 = "", $cedula = "", $fecha_nac = "", $direccion = "") {

			//$this->model = NULL;

			$this->user = new Usuario($nombre1, $nombre2, $apellido1, $apellido2, $cedula, $fecha_nac, $direccion);
			$this->user->registrarUsuario();
			//$this->user->model = NULL;

			$id_usuario = $this->buscarUsuario($cedula);

			//$this->model = new Modelo();
			//$this->model->crearConexion();

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);


			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.estudiante (id_usuario) VALUES ('".$this->id_usuario."')");
			$result2 = mysql_query("UPDATE leopoldo_aguerrevere.usuario SET id_rol = 2 WHERE id = '".$this->id_usuario."'");
		
			//$this->model->cerrarConexion();

			mysql_close($strConexion);

			return 0;
		}

		function verificarSiRolExiste() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);


			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.rol WHERE id = 2");

			//$this->model->cerrarConexion();
			mysql_close($strConexion);

			$num = mysql_num_rows($result);

			if ($num > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}

		}

		function listarEstudiante() {
			//$this->model->crearConexion();

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);


			$result = mysql_query("SELECT nombre1, nombre2, apellido1, apellido2, cedula, fecha_nac, direccion FROM leopoldo_aguerrevere.usuario U, leopoldo_aguerrevere.Estudiante E WHERE U.id = E.id_usuario");
			/*
			$result = mysql_query("SELECT nombre, direccion, telefono, encargado FROM probuhos_sistema_ice.cliente");
			*/
			//$this->model->cerrarConexion();
			mysql_close($strConexion);

			return $result;
			
		}

		function validarSiExtudianteExiste($id_usuario) {
			//$this->model->crearConexion();
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);


			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.estudiante WHERE id_usuario = '".$id_usuario."'");

			//$this->model->cerrarConexion();
			mysql_close($strConexion);

			$num = mysql_num_rows($result);

			if ($num > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function existenUsuarios() {
			//$this->model->crearConexion();
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.usuario");

			//$this->model->cerrarConexion();
			mysql_close($strConexion);

			$registros = mysql_num_rows($result);

			if ($registros > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function listarUsuarios() { 
			//$this->model->crearConexion();
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id, nombre1, apellido1 FROM leopoldo_aguerrevere.usuario WHERE id_rol IS NULL");

			//$this->model->cerrarConexion();
			mysql_close($strConexion);

			return $result;
		}

		function buscarUsuario($cedula) {
			//$this->model->crearConexion();
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.usuario WHERE cedula = '".$cedula."'");

			//$this->model->cerrarConexion();
			mysql_close($strConexion);

			return $result;
		}
	}
?>