<?php 
	include '../koneksi.php';
	include 'session.php';
 ?>

 <html>
 <head>
 	<title>Inventaris</title>
 	
 	<link rel="stylesheet" type="text/css" href="../css/admin_css.css">
 	<link rel="stylesheet" type="text/css" href="../css/form.css">

 	<style type="text/css">

 	</style>
 </head>
 <body>
 <?php 
 	include 'header.php';
  ?>
	 <div class="a">
 <br><br>
 <div class="form1" style="width:100%;">
		<form method="POST" id="form">
				<h1 style="margin-left: 8px;">Tambah Kategori</h1>
				<table border="0" style="width:100%;">
					<tr>
						<td style="text-align: left;" width="30%"><p>Nama</p></td>
						<td><input type="text" name="nama_kat" placeholder="Nama Kategori" required><br></td>
					</tr>
					<tr>
						<td style="text-align: left;"><p>Keterangan</p></td>
						<td><input type="text" name="tambahan" placeholder="Keterangan" required><br></td>
					</tr>
					
				</table>
			<input type="submit" name="tambah" style="width: 170px;" value="Tambah" required>
			<a href="tambah.php" style="margin-left: 30px;">Kembali</a>
		</form>
 	</div>
 </div>
	 <?php 
	 	include 'sisi.php';
	  ?>
 <div class="c">
 	
 </div>
 </body>
 </html>
 <?php 
	
	if(isset($_POST['tambah'])){
		$nama_kat = $_POST['nama_kat'];
		$tambahan = $_POST['tambahan'];
		
		$queri = mysql_query("SELECT * FROM jenis_brg where nama = '$nama_kat' ")or die(mysql_error());
		$count = mysql_num_rows($queri);

		if ($count > 0) { 
?>
			<script>
				alert('Kategori Sudah ada');
				window.location = "add_kategori.php";
			</script>
<?php
		} else {

		$query = "INSERT INTO jenis_brg VALUES('','$nama_kat','$tambahan')";
		$sql = mysql_query($query);

		$activty_log = "INSERT INTO activty_log VALUES('','$id',NOW(),'kategori $nama_kat ditambahkan','admin')";
		$log = mysql_query($activty_log);

			if($sql){
				echo "<script>alert('Berhasil');window.location='tambah.php'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
		}	
	}
 ?>