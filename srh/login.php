<?php 
	include 'koneksi.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>vikri ganteng</title>
 </head>
 <body>
 	<form method="post">
 	<center>
 	<h1>Login</h1>
 		<input type="text" name="vikriganteng_usename"><br><br>
 		<input type="password" name="sarahkorong_password"><br><br>
 		
 		<input type="submit" name="login">
 	</form>
 	</center>
 </body>
 </html>

 <?php
 	session_start();
 	if (isset($_POST['login'])) {
 		$sarah_user = $_POST['vikriganteng_usename'];
 		$sopbuntut_pass = $_POST['sarahkorong_password'];

 		$sql = "SELECT * FROM vikri_ganteng WHERE username='$sarah_user' AND password='$sopbuntut_pass'";
 		$query = mysql_query($sql);
 		$vkrgntng = mysql_num_rows($query);

 		if ($vkrgntng > 0) {
 			$_SESSION['login'] = $sarah_user;
 			echo "<script>alert('Berhasil Login Sarahhhhh monyet');window.location='sarah_berhasil_horee.php'</script>";
 		} else {
 			echo "<script>alert('gagal login watirr aaaaa');</script>";
 		}
 	}
  ?>