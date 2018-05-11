<?php 
	include 'koneksi.php';
	$id = $_GET['id'];

	$sql = "UPDATE murid SET nama=$nama, kelas=$kelas, sekolah=$sekolah WHERE id=$id";
	$query = mysql_query($query);

	if($sql){
		echo "<script>alert('Berhasil');window.location='sarah_berhasil_horee.php'</script>";
	}else{
		echo "<script>alert('Gagal')</script>";
	}
 ?>