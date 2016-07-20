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
		public $inicio;
		public $fin;
		
		public $usuario = 'root';
		public $pass = '';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';

		function __construct($anho = "", $inicio = "", $fin = "") 
	 	{
			$this->anho = $anho;
			$this->inicio = $inicio;
			$this->fin = $fin;

			$this->model = new Modelo();
		}

		function registrarPeriodo() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("INSERT INTO leopoldo_aguerrevere.periodo (descripcion, fecha_inicio, fecha_final) VALUES ('".$this->anho."', '".$this->inicio."', '".$this->fin."')");
			/*
			$result = pg_query($this->model->cnx, "INSERT INTO public.usuario(\"user\", pass, nombre, apellido, telefono, correo) VALUES ('".$this->usuario."','".$this->password."','".$this->nombre."','".$this->apellido."','".$this->telefono."','".$this->correo."')");

			if (!$result) {
				echo "Query: error presenciado";
			}
			*/
			mysql_close($strConexion);
			
			return 0;
		}

		function listarPeriodo() {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT descripcion, fecha_inicio, fecha_final, id FROM leopoldo_aguerrevere.periodo");
			/*
			$result = mysql_query("SELECT nombre, direccion, telefono, encargado FROM probuhos_sistema_ice.cliente");
			*/
			mysql_close($strConexion);
			
			return $result;
			
		}

		function eliminarPeriodo($id_periodo) {
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("DELETE FROM leopoldo_aguerrevere.periodo WHERE id = '".$id_periodo."'");
		
			mysql_close($strConexion);
			
			return $result;	
		}
	}
?>