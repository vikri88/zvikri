<?php
	include 'koneksi.php'; 
	session_start();
	if (!isset($_SESSION['login'])) {
		die("login doeloe :((");
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Sarah uvuvwevwe onyetwe</title>
 	
 	<style type="text/css">
 		h1{
 			font-size: 25px;
 			font-family: century gothic;
 		}
 		button{
 			padding: 10px;
 			color: lightgreen;
 			border: 3px solid lightgreen;
 			background-color: white;
 			transition:1s;
 		}
 		button:hover{
 			color: lightblue;
 			border: 3px solid lightblue;
 			transition:1s;
 		}
 	</style>
 
 </head>
 <body>
 <center>
 	<h1>
 		Vikri imut yyyyyy
 	</h1>
 	<a href="logout.php"><button>LOGOUT</button></a>
 	<a href="tambah.php"><button>Tambah</button></a>
 	<table border="1" style="margin-top:20px;">
 		<tr>
 			<td style="padding:10px;">Nama</td>
 			<td style="padding:10px;">Kelas</td>
 			<td style="padding:10px;">Sekolah</td>
 			<td style="padding:10px;" colspan="2">Aksi</td>
 		</tr>
 		<?php 
 			$sql = "SELECT * FROM murid";
 			$query = mysql_query($sql);

 			while ($data = mysql_fetch_array($query)) {
 				echo "<tr>
 					  <td style='padding:7px;'>".$data['nama']."</td>
 					  <td style='padding:7px;'>".$data['kelas']."</td>
 					  <td style='padding:7px;'>".$data['sekolah']."</td>
 					  <td style='padding:7px'><a href='delete.php?id=".$data['id']."'>Delete</a</td>
 					  <td style='padding:7px'><a href='editt.php?id=".$data['id']."'>Edit</a></td>
 					  </tr>";
 			}
 		 ?>
 	</table>
 </center>
 </body>
 </html>