<?php

include '../controller/buku.php';
$ctrl = new buku();
$id = $_GET['id'];
$delete_query = "DELETE FROM tbl_buku WHERE id = $id";


$result = $ctrl->hapusBuku($delete_query);

if ($result) {
header("Location:content.php?pesan=success");
} else {
?>
    <script>
        alert('Failed delete data');
    </script>
<?php


}
