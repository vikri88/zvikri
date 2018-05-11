<?php 
	include '../koneksi.php';
	include 'session.php';

	$id = $_GET['id'];

	$x = mysql_query("SELECT * FROM barang WHERE id='$id'");
	$xx = mysql_fetch_array($x);
	$xxx = $xx['kode_brg'];

	$sql = "UPDATE barang SET status_brg='selesai repair' WHERE id='$id'";
	$query = mysql_query($sql);

	$activty_log = "INSERT INTO activty_log VALUES('','$id2',NOW(),'barang dengan kode $xxx selesai di repair','admin')";
		$log = mysql_query($activty_log);

	if ($sql) {
		echo "<script>alert('Berhasil');window.location='barang_repair.php?page=1'</script>";
	}
 ?>