<?php
include 'koneksi.php';

$a = $_POST['id_keluar'];
$b = $_POST['tanggal_surat'];
$c = $_POST['kode_agenda'];
$d = $_POST['nomor_surat'];
$e = $_POST['jenis_surat'];
$f = $_POST['pengirim'];
$g = $_POST['perihal'];
// $i = $_POST['id_user'];
// $j = $_POST['gambar'];

	$query="UPDATE surat_keluar SET tanggal_surat ='$b', kode_agenda='$c', nomor_surat='$d', jenis_surat='$e', pengirim='$f', perihal='$g' WHERE id_keluar='$a'";
	$result=mysqli_query($kon, $query);

	if($result){
		// echo "Berhasil update data ke database";
?>
	<a href="suratKeluarSA.php">Lihat data di Tabel</a>
<?php

	}
else{
	echo "Gagal update data". mysqli_error($kon);
}
?>
