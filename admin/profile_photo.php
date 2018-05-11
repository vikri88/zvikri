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
		      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 96%;"><h2>Photo Profile</h2>
		      </div>
		    </a>
		</div>
		<div id="Paris" class="w3-container city" style="display:block">
		   <div class="profile_photo" id="photo">
		   		
		   </div>
		   <div class="profile_bio">
		   		<h1><?php echo $b['nama_depan']." ".$b['nama_belakang']; ?></h1>
		   		<hr>
		   		<table>
		   			<form method="POST" enctype="multipart/form-data">
		   			<tr>
		   				<td><input type="file" name="gambaree"></td>
		   			</tr>
		   			<tr>
		   				<td colspan="2">
		   						<button name="btn">Ubah Profile</button>
		   					<a href="inventori.php">
		   						<button style="margin-left: 20px;">Kembali</button>
		   					</a>
		   				</td>
		   			</tr>
		   			</form>
		   		</table>	
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
		$nama_gambar = $_FILES['gambaree']['name'];
 		$ukuran = $_FILES['gambaree']['size'];
 		$tipe = $_FILES['gambaree']['type'];
 		$tmp_file = $_FILES['gambaree']['tmp_name'];

 		$path = "../gambar_profile/".$nama_gambar;

		if ($tipe == "../gambar_profile/jpeg" || "../gambar_profile/png") {
 			if ($ukuran <= 2000000) {
 				if (move_uploaded_file($tmp_file, $path)) {
 					$sql = "UPDATE admin SET nama_gambar='$nama_gambar' WHERE id='$id'";
					$query = mysql_query($sql);
 					if ($query) {
 						echo "<script>alert('berhasil :)');window.location='profile.php'</script>";
 					} else {
 						echo "<script>alert('gagal :(')</script>";
 					}
 				} else {
 					echo "<script>alert('kesalahan di folder :(')</script>";
 				}
 			} else {
 				echo "<script>alert('kesalahan di ukuran terlalu gede :(')</script>";
 			}
 		} else {
			echo "<script>alert('hanya butuh gambar selain itu up :)')</script>";

 		}
	}	
  ?>