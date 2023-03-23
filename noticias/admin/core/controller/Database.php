<?php
class Database {
	public static $db;
	public static $con;

	function __construct(){
		$this->user="fenestor_wp";$this->pass="Fenest.Ucus@2020";$this->host="Fenest.org";$this->ddbb="fenestor_2wp";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
