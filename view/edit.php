<?php

include '../controller/buku.php';

$ctrl = new buku();
$id = $_GET['id'];
$dataisi = $ctrl->getData($id);



if ($dataisi['jenis_buku'] == 1) {
    $jb = 'Motivasi';
} else if ($dataisi['jenis_buku'] == 2) {
    $jb = 'Novel';
} else if ($dataisi['jenis_buku'] == 3) {
    $jb = 'Biografi';
} else if ($dataisi['jenis_buku'] == 4) {
    $jb = 'Mata Pelajaran';
} else if ($dataisi['jenis_buku'] == 5) {
    $jb = 'Komik';
} else {
    $jb = 'Kode Bermasalah';
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS-Ilham Jaya Kusumah-MI20B</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>



<body>
<div class="main mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white text-uppercase">
                            <div class="h3 text-center"><b>Edit Data Buku</b></div>
                        </div>
                        <div class="card-body">
                           <form action="<?php $ctrl->editBuku(); ?>" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <small>KODE BUKU</small>
                                            <input type="text" name="kd_buku" id="kd_buku" class="form-control" placeholder="" value="<?= $dataisi['kd_buku'] ?>">
                                        </div>
                                    </div>
                                     <div class="col-lg-6 mt-3" >
                                       <div class="form-group" style="margin-top:-16px;">
                                            <small >JUDUL BUKU</small>
                                            <input type="text" name="judul_buku" id="judul_buku" class="form-control" value="<?= $dataisi['judul_buku'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                       <div class="form-group">
                                            <small>PENULIS</small>
                                            <input type="text" name="penulis" id="penulis" class="form-control" value="<?= $dataisi['penulis'] ?>">
                                        </div>
                                    </div>
                                     <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>PENERBIT</small>
                                            <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= $dataisi['penerbit'] ?>">
                                        </div>
                                    </div>
                                   <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>TAHUN TERBIT</small>
                                            <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" value="<?= $dataisi['tahun_terbit'] ?>">
                                        </div>
                                    </div>
                                     <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>TANGGAL CETAK</small>
                                             <input type="date" name="tanggal_cetak" id="tanggal_cetak" class="form-control" value="<?= $dataisi['tanggal_cetak'] ?>">
                                        </div>
                                    </div>
                                     <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>JUMLAH HALAMAN</small>
                                            <input type="text" name="jml_halaman" id="jml_halaman" class="form-control" value="<?= $dataisi['jml_halaman'] ?>">
                                        </div>
                                    </div>
                                     <div class="col-lg-6 mt-3">
                                     <div class="form-group" style="margin-top:0px;">
                                            <small>JENIS BUKU</small>
                                            <select name="jenis_buku" id="jenis_buku" class="form-control">
                                                <option value="<?= $dataisi['jenis_buku'] ?>"><?= $jb ?></option>
                                                <option value="1">Motivasi</option>
                                                <option value="2">Novel</option>
                                                <option value="3">Biografi</option>
                                                <option value="4">Mata Pelajaran</option>
                                                <option value="5">Komik</option>
                                                 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-lg-6 mt-4" style="margin-right:80px; float: right;">
                    <button type="submit" name="submit" class="btn btn-success text-white" >Update</button>
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
<?php


if (isset($_POST['submit'])) {
     $id = $_GET['id'];
    $kd_buku = $_POST['kd_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $tanggal_cetak = $_POST['tanggal_cetak'];
    $jml_halaman = $_POST['jml_halaman'];
    $jenis_buku = $_POST['jenis_buku'];


    // SQL Update to Databas
    $update_sql = "UPDATE tbl_buku SET 
    kd_buku='$kd_buku', judul_buku='$judul_buku', penulis='$penulis', penerbit='$penerbit',
    tahun_terbit='$tahun_terbit', tanggal_cetak='$tanggal_cetak', jml_halaman='$jml_halaman', 
    jenis_buku='$jenis_buku' WHERE id='$id'";
    $update = $koneksi->query($update_sql);

    if ($update) {
     /*   header("Location:view.php?pesan=success");*/
        ?>
       <script>
          /*  alert('DATA BERHASIL DITAMBAHKAN');*/
            window.location.href = '<?= "view.php?pesan=success&&frm=edit" ?>';
        </script>
    <?php

    } else {
    ?>
        <script>
            alert('Failed update data');
        </script>
<?php
    }
}


?>

</body>

</html>
