 <?php 
	include '../koneksi.php';
	include 'session.php';
	
	$max = "SELECT max(kode_brg) as maxKode FROM barang_detail";
	$rslt = mysql_query($max) or die(mysql_error());
	$dataa  = mysql_fetch_array($rslt);
	$kodeBarang = $dataa['maxKode'];
	$noUrut = (int) substr($kodeBarang, 3, 3);
	$noUrut++;
	$char = "KB";
	$newID = $char . sprintf("%03s", $noUrut);

	$max2 = "SELECT max(no_pengadaan) as maxNo FROM pengadaan";
	$rslt2 = mysql_query($max2) or die(mysql_error());
	$dataa2  = mysql_fetch_array($rslt2);
	$pengadaan = $dataa2['maxNo'];
	$noUrut2 = (int) substr($pengadaan, 3, 3);
	$noUrut2++;
	$char2 = "PB";
	$newID2 = $char2 . sprintf("%03s", $noUrut2);

  ?>
  <html>
 <head>
 	<title>Inventaris</title>
 	
 	<link rel="stylesheet" type="text/css" href="../css/admin_css.css">
 	<link rel="stylesheet" type="text/css" href="../css/tabs.css">
 	<link rel="stylesheet" type="text/css" href="../css/form.css">

 	<style type="text/css">
 		.tambah{
 			width: 90%;
 			height: 500px;
 			background-color: #fff;
 		}
 		.tambah h2{
 			margin: 4px;
 			font-family: paranoid;
 			color: #78909C;
 		}
 		#form input{
 			width: 100%;
 		}
 		.form1 form {
		    margin-left: 0%;
		    margin-top: 0px;
		    float: left;
		    width: 90%;
		    padding-top: 0px;
		    padding-left: 20px;
		    background-color: white;
		    padding-bottom: 0px;
		}
 	</style>
 </head>
 <body>
 	<?php include 'header.php'; ?>
<div class="a">
 <br><br>
 <div class="form1" style="width:100%;">
 <center>
	<div class="tambah">
		<div class="w3-row">
		    <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
		      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 96.5%;">
		      	<h2 align="left">Tambah Suplier</h2>
		      </div>
		    </a>
		<div id="Paris" class="w3-container city" style="display:block">
		    <form method="POST" class="form2">
		    	<h3 style="margin-top: 40px;">Biodata</h3>
		    	<table border="1" style="width: 90%;">
		    		<tr>
		    			<td><p>Nama Suplier</p></td>
		    			<td><input type="text" name="nama_suplier" required></td>
		    		</tr>
		    		<tr>
		    			<td width="15%"><p>Alamat</p></td>
		    			<td><textarea name="alamat" style="width: 100%; color: grey;"></textarea></td>
		    		</tr>
		    	</table><br><br><br><br>
		    	<h3>Kontak</h3>
		    	<table style="width: 90%;">
		    		<tr>
		    			<td width="15%"><p>No Telepon</p></td>
		    			<td><input type="text" name="no_telepon" required maxlength="13"></td>
		    		</tr>
		    		<tr>
		    			<td width="15%"><p>Email</p></td>
		    			<td><input type="email" name="email"></td>
		    		</tr>
		    	</table>
		    	    <input type="submit" name="btn" style="width: 170px; margin-left: 0; margin-top: 20px;" value="Tambah" required>
		    </form>
		</div>
	</div>
	<script>
			function openCity(evt, cityName) {
			  var i, x, tablinks;
			  x = document.getElementsByClassName("city");
			  for (i = 0; i < x.length; i++) {
			     x[i].style.display = "none";
			  }
			  tablinks = document.getElementsByClassName("tablink");
			  for (i = 0; i < x.length; i++) {
			     tablinks[i].className = tablinks[i].className.replace(" w3-border-bagong", "");
			  }
			  document.getElementById(cityName).style.display = "block";
			  evt.currentTarget.firstElementChild.className += " w3-border-bagong";
			}
		</script>
</center>	
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
 	if (isset($_POST['btn'])) {
 		$nama = $_POST['nama_suplier'];
 		$alamat = $_POST['alamat'];
 		$no = $_POST['no_telepon'];
 		$email = $_POST['email'];

 		if (is_numeric($no) == TRUE) {
 			$sql = "INSERT INTO suplier VALUES('','$nama','$alamat','$no','$email')";
 			$query = mysql_query($sql);

	 		$activty_log = "INSERT INTO activty_log VALUES('','$id',NOW(),' suplier $nama berhasil ditambahkan','admin')";
			$log = mysql_query($activty_log);	

 			if ($query) {
 				echo "<script>alert('berhasil :)')</script>";	
 			} else {
 				echo "<script>alert('gagal :(')</script>";
 			}
 		} else {
 			echo "<script>alert('masukan no telepon yang bener')</script>";
 		}
 	}
  ?>