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
 		.img{
 			width: 120px;
 			height: 120px;
 			border: 5px solid pink;
 			border-radius: 50%;
 			background-image: url("gambar_profile/<?php echo $data['nama_gambar']; ?>");
 			background-size: 100%;
 		}
 	</style>
 </head>
 <body bgcolor="">
 <center>
 <div class="form1">
 	<form method="post">
 	<h1 id="veri">Apa ini benar anda?</h1>
 	<center>
 		<div class="img">
 			
 		</div>
 	</center>
 		<br>
 		<h1 style="color: #bababa; font-size: 25px;"><?php echo $data['nama_depan']." ".$data['nama_belakang']; ?></h1>
 		<input type="submit" name="ok" id="veri" value="iya">
 		<input type="submit" name="back" id="veri" value="bukan"><br><br>
 	</form>
 </div>
 </center>
 </body>
 </html>

<?php 
	if (isset($_POST['ok'])) {

		$query = mysql_query("SELECT * FROM pegawai where username='$username'");
		$cek = mysql_fetch_array($query);
		$num = mysql_num_rows($query);

		if($num > 0){
			$_SESSION['verifikasi'] = $username;
			echo "<script>alert('okayy');window.location='kesempatan.php'</script>";
		}else{
			echo "<script>alert('Gagal');</script>";
		}		
	} else if(isset($_POST['back'])) {
		session_destroy();
		echo "<script>alert('oh maaf');window.location='verifikasi.php'</script>";
	}
?>