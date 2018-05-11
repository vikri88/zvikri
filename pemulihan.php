<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
 ?>
 <html>
 <head>
 	<title>Inventaris</title>
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
 <center>
 <div class="form1">
 	<form method="post">
 	<h1>Password Anda</h1>
 	<?php

 		$sql = ("SELECT * FROM admin WHERE id='$id'");
 		$queri = mysql_query($sql);
 		while ($cek = mysql_fetch_array($queri)) {
 			echo "<p>".$cek['password']."</p>";
 			echo "<hr style='width:150px;'>";
 		}
 	 ?>
 		<a href="index.php">kembali</a>
 	</form>
 </div>
 </center>
 </body>
 </html>