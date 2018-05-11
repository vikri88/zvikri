<?php 
	include 'koneksi.php';
 ?>
 <html>
 <head>
 	<title>Inventaris</title>
 	<link rel="stylesheet" type="text/css" href="css/verifikasi.css">
 </head>
 <body>
 <center>
 <div class="form1">
 	<form method="post">
 	<h1 id="veri">Lupa Password</h1>
 		<img src="img/confused.png">
 		<input type="text" name="username" placeholder="username anda" id="veri"><br><br>
 		<input type="submit" name="ok" id="veri">
 		<input type="submit" name="back" id="veri" value="Kembali"><br><br>
 	</form>
 </div>
 </center>
 </body>
 </html>

<?php 
	if (isset($_POST['ok'])) {
		$username = $_POST['username'];

		$query = mysql_query("SELECT * FROM pegawai where username='$username'");
		$cek = mysql_fetch_array($query);
		$num = mysql_num_rows($query);

		if($num > 0){
			session_start();
			$_SESSION['verifikasi'] = $username;
			echo "<script>alert('okeee');window.location='benar_anda.php'</script>";
		}else{
			echo "<script>alert('Masukan username yang benar :)');</script>";
		}		
	} else if(isset($_POST['back'])) {
		header("location: index.php");
	}
?>