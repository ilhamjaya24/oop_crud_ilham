<?php 
	header("Access-Control-Allow-Origin:*");
	header("Content-Type:application/json;charset=UTF-8");//agar bentuknya seperti array
	header("Access-Control-Allow-Methods:POST, GET, PUT, DELETE");
	header("Access-Control-Max-Age:3600");
	header("Access-Control-Allow-Headers:Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

	//mengambil database connection\
	include '../controller/buku.php';
	$ctrl = new Buku();
	$request = $_SERVER['REQUEST_METHOD'];
	switch ($request) {
		case 'GET' : 
			$ctrl->getJenisData(); //untuk membaca data
			break;
			case 'POST' : //membuat data
			$ctrl->simpanJenis();
			break;

			case 'PUT' : //update
			break;
			case 'DELETE' :
			break;
			default :
			http_response_code(404);
			echo "Request tidak diizinkan";
	}

 ?>