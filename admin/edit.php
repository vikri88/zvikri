 <?php 
	include '../koneksi.php'; 
	include 'session.php';

	$id = $_GET['id'];
 	$ss = mysql_query("SELECT * FROM barang WHERE id='$id'");
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
 <div class="fck">
 	<img src="../img/adminn.png" width="35" align="middle" style="float:right; margin-right:20px; border-radius:50%; margin-top:-4px; border:5px solid white; ">
 </div>
	 <div class="a">
 <br><br>
 <div class="form1" style="width:100%;">
		<form method="POST">
				<h1 style="margin-left: 8px;">Edit Barang</h1>
				<table border="0" style="width:100%;">
					<tr>
						<td style="text-align: left;"><p>Deskripsi</p></td>
						<td><textarea type="text" name="deskripsi_brg"><?php echo $data['deskripsi_brg'];?></textarea></td>
					</tr>
					<tr>
						<td style="text-align: left;"><p>Kode</p></td>
						<td><input type="text" name="kode_brg" value="<?php echo $data['kode_brg'];?>"><br></td>
					</tr>
					<tr>
						<td style="text-align: left;"><p>Merk</p></td>
						<td><input type="text" name="merk_brg" value="<?php echo $data['merk_brg'];?>"><br></td>
					</tr>
					<tr>
						<td style="text-align: left;"><p>No Seri</p></td>
						<td><input type="text" name="no_seri" value="<?php echo $data['no_seri'];?>"><br></td>
					</tr>
					
				</table>
			<input type="submit" name="edit" style="margin-left:15px; width: 170px;" value="Ubah">
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
		$id=$_GET['id'];
		$deskripsi = $_POST['deskripsi_brg'];
		$kode = $_POST['kode_brg'];
		$merk = $_POST['merk_brg'];
		$seri = $_POST['no_seri'];
 
		$query = "UPDATE barang SET deskripsi_brg='$deskripsi', kode_brg='$kode', merk_brg='$merk', no_seri='$seri' WHERE id='$id'";
		$sql = mysql_query($query);

		$sql2 = "INSERT INTO activty_log VALUES('','$nama',NOW(),'barang dengan id $id selesai di edit')";
		$query2 = mysql_query($sql2);
			
			if($sql){
				echo "<script>alert('Berhasil');window.location='semua_brg.php'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
	}
 ?>