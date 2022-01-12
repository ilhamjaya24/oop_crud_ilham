<?php

	class Database {
		public function DBConnect(){
			$dbhost = 'localhost';
			// $dbname = 'db_oop_ilham';
			$dbname = 'db_oop_ilham';
			$dbuser = 'root';
			$dbpass = '';

try{
		$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
		$dbConnection->exec("set names utf8");
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $dbConnection;


}
		catch (PDOException $e){
			return 'Connection Failded : ' .$e->getmessage();
		}
	}
}

?>