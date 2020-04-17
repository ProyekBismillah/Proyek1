<?php
include 'koneksi.php';
$a = $_GET['no'];

mysqli_query($kon, "DELETE FROM user WHERE id_user='$a'");

header("location: dataAdmin.php");
?>