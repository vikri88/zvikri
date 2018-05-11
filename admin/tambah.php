 <?php 
	include '../koneksi.php';
	include 'session.php';
	
	$max = "SELECT max(kode_brg) as maxKode FROM barang_detail";
	$rslt = mysql_query($max) or die(mysql_error());
	$dataa  = mysql_fetch_array($rslt);
	$kodeBarang = $dataa['maxKode'];
	$noUrut = (int) substr($kodeBarang, 13, 3);
	$noUrut++;
	$char = "SMKN02/00/00-";
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
		      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 46%;"><h2>Pengadaan Barang</h2></div>
		    </a>
		    <a href="javascript:void(0)" onclick="openCity(event, 'London');">
		      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 46.65%; float: right;"><h2>Tambah Barang</h2></div>
		    </a>
		</div>
		<div id="London" class="w3-container city" style="display:none;">
		    <form method="POST" id="form">
		    <h3>Tambah Barang</h3>
		    <br>
            <table border="0" style="width:100%; float: left; margin-left: 20px;">
                <tr>
                    <td style="text-align: left;" width="20%"><p>Kategori</p></td>
                    <td>
                        <select name="jenis">
                            <?php 
                                $nama_brg=mysql_query("SELECT * FROM jenis_brg")or die(mysql_error()); 
                                while ($hasil=mysql_fetch_array($nama_brg)){ ?>
                                    <option value='<?php echo $hasil['id_jenis']; ?>'>
                                <?php echo $hasil['nama']; ?></option>
                                    <?php } ?>
                        </select>
                    </td>
                    <td width="30%">
                    	<a href="add_kategori.php">tambah kategori?</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left;"><p>Kode</p></td>
                    <td colspan="2"><input type="text" name="kode_brg" placeholder="Kode Barang" value="<?php echo $newID; ?>" readonly><br>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left;"><p>Merk</p></td>
                    <td colspan="2"><input type="text" name="merk_brg" placeholder="Merk Barang" required><br></td>
                </tr>
                <tr>
                    <td style="text-align: left;"><p>No Seri</p></td>
                    <td colspan="2"><input type="text" name="no_seri" placeholder="No Seri" required><br></td>
                </tr>
                <tr>
                    <td style="text-align: left;"><p>Deskripsi</p></td>
                    <td colspan="2"><textarea type="text" name="deskripsi_brg" placeholder="Deskripsi barang" required></textarea></td>
                </tr>
                <tr>
                	<td colspan="2">
                		<input type="submit" name="tambah" style="width: 170px;" value="Tambah" required>
                	</td>
                </tr>   
                </table><br><br>
    </form>
		</div>

		<div id="Paris" class="w3-container city" style="display:block;">
		    <form method="POST" class="form2" style="padding-top: 0px;">
		    	<h3>Transaksi</h3>
		    	<table border="1">
		    		<tr>
		    			<td width="26%;"><p>No. Pengadaan</p></td>
		    			<td><input type="text" name="no_pengadaan" value="<?php echo $newID2; ?>" readonly></td>
		    		</tr>
		    		<tr>
		    			<td><p>Tanggal</p></td>
		    			<td><input type="text" name="tanggal" value="<?php echo date("d-M-y"); ?>"></td>
		    		</tr>
		    		<tr>
		    			<td><p>Suplier</p></td>
		    			<td>
			    			<select name="suplier">
	                            <?php 
	                                $suplier=mysql_query("SELECT * FROM suplier")or die(mysql_error()); 
	                                while ($hasil=mysql_fetch_array($suplier)){ ?>
	                                    <option value='<?php echo $hasil['id_suplier']; ?>'>
	                                <?php echo $hasil['nama_sup']; ?></option>
	                            <?php } ?>
	                        </select>
		    			</td>
		    		</tr>
		    		<tr>
		    			<td><p>Jenis Pengadaan</p></td>
		    			<td>
		    				<select name="jenis_pengadaan">
		    					<option value="pembelian">Pembelian</option>
		    					<option value="sumbangan">Sumbangan</option>
		    				</select>
		    			</td>
		    		</tr>
		    		<tr>
		    			<td><p>Keterangan</p></td>
		    			<td><input type="text" name="keterangan"></td>
		    		</tr>
		    	</table><br><br><br><br><br><br><br><br><br><br><br>
		    	<h3 style="margin-top: 10px;">Input Barang</h3>
		    	<table border="1">
		    		<tr>
		    			<td width="26%"><p>Nama Barang</p></td>
		    			<td>
		    				<select name="nama_barang">
	                            <?php 
	                                $nama_barang=mysql_query("SELECT * FROM barang_detail INNER JOIN jenis_brg ON barang_detail.id_jenis=jenis_brg.id_jenis ORDER BY kode_brg DESC")or die(mysql_error()); 
	                                while ($hasil=mysql_fetch_array($nama_barang)){ ?>
	                                    <option value='<?php echo $hasil['id_barang']; ?>'>
	                                <?php echo "". $hasil['nama']. " - [" . $hasil['kode_brg'] . "] " . $hasil['merk_brg'] .""; ?></option>
	                            <?php } ?>
	                        </select>
		    			</td>
		    		</tr>
		    		<tr>
		    			<td><p>Harga Barang</p></td>
		    			<td width="40%"><input type="number" name="harga" placeholder="Rp."></td>
		    			<td width="10%"><p>Jumlah</p></td>
		    			<td><input type="number" name="jumlah" placeholder="jml"></td>
		    		</tr>
		    	</table>
		    	    <input type="submit" name="tambah_pengadaan" style="width: 170px;" value="Tambah" required>
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
	
	if(isset($_POST['tambah'])){
		$jenis = $_POST['jenis'];
		$deskripsi = $_POST['deskripsi_brg'];
		$kode = $_POST['kode_brg'];
		$merk = $_POST['merk_brg'];
		$seri = $_POST['no_seri'];
		
		$queri = mysql_query("SELECT * FROM barang_detail INNER JOIN jenis_brg ON barang_detail.id_jenis=jenis_brg.id_jenis where barang_detail.no_seri='$seri' AND barang_detail.merk_brg='$merk' AND jenis_brg.id_jenis='$jenis'")or die(mysql_error());
		$count = mysql_num_rows($queri);

		$tm = mysql_query("SELECT * FROM barang_detail INNER JOIN jenis_brg ON barang_detail.id_jenis=jenis_brg.id_jenis WHERE barang_detail.id_jenis='$jenis' ORDER BY barang_detail.id_barang");
		$bh = mysql_fetch_array($tm);
		$n = $bh['nama'];

		if ($count > 0) { 
?>
			<script>
				alert('Barang Sudah ada');
			</script>
<?php
		} else {

		$query = "INSERT INTO barang_detail VALUES('','$jenis','$kode','$merk','$seri','$deskripsi')";
		$sql = mysql_query($query);

		$query2 = "INSERT INTO activty_log VALUES('','$id',NOW(),'$n ditambahkan dengan merk $merk & kode $kode','admin')";
		$sql2 = mysql_query($query2);
			
			if($sql2){
				echo "<script>alert('Berhasil');window.location='tambah.php'</script>";
			}else{
				echo "<script>alert('Gagal')</script>";
			}
		}	
	}
 ?>
 <?php 
 	if (isset($_POST['tambah_pengadaan'])) {
 		$jml = $_POST['jumlah'];
 		$jenis_pengadaan = $_POST['jenis_pengadaan'];
 		$no_pengadaan = $_POST['no_pengadaan'];
		$tanggal = $_POST['tanggal'];
		$suplier = $_POST['suplier'];
		$keterangan = $_POST['keterangan'];
		$barang = $_POST['nama_barang'];
		$harga = $_POST['harga'];
	 		
	 		if ($jml < 1) {
	 			echo "<script>alert(':(')</script>";
	 		} else {
	 			if ($jenis_pengadaan == "sumbangan") {
	 				$harga = 0;
	 			}

		 		$y = mysql_query("SELECT * FROM pengadaan INNER JOIN barang_detail ON pengadaan.id_barang=barang_detail.id_barang INNER JOIN jenis_brg ON barang_detail.id_jenis=jenis_brg.id_jenis WHERE pengadaan.id_barang='$barang' ORDER BY barang_detail.id_barang");
		 		$x = mysql_fetch_array($y);
		 		$z = $x['merk_brg'];
		 		$q = $x['nama'];

		 		$insert = "INSERT INTO pengadaan VALUES('','$newID2','$barang','$suplier','$id','$jenis_pengadaan',NOW(),'$harga','$jml','$keterangan')";
		 		$insert_query = mysql_query($insert);

		 		$insert_query2 = "INSERT INTO activty_log VALUES('','$id',NOW(),'$q $z berhasil ditambahkan sebanyak $jml','admin')";
				$insert_sql2 = mysql_query($insert_query2);

		 		if ($insert_sql2) {
		 			echo "<script>alert('Berhasil')</script>";
		 		} else{
		 			echo "<script>alert('Gagal')</script>";
		 		}

		 		$select = mysql_query("SELECT * FROM barang_detail WHERE id_barang='$barang'");
		 		$hasil = mysql_fetch_array($select);

		 		$jenis_id = $hasil['id_jenis'];
		 		$brg_kode = $hasil['kode_brg'];
		 		$brg_merk = $hasil['merk_brg'];
		 		$seri_no = $hasil['no_seri'];

		 		for ($i=0; $i < $jml; $i++) {

		 			$max = "SELECT max(kode_brg) as maxKode FROM barang";
					$rslt = mysql_query($max) or die(mysql_error());
					$dataa  = mysql_fetch_array($rslt);
					$kodeBarang = $dataa['maxKode'];
					$noUrut = (int) substr($kodeBarang, 13, 3);
					$noUrut++;
					$char = "SMKN02/00/".$jenis_id."-";
					$newID3 = $char . sprintf("%03s", $noUrut);

		 			$tambah = mysql_query("INSERT INTO barang VALUES('','$jenis_id','-','$newID3','$brg_merk','$seri_no','baru')");
		 		
		 	}
 		}
 	}
  ?>