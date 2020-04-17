<?php
include 'koneksi.php';
$a = $_POST['tanggal_surat'];
$b = $_POST['kode_agenda'];
$c = $_POST['nomor_surat'];
$d = $_POST['jenis_surat'];
$e = $_POST['pengirim'];
$f = $_POST['perihal'];
$filename = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);

$masuk = mysqli_query($kon ,"INSERT INTO surat_keluar VALUES('','$a','$b','$c','$d','$e','$f','1','$filename')") or die(mysqli_error($kon));


// $path = "gambar/";
// move_uploaded_file($tmp,$path);

if ($masuk) {
	header("location:suratKeluar.php");
} else {
	echo "<script>alert('Terjadi Kesalahan !!!'); location = 'input_surat_masuk.php'</script>";
}

?>