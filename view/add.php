<?php

include '../controller/buku.php';

$ctrl = new buku();
// $dataisi = $ctrl->getJenisData();


// $sql = "SELECT * FROM tbl_jenis_buku";
// $hasil = $koneksi->query($sql);
// $dataisi = $hasil->fetch_assoc();

// if ($dataisi['jenis_buku'] == 1) {
//     $jb = 'Motivasi';
// } else if ($dataisi['jenis_buku'] == 2) {
//     $jb = 'Novel';
// } else if ($dataisi['jenis_buku'] == 3) {
//     $jb = 'Biografi';
// } else if ($dataisi['jenis_buku'] == 4) {
//     $jb = 'Mata Pelajaran';
// } else if ($dataisi['jenis_buku'] == 5) {
//     $jb = 'Komik';
// } else {
//     $jb = 'Kode Bermasalah';
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS-Ilham Jaya Kusumah-MI20B</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>

<body>
    <div class="main mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white text-uppercase">
                            <div class="h3 text-center"><b>Tambah Data Buku</b></div>
                        </div>
                        <div class="card-body">
                            <form action="<?php $ctrl->simpanBuku(); ?>" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <small>KODE BUKU</small>
                                            <input type="text" name="kd_buku" id="kd_buku" class="form-control" placeholder="Masukan Kode Buku" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group" style="margin-top:-15px;">
                                            <small>JUDUL BUKU</small>
                                            <input type="text" name="judul_buku" id="judul_buku" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>PENULIS </small>
                                            <input type="text" name="penulis" id="penulis" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>PENERBIT</small>
                                            <input type="text" name="penerbit" id="penerbit" class="form-control" required>
                                        </div>
                                    </div>
                                     <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>TAHUN TERBIT</small>
                                            <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>TANGGAL CETAK</small>
                                            <input type="date" name="tanggal_cetak" id="tanggal_cetak" class="form-control" required>
                                        </div>
                                    </div>
                                     <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>JUMLAH HALAMAN</small>
                                            <input type="text" name="jml_halaman" id="jml_halaman" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group" style="margin-top: 15px;">
                                            <small>JENIS BUKU</small>
                                           <select name="jenis_buku" id="jenis_buku" class="form-control">

                                                <option>Pilih...</option>

                                                <!-- <option value="1">Motivasi</option>
                                                <option value="2">Novel</option>
                                                <option value="3">Biografi</option>
                                                <option value="4">Mata Pelajaran</option>
                                                <option value="5">Komik</option>
                                                  -->
                                            </select>
                                        </div>

<div class="example-modal">
<div id="ModalJenis" class="modal fade" role="dialog" style="display: none;">      
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
        <form class="row g-3" id="formJenisSurat" >  
      <div class="modal-header">
        <h5 class="modal-title">Add Jenis Buku</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="jenis_buku" class=" form-label">Pembuat Buku </label>
        <input type="text" class="form-control" id="jenis_buku" name="jenis_buku" placeholder="Buku.....">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnsimpan">Simpan</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div></div></div>
                                       <a href="" style="margin-right: 10px; float: right; margin-top: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
</a>
</svg>
                                    </div></div>
                                    <div class="col-lg-6 mt-4" style="margin-right:85px; float: right;">
                     <button type="submit" name="submit" class="btn btn-success text-white">Tambah</button>
                                        <a href="content.php" class="btn btn-warning">Cancel</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <script src="assets/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!-- Proses Add Data -->


</body>

<script type="text/javascript">
    
    $(document).ready(function(){
        // alert('test');
        show_jenis();//memanggil function yang ada di bawah ini

        function show_jenis(){
            $.ajax({
                type    : 'GET',
                url     : 'api.php',
                async   : false,
                dataType    : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no;
                    for(i=0; i<data.length; i++){
                        no = i + 1;
                        html +=
                        '<option value="'+data[i].id_js+'">'+data[i].jenis_buku+'</option>';
                    } // akhir looping
                    $('#jenis_buku').html(html);
                }
            });
        }
    });


</script>


</html>