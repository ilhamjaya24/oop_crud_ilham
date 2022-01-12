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
	 	 	session_start();
	 	 	if ($_POST["code"] != $_SESSION["code"] OR $_SESSION["code"]=='')
	 	 	{
	 	 	echo "Ilham said : Captcha lepat lurr";
	 	 	}else{
	 		$user = strip_tags($_POST['user']);
	 		$pass = strip_tags($_POST['pass']);
	 		$result = $this->model->proses_login($user, $pass);

	 	if ($result == 'gagal') {
	 		header("Location: login.php");
	      }else{
	      	// session_start();
	      	$_SESSION['nama_pengguna'] = $result['nama_pengguna'];
	      	$_SESSION['username'] = $result['username'];
	      	header("Location:content.php?pesan=success&frm=login");
	      }
	 	}
	   }
	 }
	  function logout(){
	  	session_start();
	  	session_destroy();
	  	header("Location:login.php");
	  }
	   function acakCaptcha() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
   
//untuk menyatakan $pass sebagai array
    $pass = array(); 
 
   //masukkan -2 dalam string length
    $panjangAlpha = strlen($alphabet) - 2; 
    for ($i = 0; $i < 5; $i++) {
        $n = rand(0, $panjangAlpha);
        $pass[] = $alphabet[$n];
    }
 
   //ubah array menjadi string
    return implode($pass); 
}
	}


 ?>