<?php
include 'koneksi.php';
$a = $_GET['no'];

mysqli_query($kon, "DELETE FROM disposisi WHERE id_disposisi ='$a'");

header("location: disposisi.php");
?>