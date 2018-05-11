<?php 
	include ('../koneksi.php');
	include 'session.php';
	include 'pagination.php';
//        koneksi ke database
        $koneksi = mysql_connect('localhost', 'root', '');
        $db = mysql_select_db('zvikri');
        
//        query
        $sql = "SELECT * FROM barang INNER JOIN jenis_brg ON barang.id_jenis=jenis_brg.id_jenis WHERE barang.status_brg='repair' ORDER BY barang.merk_brg DESC";
	 	$result = mysql_query($sql);
        
        //pagination config start
        $rpp = 10; // jumlah record per halaman
        $reload = "barang_repair.php?pagination=true&page=1";
        $page = intval($_GET["page"]);
        if($page<=0) $page = 1;  
        $tcount = mysql_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
 ?>
 <html>
 <head>
 	<title>Inventaris</title>
 	
 	<link rel="stylesheet" type="text/css" href="../css/admin_css.css">
 	<link rel="stylesheet" type="text/css" href="../css/table.css">
 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
 </head>
 <body>
 <?php 
    include 'header.php';
  ?>
	 <div class="a">
	 	<h1>Barang Repair</h1>
	 	<div class="a3">
	 		<table>
	 			<tr>
	 				<th>#</th>
	 				<th>Jenis</th>
	 				<th>Deskripsi</th>
	 				<th>kode</th>
	 				<th>Merk</th>
	 				<th>No Seri</th>
	 				<th>Status</th>
	 				<th>Tool</th>
	 			</tr>
	 			<?php
                    while(($count<$rpp) && ($i<$tcount)) {
                        mysql_data_seek($result,$i);
                        $data = mysql_fetch_array($result);
                    ?>
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
                        if ($data['status_brg']=='baru') { ?>
                            <td style="color: #00E676; letter-spacing: 2px;" width='12%'>Baru</td>
                        <?php } elseif ($data['status_brg']=='selesai repair') { ?>
                            <td style="color: #FF9800; letter-spacing: 2px;" width='12%'>Selesai Repair</td>
                        <?php } elseif ($data['status_brg']=='terbuang') { ?>
                            <td style="color: #424242; letter-spacing: 2px;" width='12%'>Terbuang</td>
                        <?php } elseif ($data['status_brg']=='rusak') { ?>
                            <td style="color: #EF5350; letter-spacing: 2px;" width='12%'>Rusak</td>
                        <?php } else { ?>
                            <td style="color: grey; letter-spacing: 2px;" width='12%'>Repair</td> 
                         <?php }
 				 		echo "<td width='19%'><a href='selesai_repair.php?id=". $data['id'] ."'><button id='plus'>Selesai repair</button></a>";
                         ?>
                    </tr>
                    <?php
                        $i++; 
                        $count++;
                    }
                    ?>
	 		</table>
	 	</div>
	 	<div class="pagination" style="float: left; margin-left: 22px; margin-top: -4px;"><?php echo paginate_one($reload, $page, $tpages); ?></div>
	    <a href="inventori.php"><button>Kembali</button></a>
        <a href="print_barangbaru.php"><button>Print</button></a>
     </div>
  <?php 
	 	include 'sisi.php';
	  ?>
 <div class="c">

 </div>
 </body>
 </html>