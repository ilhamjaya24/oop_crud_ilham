<?php

include '../controller/buku.php';
$ctrl = new buku();
$id = $_GET['id'];
$delete_query = "DELETE * FROM tbl_buku WHERE id = $id";
$hasil = $ctrl->hapusBuku($delete_query);

if ($hasil) {
header("Location:content.php?pesan=success&frm=del");
} else {
?>
    <script>
        alert('Failed delete data');
    </script>
<?php

}
