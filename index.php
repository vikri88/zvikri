<?php 
	include 'koneksi.php'; 
 ?>
<html>
<head>
	<title>Inventaris</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/slide.css">

	<style>
		.mySlides {display:none;}
	</style>

</head>
<body>
<div class="header">
	<h1>inventaris alat</h1>
</div>
<div id="font" class="w3-content w3-section" style="max-width:500px">
	<img src="img/barang.jpg" class="mySlides">
	<img src="img/programin.jpg" class="mySlides">
	<img src="img/programing.png" class="mySlides">
	<img src="img/programing1.png" class="mySlides">
	<img src="img/programing3.jpg" class="mySlides">	
</div>
	<script>
	var myIndex = 0;
	carousel();

	function carousel() {
	    var i;
	    var x = document.getElementsByClassName("mySlides");
	    for (i = 0; i < x.length; i++) {
	       x[i].style.display = "none";  
	    }
	    myIndex++;
	    if (myIndex > x.length) {myIndex = 1}    
	    x[myIndex-1].style.display = "block";  
	    setTimeout(carousel, 1000); // Change image every 2 seconds
	}
	</script>
<center>
<div class="form1">
	<form method="post">
		<h1>Login</h1>
		<input type="text" name="username" id="myuser" placeholder="username" maxlength="30"><br>
		<input type="password" name="password" placeholder="password" id="mypass" maxlength="30"><br>
		<br><br>
		<input type="submit" name="login" value="Masuk" style="padding-top: 10px;">
		<div id="pas">
			<a href="verifikasi.php">Lupa Password?</a>
		</div>
	</form>
</div>
<div class="footer">
	<a href="">About Me</a>
	<a href="">Contact</a>
</div>
</center>	
</body>
</html>
<?php
 	session_start();
 	if (isset($_SESSION['login_admin'])) {
		header("location: admin/inventori.php");
	}
	if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT MAX( id_log ) AS max_id FROM user_log";
	$q = mysql_query($sql);
	$z = mysql_fetch_array($q);
	$nilai=$z['max_id'];
	$zz = $nilai + 1;

	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
			$hasil = mysql_query($query)or die(mysql_error());
			$row = mysql_fetch_array($hasil);
			$num_row = mysql_num_rows($hasil);
			$id_admin = $row['id'];

	$query2 = mysql_query("SELECT * FROM pegawai WHERE username='$username' AND password='$password'")or die(mysql_error());
			$num_row_pegawai = mysql_num_rows($query2);
			$row_pegawai = mysql_fetch_array($query2);
			$id_pegawai = $row_pegawai['id'];		
	
	if( $num_row > 0 ) { 
		$_SESSION['login_admin'] = $username;
		$_SESSION['pas_admin'] = $password;
		$_SESSION['number'] = $zz;

		$sql2 = "INSERT INTO user_log VALUES('$zz','$id_admin',now(),'','admin')";
		$query3 = mysql_query($sql2);

		echo "<script>alert('Login Berhasil');window.location='admin/inventori.php'</script>";
	} else if ($num_row_pegawai > 0) {
		$_SESSION['login_pegawai'] = $username;
		$_SESSION['number'] = $zz;

		$sql2 = "INSERT INTO user_log VALUES('$zz','$id_pegawai',now(),'','pegawai')";
		$query3 = mysql_query($sql2);

		echo "<script>alert('Login Berhasil');window.location='pegawai/inventori.php'</script>"; 
	} else {
		echo "<script>alert('Login Gagal')</script>";
	}
}
 ?>