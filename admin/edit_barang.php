 <?php 
	include '../koneksi.php';
	include 'session.php';
	$idbarang = $_GET['id'];
	$data = mysql_fetch_array(mysql_query("SELECT * FROM barang INNER JOIN jenis_brg ON barang.id_jenis=jenis_brg.id_jenis WHERE id='$idbarang'"));
  ?>
  <html>
 <head>
 	<title>Inventaris</title>
 	
 	<link rel="stylesheet" type="text/css" href="../css/admin_css.css">
 	<link rel="stylesheet" type="text/css" href="../css/tabs.css">
 	<link rel="stylesheet" type="text/css" href="../css/profile.css">

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
		.profile_photo{
			margin-top: 30px;
			margin-left: 25px;
			width: 35%;
			height: 70%;
			float: left;
			background-image: url("../img/a.jpg");
			background-size: cover;
			background-position: center;
			opacity: 0.8;
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
		      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 46%;"><h2>Barang</h2>
		      </div>
		    </a>
		    <a href="javascript:void(0)" onclick="openCity(event, 'London');">
		      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 46.65%; float: right;"><h2>Edit Barang</h2></div>
		    </a>
		</div>
		<div id="Paris" class="w3-container city" style="display:block">
		   <div class="profile_photo" id="photo">
		   		
		   </div>
		   <div class="profile_bio">
		   		<h1><?php echo $data['kode_brg']; ?></h1>
		   		<hr>
		   		<table>
		   			<tr>
		   				<td width="23%">
		   					<p><b>Jenis</b></p>
		   				</td>
		   				<td><p id="bio"><b><?php echo ": ".$data['nama']; ?></b></p></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<p><b>Merk/Nama</b></p>
		   				</td>
		   				<td><p id="bio"><b>: <?php echo $data['merk_brg']; ?></b></p></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<p><b>No.Seri</b></p>
		   				</td>
		   				<td><p id="bio"><b>: <?php echo $data['no_seri']; ?></b></p></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<p><b>Deskripsi</b></p>
		   				</td>
		   				<td><p id="bio"><b>: <?php echo $data['deskripsi_brg']; ?></b></p></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<p><b>Status</b></p>
		   				</td>
		   				<td><p id="bio"><b>: <?php echo $data['status_brg']; ?></b></p></td>
		   			</tr>
		   			<tr>
		   				<td colspan="2">
		   					<a href="javascript:void(0)" onclick="openCity(event, 'London');">
		   						<button>Ubah Profile</button>
		   					</a>
		   					<a href="inventori.php">
		   						<button style="margin-left: 20px;">Kembali</button>
		   					</a>
		   				</td>
		   			</tr>
		   		</table>
		   </div>
		</div>
		<div id="London" class="w3-container city" style="display:none;">
		    <div class="profile_photo">
		   		
		   </div>
		   <div class="profile_bio" id="edit_profile">
		   	<form method="POST">
		   		<h1>Edit Barang</h1>
		   		<hr>
		   		<table>
		  	 		<tr>
		   				<td><p><b>Kode Barang</b></p></td>
		   				<td colspan="2">
		   					<input readonly type="text" value="<?php echo $data['kode_brg']; ?>" maxlength="15" name="kode_brg" style="float: left;">
		   				</td>
		   			</tr>
		   			<tr>
		   				<td width="20%"><p><b>Jenis</b></p></td>
		   				<td colspan="2">
		   					<input type="text" name="nama_depan" readonly value="<?php echo $data['nama']; ?>"  style="float: left;">
		   					<select style="width: 50%; padding: 7px;" name="jenis">
		   						<option value="pilih">-Pilih Jenis-</option>
		   						<?php
		   						$sql2 = mysql_query("SELECT * FROM jenis_brg");
		   						while ($jenis = mysql_fetch_array($sql2)) { ?>
									<option value="<?php echo $jenis['id_jenis']; ?>"><?php echo $jenis['nama']; ?></option>		   						 	
		   						<?php } ?>
		   					</select>
		   				</td>
		   			</tr>
		   			<tr>
		   				<td><p><b>Merk/Nama</b></p></td>
		   				<td colspan="2">
		   					<input type="text" value="<?php echo $data['merk_brg']; ?>" name="merk_brg" style="float: left;">
		   				</td>
		   			</tr>
		   			<tr>
		   				<td><p><b>No.Seri</b></p></td>
		   				<td>
		   					<input type="text" name="no_seri" style="float: left; width: 100%;" value="<?php echo $data['no_seri']; ?>">
		   				</td>
		   			</tr>
		   			<tr>
		   				<td><p><b>Deskripsi</b></p></td>
		   				<td colspan="2"><textarea name="deskripsi"><?php echo $data['deskripsi_brg']; ?></textarea></td>
		   			</tr>
		   			<tr>
		   				<td colspan="2"><button name="btn">Selesai</button></td>
		   			</tr>
		   		</table>
		   	</form>	
		   </div>
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
	
	if(isset($_POST['btn'])){
		$jenis = $_POST['jenis'];
		$merk = $_POST['merk_brg'];
		$seri = $_POST['no_seri'];
		$deskripsi = $_POST['deskripsi'];

		if ($jenis == 'pilih') {
			echo "<script>alert('Pilih salah satu jenis')</script>";
		} else {
			$bagong = "UPDATE barang SET id_jenis='$jenis', deskripsi_brg='$deskripsi', merk_brg='$merk', no_seri='$seri' WHERE id='$idbarang'";
			$gong = mysql_query($bagong);	
			
			if ($bagong) {
				echo "<script>alert('berhasil');window.location='semua_brg.php?page=1'</script>";
			} else {
				echo "<script>alert('gagal')</script>";
			}
		}
	}	
  ?>