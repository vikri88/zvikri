<?php 
	include ('../koneksi.php');
	include 'session.php';

	include 'pagination.php';
//        koneksi ke database
        $koneksi = mysql_connect('localhost', 'root', '');
        $db = mysql_select_db('zvikri');
        
//        query
        $sql = "SELECT * FROM pengadaan INNER JOIN barang_detail ON pengadaan.id_barang=barang_detail.id_barang INNER JOIN suplier ON pengadaan.id_suplier=suplier.id_suplier INNER JOIN pegawai ON pengadaan.id_petugas=pegawai.id INNER JOIN jenis_brg ON barang_detail.id_jenis=jenis_brg.id_jenis ORDER BY pengadaan.tanggal DESC";
        $result = mysql_query($sql);
        
        //pagination config start
        $rpp = 7; // jumlah record per halaman
        $reload = "barang_baru.php?pagination=true&page=1";
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
	 	<h1>Laporan Pengadaan Barang</h1>
	 	<div class="a3"> 
	 		<table>
	 			<tr>
	 				<th>#</th>
	 				<th>No.</th>
	 				<th>Barang</th>
	 				<th>Kode Barang</th>
	 				<th>Supplier</th>
	 				<th>Petugas</th>
                    <th>Jenis</th>
	 				<th>Tanggal</th>
	 				<th>Harga</th>
                    <th>Jumlah</th>
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
                        <td><?php echo $data['no_pengadaan']; ?></td>
                        <td><?php echo $data['nama']." [".$data['merk_brg']."]"; ?></td>
                        <td><?php echo $data['kode_brg']; ?></td>
                        <td><?php echo $data['nama_sup']; ?></td>
                        <td><?php echo $data['nama_depan']; ?></td>
                        <td><?php echo $data['jenis_pengadaan']; ?></td>
                        <td><?php echo $data['tanggal']; ?></td>
                        <td><?php echo $data['harga']; ?></td>
                        <td><?php echo $data['jumlah']; ?></td>
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
        <a href="laporan_pengadaan.php"><button>Print</button></a>
	 </div>
	  <?php 
	 	include 'sisi.php';
	  ?>
 <div class="c">

 </div>
 </body>
 </html>