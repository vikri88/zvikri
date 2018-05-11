<?php 
	include ('../koneksi.php');
	include 'session.php';
 ?>
 <html>
 <head>
 	<title>Inventaris</title>
 	<link rel="stylesheet" type="text/css" href="../css/admin_style.css">
 </head>
 <body>
 <div class="fck">
 	<form action="logout.php">
		<input type="submit" name="log" value="logouts">
	</form>
 </div>
 <div class="a">
 <br><br>
 <center>
 	<h1 style="font-family:century gothic;">Notifikasi</h1>
 </center>
 <div id="tai">
 	<a href="notifikasi.php"><button>Kembali</button></a>
 	<br><br>
 </div>
	 <div class="notif2">
	 	<table>
	 		<div class="ntfrd">
	 			<h1 style="float:left;">Lupa password</h1>
	 			<a href="#"><button style="float:right; margin-top:10px; padding:4px;">Remove</button></a><br><br>
	 			<hr>
	 			<p>2016-02-01</p>
	 		</div>
	 	</table>
	 </div>
 </div>
 <div class="b">
 	
 </div>
 </body>
 </html>