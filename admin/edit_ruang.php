 <?php 
	include '../koneksi.php';
	include 'session.php';

	$id = $_GET['id_lokasi'];
 	$ss = mysql_query("SELECT * FROM lokasi WHERE id_lokasi='$id'");
 	$data = mysql_fetch_array($ss);
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
	 	<div class="form1" style="width:70%;">
		<form id="select" method="POST">
				<h1 style="margin-left: 8px;">Edit Nama Ruang</h1>
				<table border="0" style="width:100%;">
					<tr>
						<td style="text-align: left; padding-left: 10px;" width="15%"><p>Ruang</p></td>
						<td><input type="text" name="ruang" value="<?php echo $data['nama_lok'];?>"><br></td>
					</tr>
				</table>
			<input type="submit" name="edit" style="margin-left:15px; width: 170px;" value="Ubah">
			<input type="submit" name="back" style="margin-left:15px; width: 170px;" value="Batal">
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
	
	if(isset($_POST['edit'])){
		$anjo = $data['nama_lok'];
		$id=$_GET['id_lokasi'];
		$ruang = $_POST['ruang'];
 
		$query = "UPDATE lokasi SET nama_lok='$ruang' WHERE id_lokasi='$id'";
		$sql = mysql_query($query);

		$activty_log = "INSERT INTO activty_log VALUES('','$id',NOW(),'Ruang $anjo diganti nama menjadi $ruang','admin')";
		$log = mysql_query($activty_log);
			
			if($sql){
				echo "<script>alert('Berhasil');window.location='lokasi.php?page=1'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
	}
	 else if (isset($_POST['back'])) {
		echo "<script>window.location='lokasi.php?page=1'</script>";
	}
 ?>
