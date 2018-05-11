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
		<form method="POST" id="form" style="width: 70%;">
				<h1 style="margin-left: 8px;">Tambah Ruangan</h1>
				<table border="0" style="width:100%;">
					<tr>
						<td style="text-align: left;" width="15%"><p>Nama ruang</p></td>
						<td><input type="text" name="nama_lok" placeholder="Nama ruang" required><br></td>
					</tr>
					<tr>
						<td style="text-align: left;"><p>Keterangan</p></td>
						<td><input type="text" name="tambahan" placeholder="Keterangan" required><br></td>
					</tr>
					
				</table>
			<input type="submit" name="tambah" style="width: 170px;" value="Tambah" required>
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
		$nama_lok = $_POST['nama_lok'];
		$tambahan = $_POST['tambahan'];
		
		$queri = mysql_query("SELECT * FROM lokasi where nama_lok = '$nama_lok' ")or die(mysql_error());
		$count = mysql_num_rows($queri);

		if ($count > 0) { 
?>
			<script>
				alert('lokasi Sudah ada');
				window.location = "add_lok.php?page=1";
			</script>
<?php
		} else {

		$query = "INSERT INTO lokasi VALUES('','$nama_lok','$tambahan')";
		$sql = mysql_query($query);

		$activty_log = "INSERT INTO activty_log VALUES('','$id',NOW(),'lokasi $nama_lok berhasil ditambahkan','admin')";
		$log = mysql_query($activty_log);
			
			if($sql){
				echo "<script>alert('Berhasil');window.location='lokasi.php'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
		}	
	}
 ?>