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

	function getData($id){
		$row = $this->db->prepare("SELECT * FROM tbl_buku WHERE id = $id");
		$row->execute();
		return $hasil = $row->fetch();
	}
	function getJenisData(){
		$row = $this->db->prepare("SELECT * FROM tbl_jenis_buku");
		$row->execute();
		return $hasil = $row->fetchAll();
	}
	function simpanData($data){
		$rowSQL = array();
		$toBind = array();
		$columnNames = array_keys($data[0]);

		foreach ($data as $arrayIndex => $row) {
			$params = array();
			foreach ($row as $columnName => $columnValue) {
				$param = ":" . $columnName . $arrayIndex;
				$params[] = $param;
				$toBind[$param] = $columnName;
			}
			$rowsSQL[] = "(" . implode(" ", $params) . ")";
		}
		$sql = "INSERT INTO tbl_buku(". implode(",", $columnNames) .") VALUES ".implode(" ", $rowsSQL);
		$row = $this->db->prepare($sql);

		foreach ($toBind as $param => $val){
			$row ->bindValues($param, $val);
		}
	}
	function updateData($data, $id){
		$setPart = array();
		foreach ($data as $key => $value){
			$setPart[] = $key."=:".$key;
		}
		$sql = "UPDATE tbl_buku SET ".implode(' ', $setPart)."WHERE id = :id";
		$row = $this->db->prepare($sql);
		$row -> bindValue(':id', $id); //where
		foreach ($data as $param => $val) {
			$row ->bindValue($param, $val);
		}
		return $row ->execute();
	}
	function hapusData($id){
		$sql = "DELETE FROM tbl_buku where id = ?";
		$row = $this->db->prepare($sql);
		return $row -> execute(array($id));
	}
}

 ?>