<?php 
	
	include '../Database.php';
	include '../model/buku_model.php';

// class surat{
	// function __construct(){
		$db = new Database();
		// $conn = $db->();
		$conn = $db->DBConnect();
		$model = new buku_model($conn);
		//menghilangkan pesan error
	// }
	// function index(){
		$hasil = $model->tampil_data();
	// }
// }
 ?>