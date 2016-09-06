<?php
	//include('conexion.php');

	/**
	* 
	*/
	class Permisos
	{
		public $id_sub_modulo;
		public $id_rol;
		public $autorizado;

		public $usuario = 'root';
		public $pass = '21091361';
		public $baseDeDatos = 'leopoldo_aguerrevere';
		public $host = 'localhost';
		
		public function __construct($id_sub_modulo = "", $id_rol = "", $autorizado = "") 
	 	{
			$this->id_sub_modulo = $id_sub_modulo;
			$this->id_rol = $id_rol;
			$this->autorizado = $autorizado;
			//$this->model = new Modelo();
		}

		function existenModulos() {
			
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT m.id FROM leopoldo_aguerrevere.modulos AS m JOIN  leopoldo_aguerrevere.sub_modulos AS sm ON m.id = sm.id_modulo");

			mysql_close($strConexion);

			if (mysql_num_rows($result) > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function existenRoles() {

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.rol");

			mysql_close($strConexion);
			
			$registros = mysql_num_rows($result);

			if ($registros > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		function listarPermisos() {

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT sm.descripcion, p.autorizacion, sm.id FROM leopoldo_aguerrevere.permisos AS p JOIN leopoldo_aguerrevere.sub_modulos AS sm ON p.id_sub_modulo = sm.id ORDER BY p.id_sub_modulo");
			
			mysql_close($strConexion);

			return $result;
			
		}

		function listarRol() {

			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT descripcion, id FROM leopoldo_aguerrevere.rol");
			
			mysql_close($strConexion);

			return $result;
		}

		function existenModulos() {
			
			$strConexion = mysql_connect($this->host, $this->usuario, $this->pass);
			mysql_select_db($this->baseDeDatos, $strConexion);

			$result = mysql_query("SELECT id FROM leopoldo_aguerrevere.modulos");

			mysql_close($strConexion);

			$registros = mysql_num_rows($result);

			if ($registros > 0) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
	}
?>