<?php 
include '../koneksi.php';
include 'session.php';

$id = $_GET['idpro'];

$query = "DELETE FROM pegawai WHERE id='$id'";
$sql = mysql_query($query);

if($sql){
	echo "<script>alert('Berhasil dipecat :(');window.location='list_pegawai.php?'</script>";
}else{
	echo "<script>alert('Gagal')</script>";
}

 ?>
