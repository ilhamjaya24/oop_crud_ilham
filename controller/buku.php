<?php 
	
	include '../Database.php';
	include '../model/buku_model.php';

class buku{
	public $model;
	function __construct(){
		$db = new Database();
		$conn = $db->DBConnect();
		$this->model = new buku_model($conn);
		//menghilangkan pesan error
	 }
	 function index()
	 {
	 	//session itu untuk menyimpan data temporay
	 	session_start();
	 	if (!empty($_SESSION)) {
	 		$buku=$this->model->tampil_data();
	 	return $buku;
	 	}else{
	 		header("Location:login.php");
	 	}
	 }
	 			
	
	 function getData($id){
	 	$buku= $this->model->getData($id);
	 	return $buku;
	 }
	 function getJenisData(){
	 	// $jb = $this->model->getJenisData();
	 	// return $jb;

	 	$jenis_buku = $this->model->getJenisData();
		echo json_encode($jenis_buku);
	 }
	 function hapusBuku(){
	 	if (isset($_POST['delete'])) {
	 		$id = $_POST['id'];

	 		$result = $this->model->hapusData($id);

	 		if ($result) {
	 			header("Location:content.php?pesan=success&frm=del");
	 		}else{
	 			header("Location:content.php?pesan=gagal&frm=del");
	 		}
	 	}
	 }

	 function simpanJenis(){
	 	$jenis_buku = $_POST['jenis_buku'];
	 	$data[] = array(
	 		'jenis_buku'		=>$jenis_buku,
	 	);
	 	$result = $this->model->simpanJenisData($data);
	 	if ($result) {
	 		echo "200";
	 	}else{
	 		echo "300";
	 	}
	 }

	 function simpanBuku(){
	 	if (isset($_POST['submit'])) {
	 		$kd_buku =$_POST['kd_buku'];
	 		$judul_buku =$_POST['judul_buku'];
	 		$penulis =$_POST['penulis'];
	 		$penerbit =$_POST['penerbit'];
	 		$tahun_terbit =$_POST['tahun_terbit'];
	 		$tanggal_cetak =$_POST['tanggal_cetak'];
	 		$jml_halaman =$_POST['jml_halaman'];
	 		$jenis_buku = $_POST['jenis_buku'];


// 53-62 merupakan parsing data (pembungkusan data)
	 		$data[] = array (
	 			'kd_buku'		=> $kd_buku,
	 			'judul_buku'	=> $judul_buku,
	 			'penulis'	=> $penulis,
	 			'penerbit'	=> $penerbit,
	 			'tahun_terbit'	=> $tahun_terbit,
	 			'tanggal_cetak'	=> $tanggal_cetak,
	 			'jml_halaman'	=> $jml_halaman,
	 			'jenis_buku'	=> $jenis_buku
	 		);
	 		$result = $this->model->simpanData($data);

	 		if ($result) {
	 			header("Location:content.php?pesan=success&frm=add");
	 		}else{
	 			header("Location:content.php?pesan=gagal&frm=add");
	 		}
	 	}
	 }
	  function updateBuku($id){
	 	if (isset($_POST['update'])) {
	 		// $id = $_GET['id'];
	 		$kd_buku =$_POST['kd_buku'];
	 		$judul_buku =$_POST['judul_buku'];
	 		$penulis =$_POST['penulis'];
	 		$penerbit =$_POST['penerbit'];
	 		$tahun_terbit =$_POST['tahun_terbit'];
	 		$tanggal_cetak =$_POST['tanggal_cetak'];
	 		$jml_halaman =$_POST['jml_halaman'];
	 		$jenis_buku =$_POST['jenis_buku'];

	 		$data = array (
	 			'kd_buku'		=> $kd_buku,
	 			'judul_buku'	=> $judul_buku,
	 			'penulis'	=> $penulis,
	 			'penerbit'	=> $penerbit,
	 			'tahun_terbit'	=> $tahun_terbit,
	 			'tanggal_cetak'	=> $tanggal_cetak,
	 			'jml_halaman'	=> $jml_halaman,
	 			'jenis_buku'	=> $jenis_buku
	 		);
	 		$result = $this->model->updateData($data, $id);
	 		if ($result) {
	 			header("Location:content.php?pesan=success&frm=edit");
	 		}else{
	 			header("Location:content.php?pesan=gagal&frm=edit");
	 		}
	 	}
	 }
	 
	 function logout(){
	 	if(isset($_POST['logout'])){
	 		session_start();
	 		session_destroy();
	 		header("Location:login.php");
	 	}
	 }
 
}
 ?>