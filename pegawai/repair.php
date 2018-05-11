<?php 
	include '../koneksi.php';
	include 'session.php';
	
	$id = $_GET['id'];

	$ou = mysql_query("SELECT * FROM barang WHERE id='$id'");
	$uo = mysql_fetch_array($ou);
	$gblg = $uo['merk_brg'];

	$sql = "UPDATE barang SET status_brg='repair' WHERE id='$id'";
	$query = mysql_query($sql);

	$sql2 = "INSERT INTO activty_log VALUES('','$nama',NOW(),'barang dengan id $id di repair oleh $nama')";
	$query2 = mysql_query($sql2);

	$activty_log = "INSERT INTO activty_log VALUES('','$id2',NOW(),'barang dengan nama $gblg di repair','admin')";
		$log = mysql_query($activty_log);

	if ($sql) {
		echo "<script>alert('Berhasil');window.location='barang_rusak.php?page=1'</script>";
	}
 ?>