<?php
include 'koneksi.php';
$a = $_POST['username'];
$b = $_POST['nama'];
$c = $_POST['tempat_lahir'];
$d = $_POST['tanggal_lahir'];
$e = $_POST['password'];
$f = $_POST['level'];

$masuk = mysqli_query($kon ,"INSERT INTO user VALUES('','$a','$b','$c','$d','$e','$f')") or die(mysqli_error($kon));


// $path = "gambar/";
// move_uploaded_file($tmp,$path);

if ($masuk) {
	header("location:dataAdmin.php");
} else {
	echo "<script>alert('Terjadi Kesalahan !!!'); location = 'tambahAdmin.php'</script>";
}

?>