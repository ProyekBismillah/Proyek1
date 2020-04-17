<?php
include 'koneksi.php';
$a = $_GET['no'];

mysqli_query($kon, "DELETE FROM surat_keluar WHERE id_keluar='$a'");

header("location: suratKeluarSA.php");
?>