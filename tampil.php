<?php 
	include 'koneksi.php';
	session_start();
	if (empty($_SESSION['verifikasi'])) {
		header("location: verifikasi.php");
	}
	$username = $_SESSION['verifikasi'];
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
 	</style>
 </head>
 <body>
 <center>
 <div class="form1">
 	<form method="post">
 	<h1>Jangan lupa lagi ya :)</h1>
 		<img src="img/oke.jpg" style="width: 170px; opacity: 1;"><br><br>
 		<h1 style="font-size: 20px;">password anda</h1>
 		<h1 style="font-size: 20px;">- <?php echo $data['password']; ?> -</h1>
 		<input type="submit" name="ok" value="ganti password" style="width: 170px; ">
 		<input type="submit" name="back" value="kembali"><br><br>
 	</form>
 </div>
 </center>
 </body>
 </html>
 <?php 
 	if (isset($_POST['ok'])) {
 		$_SESSION['ganti_password'] = $username;
 		header("location: ganti_password.php");
 	} else if (isset($_POST['back'])){
 		session_destroy();
 		header("location: index.php");
 	}
  ?>