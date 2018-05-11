<?php 
	include '../koneksi.php';
	include 'session.php';

	$id = $_GET['id'];

	$x = mysql_query("SELECT * FROM barang WHERE id='$id'");
	$xx = mysql_fetch_array($x);
	$xxx = $xx['kode_brg'];

	$sql = "DELETE FROM lokasi_detail WHERE id='$id'";
	$query = mysql_query($sql);

	$sql = "UPDATE barang SET status_brg='rusak' WHERE id='$id'";
	$query = mysql_query($sql);

	$activty_log = "INSERT INTO activty_log VALUES('','$id2',NOW(),'barang dengan kode $xxx sekarang berstatus rusak','admin')";
		$log = mysql_query($activty_log);


	if ($activty_log) {
		echo "<script>alert('Berhasil');window.location='lokasi.php?page=1'</script>";
	} else {
		echo "<script>alert('Berhasil')</script>";
	}
 ?>