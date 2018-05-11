<?php 
	include 'koneksi.php';
	$id = $_GET['id'];

	$sql = "DELETE FROM murid WHERE id='$id'";
	$query = mysql_query($sql);

	if($sql){
	header('location: sarah_berhasil_horee.php');
	}else{
	echo "<script>alert('Gagal watirr')</script>";
	}
 ?>