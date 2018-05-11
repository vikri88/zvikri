<?php 
	include ('../koneksi.php');
	include 'session.php';

	$query = mysql_query("SELECT * FROM lokasi")or die(mysql_error());
	$lok = mysql_fetch_array($query);
	$a = $_GET['id_lokasi'];
 ?>
 <html>
 <head>
 	<title>Inventaris</title>
 	
 	<link rel="stylesheet" type="text/css" href="../css/admin_css.css">
 	<link rel="stylesheet" type="text/css" href="../css/table.css">

 	<style type="text/css">
 		
 	</style>
 </head>
 <body>
 <?php 
 	include 'header.php';
  ?>
	 <div class="a">
	 	<?php 
	 		$oo = mysql_query("SELECT * FROM lokasi where id_lokasi='$a'");
	 		$ooo = mysql_fetch_array($oo);
	 	 ?>
	 	<h1><?php echo $ooo['nama_lok']; ?></h1>
	 	<a href="lokasi.php?page=1"><button>Kembali</button></a>
	 	<div class="a3">
	 	<table border="0">
	 		<tr>
	 			<th>#</th>
	 			<th>Jenis</th>
	 			<th>Keterangan</th>
	 			<th>Kode Inventaris</th>
	 			<th>Merk</th>
	 			<th>Serial Kode</th>
	 			<th>Status</th>
	 			<th>Aksi</th>
	 		</tr>
	 		<?php

	 		$sql = "SELECT * FROM lokasi_detail LEFT JOIN barang ON lokasi_detail.id=barang.id
	 											LEFT JOIN jenis_brg ON barang.id_jenis=jenis_brg.id_jenis 
	 											WHERE id_lokasi='$a' AND barang.status_brg='terpakai' ORDER BY date DESC";
	 		$hasil = mysql_query($sql);
			$num = mysql_num_rows($hasil);
	 		
	 		if ($num < 1) {
	 			echo "<tr>";
	 			echo "<td colspan='8'>";
	 			echo "No Item :(";
	 			echo "</td>";
	 			echo "</tr>";
	 		} else {

		 		while ($data = mysql_fetch_array($hasil)) {
		 			echo "<tr>";
		 			echo "<td>1</td>";
		 			echo "<td>". $data['nama'] ."</td>";
		 			echo "<td>". $data['deskripsi_brg'] . "</td>";
		 			echo "<td>". $data['kode_brg'] ."</td>";
		 			echo "<td>". $data['merk_brg'] ."</td>";
		 			echo "<td>". $data['no_seri'] ."</td>";
		 			echo "<td>". $data['status_brg'] ."</td>";
		 			
		 			echo "<td><a onclick='return konfirmasi()' href='rusak.php?id=". $data['id'] ."' style='color:lightsalmon;'>Rusak </a> |";
		 			echo "<a href='pindah_brg.php?id=". $data['id'] ."&id_lokasi=".$a."'> Transfer</a></td>";
		 			echo "</tr>";
		 		}
		 	}
	 	
	 		 ?>
 		</table>
	 	</div>
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
		 tanya = confirm("Yakinn barang rusak?");
		 if (tanya == true) {
		 	return true;	
		 }else{
		 	return false;
		 }
	 }
 </script>