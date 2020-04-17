<?php
include 'koneksi.php';
$a = $_POST['tanggal_surat'];
$b = $_POST['tanggal_terima'];
$c = $_POST['kode_agenda'];
$d = $_POST['nomor_surat'];
$e = $_POST['jenis_surat'];
$f = $_POST['pengirim'];
$g = $_POST['perihal'];
$filename = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);

$masuk = mysqli_query($kon ,"INSERT INTO surat_masuk VALUES('','$a','$b','$c','$d','$e','$f','$g','1','$filename')") or die(mysqli_error($kon));


// $path = "gambar/";
// move_uploaded_file($tmp,$path);

if ($masuk) {
	header("location:suratMasukSA.php");
} else {
	echo "<script>alert('Terjadi Kesalahan !!!'); location = 'tambahSMSA.php'</script>";
}

?>