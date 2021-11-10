<?php

	class database {
		public function DBConenct(){
			$dbhost = 'localhost';
			$dbname = 'db_oop_ilham';
			$dbuser = 'root';
			$dbpass = '';

try{
		$dbConnection = new PDO ("mysql:host=$dbhost;dbname=$dbname;", $dbuser, $dbpass);
		$dbConnection->exec("set names utf8");
		$dbConnection->setAttribute(PDO::ATTER_ERRMODEM,PDO::ERRMODE_EXCEPTION);
		return $dbConnection;


}
		catch (PDOException $e){
			return 'Connection Failded : ' .$e->getmessage();
		}
	}
}

?>