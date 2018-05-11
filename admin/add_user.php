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
 			height: 600px;
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
		      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 46%;"><h2>Tahap 1</h2></div>
		    </a>
		    <a href="javascript:void(0)" onclick="openCity(event, 'London');">
		      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 46.65%; float: right;"><h2>Tahap 2</h2></div>
		    </a>
		</div>
		<form method="POST" enctype="multipart/form-data">
		<div id="London" class="w3-container city" style="display:none; padding: 15;">
		    <div id="form" class="tahap2">
		    	<h3>Akun</h3>
		            <table style="width: 80%;" border="0">
		            	<tr>
		            		<td width="20%"><p style="font-size: 15px;">Username</p></td>
		            		<td><input type="text" name="username" placeholder="Username" required></td>
		            	</tr>
		            	<tr>
		            		<td><p style="font-size: 15px;">Password</p></td>
		            		<td><input type="text" name="password" placeholder="Password" required></td>
		            	</tr>
		            </table>
		        <h3 style="margin-top: 120px;">Verifikasi</h3>
		            <table style="width: 80%;" border="0">
		            	<tr>
		            		<td width="20%"><p style="font-size: 15px;">Pertanyaan</p></td>
		            		<td>
		            			<select name="pertanyaan" style="margin-top: 0; height: 40px;">
		            				<option>siapa nama hewan peliharaan anda?</option>
		            				<option>siapa nama ibu kandung anda?</option>
		            				<option>siapa orang yang anda paling disukai?</option>
		            				<option>siapa artis favorite anda?</option>
		            				<option>apa makanan favorite anda?</option>
		            				<option>penyakit apakah yang sering menyerang anda?</option>
		            				<option>anak ke berapakah anda?</option>
		            			</select>
		            		</td>
		            	</tr>
		            	<tr>
		            		<td><p style="font-size: 15px;">Jawaban</p></td>
		            		<td><input type="text" name="jawaban" placeholder="Jawaban" required></td>
		            	</tr>
		            </table>
		        <h3 style="margin-top: 120px;">Foto Profile</h3>
		            <table style="width: 80%;" border="0">
		            	<tr>
		            		<td width="20%"><p style="font-size: 15px;">Upload</p></td>
		            		<td><input type="file" name="gambaree" style="border:0;"></td>
		            	</tr>
		            </table> 
		            <br>
		            <input type="submit" name="btn" value="Tambah" style="width: 150px; float: left;">       
    		</div>
		</div>

		<div id="Paris" class="w3-container city" style="display:block">
		    <div class="form2">
		    	<h3>Biodata</h3>
		    	<table border="1">
		    		<tr>
		    			<td width="26%;"><p>Kode User</p></td>
		    			<td colspan="3"><input type="text" name="kode_user" value="<?php echo $newID2; ?>" readonly></td>
		    		</tr>
		    		<tr>
		    			<td><p>Nama Depan</p></td>
		    			<td colspan="3"><input type="text" name="nama_depan" placeholder="Nama Depan" required></td>
		    		</tr>
		    		<tr>
		    			<td><p>Nama Belakang</p></td>
		    			<td colspan="3"><input type="text" placeholder="Nama Belakang" name="nama_belakang"></td>
		    		</tr>
		    		<tr>
		    			<td><p>Umur</p></td>
		    			<td colspan="3"><input type="number" name="umur" style="width: 80px;"></td>
		    		</tr>
		    		<tr>
		    			<td><p>Tanggal lahir</p></td>
		    			<td>
		    				<select name="tahun">
		    					<?php 
		    						for ($i=1950; $i < 2010; $i++) { 
		    							echo " <option value='$i'>".$i."</option>";
		    						}
		    					 ?>
		    				</select>
		    			</td>
		    			<td>
		    				<select name="bulan">
		    					<option value="01">Januari</option>
		    					<option value="02">February</option>
		    					<option value="03">Maret</option>
		    					<option value="04">April</option>
		    					<option value="05">Mei</option>
		    					<option value="06">Juni</option>
		    					<option value="07">Juli</option>
		    					<option value="08">Agustus</option>
		    					<option value="09">September</option>
		    					<option value="10">Oktober</option>
		    					<option value="11">November</option>
		    					<option value="12">Desember</option>
		    				</select>
		    			</td>
		    			<td>
		    				<select name="hari">
		    					<?php 
		    						for ($i=1; $i < 32; $i++) { 
		    							echo " <option value='$i'>".$i."</option>";
		    						}
		    					 ?>
		    				</select>
		    			</td>
		    		</tr>
		    		<tr>
		    			<td><p>Alamat</p></td>
		    			<td colspan="3"><textarea name="alamat" style="width: 100%;" placeholder="Alamat"></textarea></td>
		    		</tr>
		    	</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		    	<h3 style="margin-top: 10px;">Kontak</h3>
		    	<table border="1">
		    		<tr>
		    			<td width="26%"><p>No. Telp</p></td>
		    			<td><input type="text" name="no_telepon" placeholder="08928xxxx"></td>
		    		</tr>
		    		<tr>
		    			<td width="26%"><p>E-Mail</p></td>
		    			<td><input type="email" name="email" placeholder="zzz@gmail.com"></td>
		    		</tr>
		    	</table>
		    		<br><br><br><br><br><br>
		    		<a href="javascript:void(0)" onclick="openCity(event, 'London');" style="float: left; margin-left: 20px;">Lanjut</a>
		    </div>
		</div>
		</form>
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
 		$username = $_POST['username'];
 		$password = $_POST['password'];
 		$kode = $_POST['kode_user'];
 		$nama = $_POST['nama_depan'];
 		$nama_belakang = $_POST['nama_belakang'];
 		$no_telepon = $_POST['no_telepon'];
 		$pertanyaan = $_POST['pertanyaan'];
 		$jawaban = $_POST['jawaban'];
 		$nama_gambar = $_FILES['gambaree']['name'];
 		$ukuran = $_FILES['gambaree']['size'];
 		$tipe = $_FILES['gambaree']['type'];
 		$tmp_file = $_FILES['gambaree']['tmp_name'];
 		$umur = $_POST['umur'];
 		$alamat = $_POST['alamat'];
 		$email = $_POST['email'];

 		$path = "../gambar_profile/".$nama_gambar;

 		if ($tipe == "../gambar_profile/jpeg" || "../gambar_profile/png") {
 			if ($ukuran <= 2000000) {
 				if (move_uploaded_file($tmp_file, $path)) {
 					$sql = "INSERT INTO pegawai VALUES('','$username','$password','$nama','$nama_belakang','$no_telepon','$email','$umur','$alamat','$pertanyaan','$jawaban','$nama_gambar','$ukuran','$tipe')";
 					$query = mysql_query($sql);

 					$activty_log = "INSERT INTO activty_log VALUES('','$id',NOW(),'kode pegawai $kode bernama $nama kali ini sebagai pegawai baru ','admin')";
					$log = mysql_query($activty_log);	
 					
 					if ($query) {
 						echo "<script>alert('berhasil :)');window.location='inventori.php'</script>";
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