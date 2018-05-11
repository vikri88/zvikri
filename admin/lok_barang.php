<?php 
	include ('../koneksi.php');
	include 'session.php';
	include 'pagination.php';

	$query = mysql_query("SELECT * FROM lokasi")or die(mysql_error());
	$lok = mysql_fetch_array($query);
	$a = $_GET['id_lokasi'];
 ?>
 <html>
 <head>
 	<title>Inventaris</title>
 	
 	<link rel="stylesheet" type="text/css" href="../css/admin_css.css">
 	<link rel="stylesheet" type="text/css" href="../css/table.css">
 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">


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
	 	<a href="laporan_barang_lokasi.php?id_lokasi=<?php echo $a; ?>"><button>Print</button></a>
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
		 	$result = mysql_query($sql);
		 		//pagination config start
	        $rpp = 7; // jumlah record per halaman
	        $reload = "lok_barang.php?id_lokasi=$a&pagination=true&page=1";
	        $page = intval($_GET["page"]);
	        if($page<=0) $page = 1;  
	        $tcount = mysql_num_rows($result);
	        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
	        $count = 0;
	        $i = ($page-1)*$rpp;
	        $no_urut = ($page-1)*$rpp;

	 		
	 		if ($tcount < 1) {
	 			echo "<tr>";
	 			echo "<td colspan='8'>";
	 			echo "No Item :(";
	 			echo "</td>";
	 			echo "</tr>";
	 		} else {

		 		while(($count<$rpp) && ($i<$tcount)) {
                        mysql_data_seek($result,$i);
                        $data = mysql_fetch_array($result); ?>
            	
            	<tr>
                    <td>
						<?php echo ++$no_urut;?> 
                    </td>
                        <?php 
                        echo "<td>". $data['nama'] ."</td>";
                        echo "<td>". $data['deskripsi_brg'] . "</td>";
                        echo "<td>". $data['kode_brg'] ."</td>";
                        echo "<td>". $data['merk_brg'] ."</td>";
                        echo "<td>". $data['no_seri'] ."</td>";
                        echo "<td>". $data['status_brg'] ."</td>";
                        echo "<td width='20%'><a href='pindah_brg.php?id=". $data['id'] ."&id_lokasi=".$a."'><button id='plus'>transfer</button</a>";
                         ?>
                    </tr>

            <?php
             		$i++; 
					$count++; 
		        } 
			} 
			?>
 		</table>
	 	</div>
	 	<div class="pagination" style="float: left; margin-left: 22px; margin-top: -4px;"><?php echo paginate_one($reload, $page, $tpages); ?></div>
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