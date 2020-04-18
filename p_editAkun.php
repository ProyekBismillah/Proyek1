<?php
include 'koneksi.php';

$a = $_POST['id_user'];
$b = $_POST['username'];
$c = $_POST['nama'];
$d = $_POST['tempat_lahir'];
$e = $_POST['tanggal_lahir'];
$f = $_POST['password'];
// $i = $_POST['id_user'];
// $j = $_POST['gambar'];

	$query="UPDATE user SET username ='$b', nama='$c', tempat_lahir='$d', tanggal_lahir='$e', password='$f' WHERE id_user='$a'";
	$result=mysqli_query($kon, $query);

	if($result){
		// echo "Berhasil update data ke database";
?>
	<a href="pengaturan.php">Lihat data di Tabel</a>
<?php

	}
else{
	echo "Gagal update data". mysqli_error($kon);
}
?>
