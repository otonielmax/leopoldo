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

		public $usuario = 'root';
		public $pass = '';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';
		
		function __construct($descripcion = "") 
	 	{
			$this->descripcion = $descripcion;

			$this->model = new Modelo();
		}

		function registrarRol() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.rol (descripcion) VALUES ('".$this->descripcion."')");
			/*
			$result = pg_query($this->model->cnx, "INSERT INTO public.usuario(\"user\", pass, nombre, apellido, telefono, correo) VALUES ('".$this->usuario."','".$this->password."','".$this->nombre."','".$this->apellido."','".$this->telefono."','".$this->correo."')");

			if (!$result) {
				echo "Query: error presenciado";
			}
			*/
			mysql_close($strConexion);
			
			return 0;
		}

		function listarRol() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT descripcion FROM leopoldo_aguerrevere.rol");
			/*
			$result = mysql_query("SELECT nombre, direccion, telefono, encargado FROM probuhos_sistema_ice.cliente");
			*/
			mysql_close($strConexion);

			return $result;
			
		}
	}
?>