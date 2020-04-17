<?php
include 'koneksi.php';

$a = $_POST['id_masuk'];
$b = $_POST['tanggal_surat'];
$c = $_POST['tanggal_terima'];
$d = $_POST['kode_agenda'];
$e = $_POST['nomor_surat'];
$f = $_POST['jenis_surat'];
$g = $_POST['pengirim'];
$h = $_POST['perihal'];
// $i = $_POST['id_user'];
// $j = $_POST['gambar'];

	$query="UPDATE surat_masuk SET tanggal_surat ='$b', tanggal_terima='$c', kode_agenda='$d', nomor_surat='$e', jenis_surat='$f', pengirim='$g', perihal='$h' WHERE id_masuk='$a'";
	$result=mysqli_query($kon, $query);

	if($result){
		// echo "Berhasil update data ke database";
?>
	<a href="suratMasuk.php">Lihat data di Tabel</a>
<?php

	}
else{
	echo "Gagal update data". mysqli_error($kon);
}
?>
