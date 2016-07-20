<?php
	//include('conexion.php');

	/**
	* 
	*/
	class Usuario
	{
		//public $model;

		//public $usuario;
		//public $password;
		public $nombre1;
		public $nombre2;
		public $apellido1;
		public $apellido2;
		public $fecha_nac;
		public $direccion;
		public $cedula;
		public $password;

		public $usuario = 'root';
		public $pass = '';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';
		
		public function __construct($nombre1 = "", $nombre2 = "", $apellido1 = "", $apellido2 = "", $cedula = "", $fecha_nac = "", $direccion = "", $password = "") 
	 	{
			$this->nombre1 = $nombre1;
			$this->nombre2 = $nombre2;
			$this->apellido1 = $apellido1;
			$this->apellido2 = $apellido2;
			$this->fecha_nac = $fecha_nac;
			$this->direccion = $direccion;
			$this->cedula = $cedula;
			$this->password = $password;

			//$this->model = new Modelo();
		}

		function registrarUsuario() {
			//$this->model->crearConexion();

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.usuario (nombre1, nombre2, apellido1, apellido2, cedula, fecha_nac, direccion) VALUES ('".$this->nombre1."','".$this->nombre2."','".$this->apellido1."','".$this->apellido2."','".$this->cedula."','".$this->fecha_nac."','".$this->direccion."')");

			//$this->model->cerrarConexion();

			mysql_close($strConexion);
			
			return 0;
		}

		function listarUsuario() {
			//$this->model->crearConexion();

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT nombre1, nombre2, apellido1, apellido2, cedula, fecha_nac, direccion FROM leopoldo_aguerrevere.usuario");
			/*
			$result = mysql_query("SELECT nombre, direccion, telefono, encargado FROM probuhos_sistema_ice.cliente");
			*/
			//$this->model->cerrarConexion();
			mysql_close($strConexion);

			return $result;
			
		}

		function validarUsuario($cedula, $pass) {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT u.id, u.pass, u.activo, u.nombre1, u.apellido1, r.descripcion FROM leopoldo_aguerrevere.usuario AS u JOIN leopoldo_aguerrevere.rol AS r  ON u.id_rol = r.id WHERE cedula = '".$cedula."'");

			mysql_close($strConexion);

			return $result;				
		}
	}
?>