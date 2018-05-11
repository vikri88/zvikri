<?php 
	include 'koneksi.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Vkr ganteng</title>
 </head>
 <body>
 	<form method="POST">
 		<input type="text" name="nama"><br>
 		<input type="text" name="kelas"><br>
 		<input type="text" name="sekolah"><br>

 		<input type="submit" name="tambah">
 	</form>
 </body>
 </html>

 <?php 
 	if (isset($_POST['tambah'])) {
 		$nama = $_POST['nama'];
 		$kelas = $_POST['kelas'];
 		$sekolah = $_POST['sekolah'];

 		$sql = "INSERT INTO murid VALUES('', '$nama', '$kelas', '$sekolah')";
 		$query = mysql_query($sql);

 		if($query){
			echo "<script>alert('Berhasil');window.location='sarah_berhasil_horee.php'</script>";
		}else{
			echo "<script>alert('Gagal')</script>";
		}
 	}
  ?>