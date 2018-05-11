<?php 
	include 'koneksi.php';
	session_start();
	if (empty($_SESSION['ganti_password'])) {
		header("location: verifikasi.php");
	}
	$username = $_SESSION['ganti_password'];
	$data = mysql_fetch_array(mysql_query("SELECT * FROM pegawai WHERE username='$username'"));
 ?>
 <html>
 <head>
 	<title>Inventaris</title>
 	<link rel="stylesheet" type="text/css" href="css/verifikasi.css">
 	<style type="text/css">
 	 select{
 	 	width: 250px;
 	 	height: 30px;
 	 }
 	 .form1 input[type='text']{
 	 	border: 4px solid #bababa;
 	 }
 	</style>
 </head>
 <body>
 <center>
 <div class="form1">
 	<form method="post">
 	<h1>Ganti Password</h1>
 		<img src="img/watching.jpg" style="width: 140px; opacity: 1;"><br><br>
 		<input type="text" placeholder="password lama" name="password_lama">
 		<input type="text" placeholder="password baru" name="password_baru">
 		<input type="submit" name="ok" value="ganti password" style="width: 170px; ">
 		<input type="submit" name="back" value="kembali"><br><br>
 	</form>
 </div>
 </center>
 </body>
 </html>
 <?php 
 	if (isset($_POST['ok'])) {
 		$password_lama = $_POST['password_lama'];
 		$password_baru = $_POST['password_baru'];
 		$sql = mysql_query("SELECT * FROM pegawai WHERE password='$password_lama' AND username='$username'");
 		$row = mysql_num_rows($sql);
 		if ($row > 0) {
 			$update = mysql_query("UPDATE pegawai SET password='$password_baru' WHERE username='$username'");
 				if ($update) {
 					echo "<script>alert('password berhasil diganti');window.location='index.php'</script>";
 					session_destroy();
 				} else {
 					echo "<script>alert('password gagal diganti');</script>";
 				}
 		} else {
 			echo "<script>alert('password lama salah');</script>";
 		}
 	} else if (isset($_POST['back'])){
 		session_destroy();
 		header("location: index.php");
 	}
  ?>