<?php
require_once('koneksi.php');

$id = $_GET['id'];
$delete_query = "DELETE FROM tbl_buku WHERE id = $id";
$hasil = $koneksi->query($delete_query);

if ($hasil) {
    header("Location:view.php?pesan=success");
} else {
?>
    <script>
        alert('Failed delete data');
    </script>
<?php
}
