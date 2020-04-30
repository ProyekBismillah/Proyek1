<?php
include 'koneksi.php';

// $a = $_POST['id_disposisi'];
$a = $_POST['id_masuk'];
$b = $_POST['tanggal_disposisi'];
$c = $_POST['isi_disposisi'];
$d = $_POST['kepada'];
$e = $_POST['tindak_lanjut'];
$f = $_POST['status'];


$masuk = mysqli_query($kon ,"INSERT INTO disposisi VALUES('','$a','$b','$c','$d','$e','$f')") or die(mysqli_error($kon));

// $path = "gambar/";
// move_uploaded_file($tmp,$path);

if ($masuk) {
	header("location:disposisi.php");
} else {
	echo "<script>alert('Terjadi Kesalahan !!!'); location = 'tambah_disposisi.php'</script>";
}

?>