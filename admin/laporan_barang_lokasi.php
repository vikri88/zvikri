<?php
include '../fpdf/fpdf.php';
include '../koneksi.php';
include 'session.php';
$tgl = date('d-M-Y');
$pdf = new FPDF();
$pdf->Open();
$pdf->addPage();
$pdf->setAutoPageBreak(false);
$pdf->setFont('Arial','',15);
$judul = "PEMERINTAH PROVINSI JAWA BARAT";
$pdf->Cell(0,10,$judul,'0','1','C');
$judul = "DINAS PENDIDIKAN";
$pdf->Cell(0,5,$judul,'0','1','C');
$pdf->setFont('Arial','',20);
$judul = "SMK NEGERI 2 CIMAHI";
$pdf->Cell(0,10,$judul,'0','1','C');
$pdf->setFont('Arial','',12);
$judul = "JL. Kamarung Km. 1,5 No. 69 Kel. Citeureup Kec. Cimahi Utara";
$pdf->Cell(0,7,$judul,'0','1','C');
$pdf->setFont('Arial','',12);
$judul = "Telp/Fax: (022) 87805857 Email : smkn2cmi@yahoo.com Kota Cimahi 40512";
$pdf->Cell(0,5,$judul,'0','1','C');
$a = $_GET['id_lokasi'];
$aa = mysql_query("SELECT * FROM lokasi WHERE id_lokasi='$a'");
$aaa = mysql_fetch_array($aa);
$lok = $aaa['nama_lok'];
$judul2 = "Laporan Barang di $lok";
$pdf->Cell(0,20,$judul2,'0','1','L');
$row = 0;
$yi = 70;
$ya = 64;
$pdf->setFont('Arial','',9);
$pdf->setFillColor(222,222,222);
$pdf->setXY(10,$ya);
$pdf->CELL(6,6,'NO',1,0,'C',1);
$pdf->CELL(35,6,'Jenis Barang',1,0,'C',1);
$pdf->CELL(40,6,'kode Barang',1,0,'C',1);
$pdf->CELL(40,6,'Merk Barang',1,0,'C',1);
$pdf->CELL(40,6,'No Seri',1,0,'C',1);
$pdf->CELL(35,6,'Status',1,0,'C',1);
$ya = $yi + $row;
$sql = mysql_query("SELECT * FROM lokasi_detail LEFT JOIN barang ON lokasi_detail.id=barang.id
	 											LEFT JOIN jenis_brg ON barang.id_jenis=jenis_brg.id_jenis 
	 											WHERE id_lokasi='$a' AND barang.status_brg='terpakai' ORDER BY date DESC limit 0,35");
$i = 1;
$no = 1;
$max = 31;
$row = 6;
while($data = mysql_fetch_array($sql)){
$pdf->setXY(10,$ya);
$pdf->setFont('arial','',9);
$pdf->setFillColor(255,255,255);
$pdf->cell(6,6,$no,1,0,'C',1);
$pdf->cell(35,6,$data['nama'],1,0,'C',1);
$pdf->cell(40,6,$data['kode_brg'],1,0,'C',1);
$pdf->CELL(40,6,$data['merk_brg'],1,0,'C',1);
$pdf->CELL(40,6,$data['no_seri'],1,0,'C',1);
$pdf->CELL(35,6,$data['status_brg'],1,0,'C',1);
$ya = $ya+$row;
$no++;
$i++;
}
$oe = "Cimahi, ".$tgl;
$eo = $nama." ".$b['nama_belakang'];
$pdf->Cell(0,27,$oe,'0','1','R');
$pdf->Cell(187,10,$eo,'10','1','R');
$pdf->output();
?>