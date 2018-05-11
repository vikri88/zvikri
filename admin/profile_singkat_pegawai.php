 <?php 
	include '../koneksi.php';
	include 'session.php';
	$idpro = $_GET['idpro'];
	$sql = mysql_query("SELECT * FROM pegawai WHERE id='$idpro'");
	$pro = mysql_fetch_array($sql);
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
			background-image: url("../gambar_profile/<?php echo $pro['nama_gambar']; ?>");
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
		      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 96.5%;">
		      	<h2>Profile <?php  ?></h2>
		      </div>
		    </a>
		</div>
		<div id="Paris" class="w3-container city" style="display:block">
		   <div class="profile_photo" id="photo">
		   		
		   </div>
		   <div class="profile_bio">
		   		<h1><?php echo $pro['nama_depan']." ".$pro['nama_belakang']; ?></h1>
		   		<hr>
		   		<table>
		   			<tr>
		   				<td width="23%">
		   					<p><b>Umur</b></p>
		   				</td>
		   				<td><p id="bio"><b><?php echo ":".$pro['umur']; ?></b></p></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<p><b>Alamat</b></p>
		   				</td>
		   				<td><p id="bio"><b>: <?php echo $pro['alamat']; ?></b></p></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<p><b>E-Mail</b></p>
		   				</td>
		   				<td><p id="bio"><b>: <?php echo $pro['email']; ?></b></p></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<p><b>No. Telp</b></p>
		   				</td>
		   				<td><p id="bio"><b>: <?php echo $pro['no_telepon']; ?></b></p></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<p><b>Status</b></p>
		   				</td>
		   				<td><p id="bio"><b>: Pegawai</b></p></td>
		   			</tr>
		   			<tr>
		   				<td colspan="2">
		   					<a href="list_pegawai.php">
		   						<button>Kembali</button>
		   					</a>
		   				</td>
		   			</tr>
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