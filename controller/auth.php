<?php 

	include '../Database.php';
	include '../model/auth_model.php';


	class auth {
			function __construct(){
				$db = new Database();
			$conn = $db->DBConnect();
			$this->model = new auth_model($conn);
			//script diatas menghilangkan pesan error
			}
		
	function index(){
		$buku=$this->model->tampil_data();
	 	return $buku;
	 }

	 function login(){
	 	if (isset($_POST['login']))
	 	 {
	 		$user = strip_tags($_POST['user']);
	 		$pass = strip_tags($_POST['pass']);
	 		$result = $this->model->proses_login($user, $pass);

	 	if ($result == 'gagal') {
	 		header("Location: login.php");
	      }else{
	      	session_start();
	      	$_SESSION['nama_pengguna'] = $result['nama_pengguna'];
	      	$_SESSION['username'] = $result['username'];
	      	header("Location:content.php?pesan=success&frm=login");
	      }
	 	}
	  }
	  function logout(){
	  	session_start();
	  	session_destroy();
	  	header("Location:login.php");
	  }
	}


 ?>