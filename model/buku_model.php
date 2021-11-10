<?php 

class buku_model{
	protected $db;
	function __construct($db){
		$this->db=$db;
	}
	function tampil_data(){
		$row = $this->db->prepare("SELECT * FROM tbl_buku");
		$row->execute();
		return $hasil = $row ->fetchAll();
	}

}

 ?>