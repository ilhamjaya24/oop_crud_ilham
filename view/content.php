<?php 

include '../controller/buku.php';
$ctrl = new buku();
$buku = $ctrl->index();

 ?>

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Tilas UTS-Ilham Jaya Kusumah-MI20B</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<div class="modal" tabindex="-1" id="logoutmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= $ctrl->logout() ?>" method="post"> 
           <div class="modal-body">
        <p>Apakah anda yakin ingin keluar?</p>
      </div>
           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="logout">Logout</button>
      </div>
      </form>
    </div>
  </div>
</div>

   <div class="main mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#logoutmodal">
Logout
</button>
</div>
</div></div></div></div>
 <?php 

            if (isset($_GET['pesan'])&&isset($_GET['frm'])) {
                $pesan = $_GET['pesan'];
                $frm = $_GET['frm'];                     
            }else{
                $pesan = "";
                $frm = "";
            }
             


 if ($pesan == 'success' && $frm == 'del'){  
            
 ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> Selamat Anda Berhasil Menghapus
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
            } else if($pesan=='success' && $frm == 'add'){
?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> Anda Berhasil Menambahkan Data Buku
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
            }else if($pesan=='success' && $frm == 'login'){

?>

        <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> Anda Berhasil Login
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
            }else if($pesan=='success' && $frm == 'edit'){

?>


<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Berhasil!</strong> Anda Berhasil Merubah Data Buku
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
            }
?>
 
            <div class="row">
                <div class="col-lg-15">
                    <div class="card">
              <div class="card-header bg-white text-uppercase">
           
                    <div class="h3 text-center"><marquee scrollamount= "10" ><b>Selamat Datang di Toko Buku IlhamStore  </b></marquee></div>

                            <div class="h2 text-center"><b>Data Buku</b></div>
                            <div class="float-end">
                               
                                <a href="add.php" style="margin-left: -735px; text-shadow: black;" class="badge bg-success py-3 px-2 small text-white fw-bold text-decoration-none">Tambah Data Buku</a>
                               <!--   <a class="btn btn-light action-button" role="button" href="#" data-bs-toggle="modal" data-ds-target="#logout">Logout</a> -->
                                <br> 
                            </div>
                        </div>
                      

   <!--    <p>Log-out icon on a styled link button:
        <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
      </p> --> 
    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table w-100" >
                                    <thead class="table-dark">
                                        <tr align="center">
                                            <th>KODE BUKU</th>
                                            <th>JUDUL BUKU</th>
                                            <th>PENULIS</th>
                                            <th>PENERBIT</th>
                                            <th>TAHUN TERBIT</th>
                                            <th>TANGGAL CETAK</th>
                                            <th>JML HALAMAN</th>
                                            <th>JENIS BUKU</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($buku as $data) { ?>
                                            <?php
                                            if ($data['jenis_buku'] == 1) {
                                                $jb = 'Motivasi';
                                            } else if ($data['jenis_buku'] == 2) {
                                                $jb = 'Novel';
                                            } else if ($data['jenis_buku'] == 3) {
                                                $jb = 'Biografi';
                                            } else if ($data['jenis_buku'] == 4) {
                                                $jb = 'Mata Pelajaran';
                                            } else if ($data['jenis_buku'] == 5) {
                                                $jb = 'Komik';
                                            } else {
                                                $jb = 'Kodingan mu bermasalah!';
                                            }
                                            ?>
                                            <tr>
                                                <td align="center" class="table-info"><?= $data['kd_buku'] ?></td>   
                                                <td align="center"class="table-success" ><?= $data['judul_buku'] ?></td>
                                                <td align="center" class="table-info"><?= $data['penulis'] ?></td>
                                                <td align="center" class="table-success"><?= $data['penerbit'] ?></td>
                                              <td align="center" class="table-info"><?= $data['tahun_terbit'] ?></td>
                                 <td align="center" class="table-success"><?= $data['tanggal_cetak'] ?></td>
                             <td align="center" class="table-info"><?= $data['jml_halaman'] ?></td>
                             <td align="center" class="table-success"><?= $jb ?></td>
                                                <!-- <td><a href="edit.php?id=<?php echo $data['id'];?>">Edit</td>
                                              <td><a href="#" data-bs-toggle="modal" data-bs-target="#deletesurat<?php echo $data['id']; ?>">Delete</a></td> -->

                                                <td>
                          <a href="edit.php?id=<?= $data['id'] ?>" class="badge bg-warning text-dark p-2 text-decoration-none">Edit</a>

                               <a href="delete.php?id=<?= $data['id'] ?>" class="badge bg-warning text-dark p-2 text-decoration-none">Delete</a>

                         <!--  <a href="#" class="badge bg-danger p-2 text-white text-decoration-none" data-target="#deletesurat<?= $data['id'] ?>">Delete</a>
                                                 -->
                                           
                                                    
                                                
          </td>
     </tr>
                                         
      </div>
    </div>
    </div>  
    </div>       
  </div>
</div>
               <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>