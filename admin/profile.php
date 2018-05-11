 <?php 
	include '../koneksi.php';
	include 'session.php';
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
			background-image: url("../gambar_profile/<?php echo $b['nama_gambar']; ?>");
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
		      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 46%;"><h2>Profile</h2>
		      </div>
		    </a>
		    <a href="javascript:void(0)" onclick="openCity(event, 'London');">
		      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 46.65%; float: right;"><h2>Edit Profile</h2></div>
		    </a>
		</div>
		<div id="Paris" class="w3-container city" style="display:block">
		   <div class="profile_photo" id="photo">
		   		
		   </div>
		   <div class="profile_bio">
		   		<h1><?php echo $b['nama_depan']." ".$b['nama_belakang']; ?></h1>
		   		<hr>
		   		<table>
		   			<tr>
		   				<td width="23%">
		   					<p><b>Umur</b></p>
		   				</td>
		   				<td><p id="bio"><b><?php echo ":".$b['umur']; ?></b></p></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<p><b>Alamat</b></p>
		   				</td>
		   				<td><p id="bio"><b>: <?php echo $b['alamat']; ?></b></p></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<p><b>E-Mail</b></p>
		   				</td>
		   				<td><p id="bio"><b>: <?php echo $b['email']; ?></b></p></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<p><b>No. Telp</b></p>
		   				</td>
		   				<td><p id="bio"><b>: <?php echo $b['no_telepon']; ?></b></p></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<p><b>Status</b></p>
		   				</td>
		   				<td><p id="bio"><b>: Admin</b></p></td>
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
		   		<div class="edit_profile">
		   			<a href="profile_photo.php">Ganti Photo</a>
		   		</div>
		   </div>
		   <div class="profile_bio" id="edit_profile">
		   	<form method="POST">
		   		<h1>Edit Profile</h1>
		   		<hr>
		   		<table>
		   			<tr>
		   				<td width="20%"><p><b>Nama</b></p></td>
		   				<td colspan="2">
		   					<input type="text" name="nama_depan" value="<?php echo $b['nama_depan']; ?>"  style="float: left;">
		   					<input type="text" name="nama_belakang" value="<?php echo $b['nama_belakang']; ?>">
		   				</td>
		   			</tr>
		   			<tr>
		   				<td><p><b>Umur</b></p></td>
		   				<td colspan="2">
		   					<input type="text" value="<?php echo $b['umur']; ?>" name="umur" style="float: left;">
		   				</td>
		   			</tr>
		   			<tr>
		   				<td><p><b>Alamat</b></p></td>
		   				<td colspan="2"><textarea name="alamat"><?php echo $b['alamat']; ?></textarea></td>
		   			</tr>
		   			<tr>
		   				<td><p><b>E-Mail</b></p></td>
		   				<td>
		   					<input type="email" name="email" style="float: left; width: 100%;" value="<?php echo $b['email']; ?>">
		   				</td>
		   			</tr>
		   			<tr>
		   				<td><p><b>No. Telp</b></p></td>
		   				<td colspan="2">
		   					<input type="text" value="<?php echo $b['no_telepon']; ?>" maxlength="15" name="notel" style="float: left;">
		   				</td>
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
		$nama_depan = $_POST['nama_depan'];
		$nama_belakang = $_POST['nama_belakang'];
		$umur = $_POST['umur'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$notel = $_POST['notel'];

		$sql = "UPDATE admin SET nama_depan='$nama_depan', nama_belakang='$nama_belakang', umur='$umur', alamat='$alamat', email='$email', no_telepon='$notel' WHERE id='$id'";
		$query = mysql_query($sql);

		if ($query) {
			echo "<script>alert('berhasil');window.location='profile.php'</script>";
		} else {
			echo "<script>alert('gagal')</script>";
		}
	}	
  ?>