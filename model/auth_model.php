<?php 
class auth_model {

    protected $db;
    function __construct($db){
        $this->db = $db;
    }

    function proses_login($user,$pass)
    {
        // untuk password kita enkrip dengan md5
        $row = $this->db->prepare('SELECT * FROM tbl_user WHERE username=? AND password=md5(?)');
        $row->execute(array($user,$pass));
        $count = $row->rowCount();
        if($count > 0)
        {
            return $hasil = $row->fetch();
        }else{
            return 'gagal';
        }
    }

    // variable $tabel adalah isi dari nama table database yang ingin ditampilkan
function tampil_data(){
        $row = $this->db->prepare("SELECT * FROM tbl_buku");
        $row->execute();
        return $hasil = $row ->fetchAll();}


function getData($id){
        $row = $this->db->prepare("SELECT * FROM tbl_buku WHERE id = $id");
        $row->execute();
        return $hasil = $row->fetch();}

    // variable $tabel adalah isi dari nama table database yang ingin ditampilkan
    // variable where adalah isi kolom tabel yang mau diambil
    // variable id adalah id yang mau di ambil
    
   

}
        