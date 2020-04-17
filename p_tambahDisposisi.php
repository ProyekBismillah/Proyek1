<?php
include 'koneksi.php';

$a = $_POST['id_disposisi'];
$b = $_POST['tanggal_disposisi'];
$c = $_POST['isi_disposisi'];
$d = $_POST['kepada'];
$e = $_POST['tindak_lanjut'];
$f = $_POST['status'];
$g = $_POST['id_masuk'];

$masuk = mysqli_query($kon ,"INSERT INTO surat_masuk VALUES('','$g','$a','$b','$c','$d','$e','$f')") or die(mysqli_error($kon));


// $path = "gambar/";
// move_uploaded_file($tmp,$path);

if ($masuk) {
	header("location:suratMasuk.php");
} else {
	echo "<script>alert('Terjadi Kesalahan !!!'); location = 'tambah_disposisi.php'</script>";
}

?>