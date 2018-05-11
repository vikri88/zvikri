<?php 
	include '../koneksi.php';
	include 'session.php';

 	$ss = mysql_query("SELECT * FROM barang WHERE id='$id'");
 	$data = mysql_fetch_array($ss);

	if(isset($_POST['edit'])){
		$id=$_GET['id'];
		$jenis = $_POST['jenis'];
		$deskripsi = $_POST['deskripsi_brg'];
		$kode = $_POST['kode_brg'];
		$merk = $_POST['merk_brg'];
		$status = $_POST['status_brg'];
 
		$query = "UPDATE barang SET jenis='$jenis', deskripsi_brg='$deskripsi', kode_brg='$kode', merk_brg='$merk', status_brg='$status' WHERE id='$id'";
		$sql = mysql_query($query);

		$sql2 = "INSERT INTO activty_log VALUES('','$nama',NOW(),'barang dengan id $id selesai diubah')";
		$query2 = mysql_query($sql2);
			
			if($sql){
				echo "<script>alert('Berhasil');window.location='semua_brg.php'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
	}
 ?>