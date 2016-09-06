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
		public $id_representante;

		public $usuario = 'root';
		public $pass = '21091361';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';
		
		function __construct($id_usuario = "", $id_representante = "") 
	 	{
			$this->id_usuario = $id_usuario;
			$this->id_representante = $id_representante;

			//$this->model = new Modelo();
		}

		function registrarEstudiante() {
			//$this->model->crearConexion();

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);


			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.estudiante (id_usuario, id_representante) VALUES ('".$this->id_usuario."', '".$this->id_representante."')");
			/*
			$result2 = mysql_query("UPDATE leopoldo_aguerrevere.usuario SET id_rol = 2 WHERE id = '".$this->id_usuario."'");
			*/

			mysql_close($strConexion);
			
			return 0;
		}

		function inscribirEstudiante($id_estudiante, $id_grado, $id_periodo) {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.estudiante_inscripcion (id_estudiante, id_grado, id_periodo) VALUES ('".$id_estudiante."', '".$id_grado."', '".$id_periodo."')");
			
			mysql_close($strConexion);
			
			return 0;	
		}

		function registrarEstudianteCompleto($nombre1 = "", $nombre2 = "", $apellido1 = "", $apellido2 = "", $cedula = "", $fecha_nac = "", $direccion = "", $telefono1 = "", $telefono2 = "", $correo = "", $id_representante = "") {

			//$this->model = NULL;

			$this->user = new Usuario($nombre1, $nombre2, $apellido1, $apellido2, $cedula, $fecha_nac, $direccion, $telefono1, $telefono2, $correo);
			$this->user->registrarUsuario();

			$this->id_usuario = $this->buscarUsuario($cedula);
			$this->id_representante = $id_representante;
			
			$this->registrarEstudiante();

			/*
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.estudiante (id_usuario) VALUES ('".$this->id_usuario."')");
			
			mysql_close($strConexion);
			*/

			if ($this->verificarSiRolExiste()) {
				$rol = $this->getIdRol();
				$row = mysql_fetch_row($rol);
				$id_rol = $row[0];

				$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
				mysql_select_db($this->baseDeDatos, $strConexion);

				$result2 = mysql_query("UPDATE leopoldo_aguerrevere.usuario SET id_rol = '".$id_rol."' WHERE id = '".$this->id_usuario."'");
			}
			else {
				$this->crearRol();
				$rol = $this->getIdRol();
				$row = mysql_fetch_row($rol);
				$id_rol = $row[0];

				$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
				mysql_select_db($this->baseDeDatos, $strConexion);

				$result2 = mysql_query("UPDATE leopoldo_aguerrevere.usuario SET id_rol = '".$id_rol."' WHERE id = '".$this->id_usuario."'");				
			}

			mysql_close($strConexion);

			return 0;
		}


		function existenRepresentantes() {
			//$this->model->crearConexion();
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.representante");

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

		function listarRepresentantes() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT r.id, u.apellido1, u.nombre1 FROM leopoldo_aguerrevere.representante AS r JOIN leopoldo_aguerrevere.usuario AS u ON u.id = r.id_usuario ORDER BY u.apellido1");

			mysql_close($strConexion);

			return $result;
			
		}

		function verificarSiRolExiste() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);


			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.rol WHERE descripcion = 'Estudiante'");

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

		function crearRol() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.rol (descripcion) VALUES ('Estudiante')");

			mysql_close($strConexion);

			return $result;		
		}

		function getIdRol() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.rol WHERE descripcion = 'Estudiante'");

			mysql_close($strConexion);

			return $result;
		}

		/*
		function listarEstudiante() {
			//$this->model->crearConexion();

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);


			$result = mysql_query("SELECT nombre1, nombre2, apellido1, apellido2, cedula, fecha_nac, direccion FROM leopoldo_aguerrevere.usuario U, leopoldo_aguerrevere.Estudiante E WHERE U.id = E.id_usuario");
			mysql_close($strConexion);

			return $result;
		}
		*/

		function validarSiExtudianteExiste($cedula) {
			//$this->model->crearConexion();
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);


			$result = mysql_query("SELECT id_rol FROM leopoldo_aguerrevere.usuario WHERE cedula = '".$cedula."'");

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

		function buscarEstudiante($id_usuario) {
			//$this->model->crearConexion();
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.estudiante WHERE id_usuario = '".$id_usuario."'");

			//$this->model->cerrarConexion();
			mysql_close($strConexion);

			$us = mysql_fetch_row($result);

			return $us[0];
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

			$us = mysql_fetch_row($result);

			return $us[0];
		}

		function listarGrado() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id, descripcion FROM leopoldo_aguerrevere.grado");

			mysql_close($strConexion);

			return $result;
			
		}

		function existenGrados() {
			//$this->model->crearConexion();
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.grado");

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

		function existenEstudiantes() {
			//$this->model->crearConexion();
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.estudiante");

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

		function listarEstudiante() { 
			//$this->model->crearConexion();
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT e.id, u.nombre1, u.apellido1 FROM leopoldo_aguerrevere.usuario AS u JOIN leopoldo_aguerrevere.estudiante AS e ON u.id = e.id_usuario");

			//$this->model->cerrarConexion();
			mysql_close($strConexion);

			return $result;
		}
	}
?>