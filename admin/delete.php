<?php 
include '../koneksi.php';
include 'session.php';

$id = $_GET['id'];

$query = "DELETE FROM barang WHERE id='$id'";
$sql = mysql_query($query);

if($sql){
	header('location: semua_brg.php');
}else{
	echo "<script>alert('Gagal')</script>";
}

 ?>
