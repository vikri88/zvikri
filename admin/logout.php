<?php
	include '../koneksi.php';
	include 'session.php';
	$sql = "UPDATE user_log SET logout_date=now() WHERE id_log='$number'";
	$query = mysql_query($sql);
	if ($query) {
		session_destroy();
		echo "<script>window.location='../index.php'</script>";
	} else {
		echo "<script>window.location='inventori.php'</script>";
	}
 ?>