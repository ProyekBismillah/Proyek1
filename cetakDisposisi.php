<?php
include 'koneksi.php';
require('fpdf/fpdf.php');

$pdf = new FPDF("L","cm","A5");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->SetX(4);
$pdf->MultiCell(13,0.5,'KEMENTRIAN RISET DAN TEKNOLOGI REPUBLIK INDONESIA',0,'C');
$pdf->SetFont('Times','B',13);
$pdf->SetX(4);
$pdf->MultiCell(13,0.5,'POLITEKNIK NEGERI MALANG',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(13,0.5,'JL. SOEKARNO HATTA NO 9',0,'C');
$pdf->SetX(4);
$pdf->MultiCell(13,0.5,'KOTA MALANG - 65141',0,'C');
$pdf->Line(1,3.1,20,3.1);
$pdf->SetLineWidth(0.1);
$pdf->Line(1,3.2,20,3.2);
$pdf->SetLineWidth(0);
$pdf->ln();
$pdf->SetFont('Arial','B',20);
$pdf->MultiCell(17,0.5,"Lembar Disposisi",0,'C');
$pdf->SetFont('Arial','',9);
$pdf->ln();
$id = $_GET['no'];
$query=mysqli_query($kon, "SELECT * FROM disposisi Where id_disposisi = '$id'");
while($lihat=mysqli_fetch_array($query)){
	$id_masuk = $lihat['id_masuk'];
	$query2=mysqli_query($kon, "SELECT * FROM surat_masuk WHERE id_masuk = '$id_masuk'");
	while ($lihat2=mysqli_fetch_array($query2)) {
		$kode_agenda =$lihat2['kode_agenda'];
		$query3=mysqli_query($kon, "SELECT * FROM kode_agenda WHERE kode_agenda = '$kode_agenda'");
		while ($lihat3=mysqli_fetch_array($query3)) {
			$pdf->Cell(3, 0.8, 'Tanggal Surat', 1, 0, 'L');
			$pdf->Cell(0.3, 0.8, ':', 1, 0, 'C');
			$pdf->Cell(7, 0.8, $lihat2['tanggal_surat'], 1, 0,'L');
			$pdf->Cell(3, 0.8, 'Tanggal Disposisi', 1, 0, 'L');
			$pdf->Cell(0.3, 0.8, ':', 1, 0, 'C');
			$pdf->Cell(4, 0.8, $lihat['tanggal_disposisi'], 1, 0,'L');
			$pdf->ln();
			$pdf->Cell(3, 0.8, 'Asal Surat', 1, 0, 'L');
			$pdf->Cell(0.3, 0.8, ':', 1, 0, 'C');
			$pdf->Cell(7, 0.8, $lihat2['pengirim'], 1, 0,'L');
			$pdf->Cell(3, 0.8, 'Tanggal Terima', 1, 0, 'L');
			$pdf->Cell(0.3, 0.8, ':', 1, 0, 'C');
			$pdf->Cell(4, 0.8,$lihat2['tanggal_terima'], 1, 0,'L');
			$pdf->ln();
			$pdf->Cell(3, 0.8, 'No Surat', 1, 0, 'L');
			$pdf->Cell(0.3, 0.8, ':', 1, 0, 'C');
			$pdf->Cell(7, 0.8, $lihat2['nomor_surat'],1, 0,'L');
			$pdf->Cell(3, 0.8, 'Kode Agenda', 1, 0, 'L');
			$pdf->Cell(0.3, 0.8, ':', 1, 0, 'C');
			$pdf->Cell(4, 0.8, $lihat3['keterangan'], 1, 0,'L');
			$pdf->ln();
			$pdf->Cell(3, 0.8, 'Perihal', 1, 0, 'L');
			$pdf->Cell(0.3, 0.8, ':', 1, 0, 'C');
			$pdf->Cell(14.3, 0.8,$lihat2['perihal'], 1, 0,'L');
			$pdf->ln();
			$pdf->ln();
		$pdf->SetFont('Arial','',9);
		$pdf->Cell(6, 0.8, 'Isi Disposisi', 0, 0, 'L');
		$pdf->Cell(0.5, 0.8, ':', 0, 0, 'C');
		$pdf->Cell(11.5, 0.8, $lihat['isi_disposisi'], 0, 0,'L');
		$pdf->ln();
		$pdf->Cell(6, 0.8, 'Diteruskan Kepada', 0, 0, 'L');
		$pdf->Cell(0.5, 0.8, ':', 0, 0, 'C');
		$pdf->Cell(11.5, 0.8, $lihat['kepada'], 0, 0,'L');
		$pdf->ln();
		$pdf->Cell(6, 0.8, 'Untuk', 0, 0, 'L');
		$pdf->Cell(0.5, 0.8, ':', 0, 0, 'C');
		$pdf->Cell(11.5, 0.8, $lihat['tindak_lanjut'], 0, 0,'L');
		$pdf->ln();
		$pdf->Cell(6, 0.8, 'status surat', 0, 0, 'L');
		$pdf->Cell(0.5, 0.8, ':', 0, 0, 'C');
		$pdf->SetFont('Arial','B',11.5);
		$pdf->Cell(11.5, 0.8, $lihat['status'], 0, 0,'L');
		}
		
	}
	
}

$pdf->ln(1);
$pdf->SetFont('Arial','',7);
$pdf->Cell(3,0.7,"Di cetak pada : ".date("D d/m/Y "),0,0,'C');

$qu=mysqli_query($kon,"SELECT * FROM 'disposisi' ORDER BY id_disposisi ASC");


$pdf->Output();
?>