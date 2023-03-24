<?php
class Database {
	public static $db;
	public static $con;

	function __construct(){
		$this->user="root";
		$this->pass="";
		$this->host="localhost";
		$this->ddbb="fenestor_2wp";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
			if(self::$con->connect_error) {
				// Mostrar mensaje Swal de error si no se puede conectar a la base de datos
				echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.6/dist/sweetalert2.all.min.js"></script>';
				echo '<script>Swal.fire({
						icon: "error",
						title: "Error",
						text: "No se pudo conectar a la base de datos",
						footer: "<a href>¿Necesitas ayuda?</a>"
					})</script>';
				die();
			}
		}
		return self::$con;
	}
}
?>