 <?php 
	include '../koneksi.php';
	include 'session.php';

	$id = $_GET['id'];
 	$ss = mysql_query("SELECT * FROM barang WHERE id='$id'");
 	$data = mysql_fetch_array($ss);

 	$num = $_GET['id_lokasi'];
 	$h = mysql_query("SELECT * FROM lokasi WHERE id_lokasi='$num'");
 	$hh = mysql_fetch_array($h);
 	$hhh = $hh['nama_lok'];
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
	 	<center>
	 		<div class="lok_form">
	 			<h1>Lokasikan Barang</h1>
	 			<form method="POST">
	 				<select name="id_lokasi" required/>
			          	<?php $result =  mysql_query("select * from lokasi")or die(mysql_error()); 
			          		while ($row=mysql_fetch_array($result)){ ?>
				   		<option value="<?php echo $row['id_lokasi']; ?>"><?php echo $row['nama_lok']; ?></option>
				    	<?php } ?>
				   	</select><br><br>
				   	<input onclick="return konfirmasi()" type="submit" name="edit" style="width: 130px;" value="OK">
				   	<input type="submit" name="back" style="width: 130px;" value="Batal">
	 			</form>
	 		</div>
	 	</center>
	 </div>
	 <?php 
	 	include 'sisi.php';
	  ?>
 <div class="c">
 	
 </div>
 </body>
 </html>
 <script type="text/javascript" language="JavaScript">
	 function konfirmasi() {
		 tanya = confirm("apakah ini oke?");
		 if (tanya == true) {
		 	return true;	
		 }else{
		 	return false;
		 }
	 }
 </script>
 <?php
	 if (isset($_POST['edit'])) {
	 	$lokasi = $_POST['id_lokasi'];
	 	$sql = "UPDATE lokasi_detail SET id_lokasi='$lokasi' WHERE id='$id'";
		$query = mysql_query($sql);

		$x = mysql_query("SELECT * FROM barang WHERE id='$id'");
		$xx = mysql_fetch_array($x);
		$xxx = $xx['kode_brg'];

		$y = mysql_query("SELECT * FROM lokasi WHERE id_lokasi='$lokasi'");
 		$yy = mysql_fetch_array($y);
 		$yyy = $yy['nama_lok'];

		$activty_log = "INSERT INTO activty_log VALUES('','$id2',NOW(),'barang dengan kode $xxx dipindahkan dari $hhh ke $yyy','admin')";
			$log = mysql_query($activty_log);

		if ($sql) {
			echo "<script>alert('Berhasil');window.location='lokasi.php?page=1'</script>";
		}
	} else if (isset($_POST['back'])) {
		echo "<script>window.location='lok_barang.php?id_lokasi=".$num."'</script>";
	}
  ?>