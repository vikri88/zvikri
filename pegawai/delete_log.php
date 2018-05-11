<?php 
include '../koneksi.php';
include 'session.php';

$id = $_GET['id'];

$query = "DELETE FROM activty_log WHERE id_activity='$id'";
$sql = mysql_query($query);

if($sql){
	echo "<script>alert('Berhasill');window.location='activity_log.php'</script>";
}else{
	echo "<script>alert('Gagal');window.location='activity_log.php'</script>";
}

 ?>
