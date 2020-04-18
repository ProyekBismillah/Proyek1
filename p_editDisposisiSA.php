<?php
include 'koneksi.php';

$a = $_POST['id_disposisi'];
$b = $_POST['tanggal_disposisi'];
$c = $_POST['isi_disposisi'];
$d = $_POST['kepada'];
$e = $_POST['tindak_lanjut'];
$f = $_POST['status'];

// $i = $_POST['id_user'];
// $j = $_POST['gambar'];

	$query="UPDATE disposisi SET tanggal_disposisi ='$b', isi_disposisi='$c', kepada='$d', tindak_lanjut='$e', status='$f' WHERE id_disposisi='$a'";
	$result=mysqli_query($kon, $query);

	if($result){
		// echo "Berhasil update data ke database";
?>
	<a href="disposisiSA.php">Lihat data di Tabel</a>
<?php

	}
else{
	echo "Gagal update data". mysqli_error($kon);
}
?>
