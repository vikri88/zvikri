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
 	<h1>Pilih kesempatan</h1>
 		<img src="img/hope.png" style="width: 170px; opacity: 0.8;"><br><br>
 		<select name="kesempatan">
 			<option value="goblog">-Pilih Salah Satu Pertanyaan anda-</option>
 			<option>siapa nama hewan peliharaan anda?</option>
			<option>siapa nama ibu kandung anda?</option>
			<option>siapa orang yang anda paling disukai?</option>
			<option>siapa artis favorite anda?</option>
			<option>apa makanan favorite anda?</option>
			<option>penyakit apakah yang sering menyerang anda?</option>
			<option>anak ke berapakah anda?</option>
 		</select><br>
 		<input type="text" name="jawaban" placeholder="Jawaban" style="margin-top: 10px; border: 1px solid grey; width: 95%; font-size: 15px;">
 		<input type="submit" name="ok" value="masukan">
 		<input type="submit" name="back" value="kembali"><br><br>
 	</form>
 </div>
 </center>
 </body>
 </html>
 <?php 
 	if (isset($_POST['ok'])) {
 		$kesempatan = $_POST['kesempatan'];
 		$jawaban = $_POST['jawaban'];
 		$oe = mysql_query("SELECT * FROM pegawai WHERE pertayaan='$kesempatan' AND jawaban='$jawaban' AND username='$username'");
 		$cek = mysql_num_rows($oe);

		if ($cek > 0) {
			$_SESSION['verifikasi']=$username;
 			echo "<script>alert('okee ini password nya');window.location='tampil.php'</script>";
 		} else {
 			echo "<script>alert('Pertanyaan atau jawaban mungkin ga sesuai')</script>";
 		}
 	} else if (isset($_POST['back'])){
 		session_destroy();
 	}
  ?>