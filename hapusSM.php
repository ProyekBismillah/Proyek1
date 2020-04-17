<?php
include 'koneksi.php';
$a = $_GET['no'];

mysqli_query($kon, "DELETE FROM surat_masuk WHERE id_masuk='$a'");

header("location: suratMasuk.php");
?>