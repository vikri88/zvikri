<?php 
	include '../koneksi.php';
	include 'session.php';

	$oe = mysql_query("SELECT * FROM barang WHERE id='18'");
	$eo = mysql_fetch_array($oe);
	$kode = $eo['kode_brg'];
	$kode2 = substr($kode, 12, 3);
	
	echo $kode2;
 ?>