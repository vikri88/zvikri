<?php 
	include '../koneksi.php';
	include 'session.php';
	
	$id = $_GET['id'];
	$query = "UPDATE barang SET status_brg='terbuang' WHERE id='$id'";
	$sql = mysql_query($query);
	
	$x = mysql_query("SELECT * FROM barang WHERE id='$id'");
	$xx = mysql_fetch_array($x);
	$xxx = $xx['kode_brg'];

	$activty_log = "INSERT INTO activty_log VALUES('','$id2',NOW(),'barang dengan kode $xxx terbuang :(','admin')";
		$log = mysql_query($activty_log);

			if($sql){
				echo "<script>alert('Berhasil');window.location='barang_rusak.php?page=1'</script>";
			}else{
				echo "<script>alert('Gagal');window.location='barang_rusak.php?page=1'</script>";
			}
 ?>