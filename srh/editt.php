<?php 
	include 'koneksi.php';
	$id = $_GET['id'];

	$sql = "SELECT * FROM murid WHERE id='$id'";
	$query = mysql_query($sql);
	$data = mysql_fetch_array($query);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form method="POST" action="edit.php">
 		<input type="name" name="nama" placeholder="<?php echo $data['nama']; ?>"><br>
 		<input type="kelas" name="kelas" placeholder="<?php echo $data['kelas']; ?>"><br>
 		<input type="sekolah" name="sekolah" placeholder="<?php echo $data['sekolah']; ?>"><br>
 		<input type="submit" name="edit" values="Edit">
 	</form>
 </body>
 </html>