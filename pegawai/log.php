<?php 
	include ('../koneksi.php');
	include 'session.php';
	include 'pagination.php';

	$sql =  "SELECT * FROM activty_log INNER JOIN admin ON activty_log.id=admin.id  ORDER BY activty_log.id_activity DESC";
        $result = mysql_query($sql);
        
        //pagination config start
        $rpp = 4; // jumlah record per halaman
        $reload = "log.php?pagination=true&page=1";
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
 	<link rel="stylesheet" type="text/css" href="../css/log.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

 </head>
 <body>
 	<?php 
 		include 'header.php';
 	 ?>
 </div>
	 <div class="a">
	 	<center>
		 	<div class="log">
		 		<h1>Activity Log</h1><hr>
		 		<br>
		 		<?php
                    while(($count<$rpp) && ($i<$tcount)) {
                        mysql_data_seek($result,$i);
                        $data = mysql_fetch_array($result);
                        $date = $data['date'];
                        $tanggal = date('G:i', strtotime($date));
						$date = date('h:i', strtotime($date)); 
                        ?>
                    	<div class="user_log">
                    		<div class="photo">
                    			<img src="../gambar_profile/<?php echo $data['nama_gambar']; ?>">
                    		</div>
                    		<h3><?php echo $data['nama_depan']; ?></h3>
                    		<i style="float: right; margin-top: -15px; opacity: 0.8;"><?php echo $tanggal; ?></i>
                    		<p><?php echo $data['action']; ?></p>
                    	</div>
                    <?php
                        $i++; 
                        $count++;
                    } ?>
                <div class="pagination" style="float: left; margin-left: 22px; margin-top: 5px;">
                	<?php echo paginate_one($reload, $page, $tpages); ?>		
                </div>
                <a href="log2.php?page=1">
                	<button>User log</button>
                </a>
                <a href="inventori.php">
                	<button>Kembali</button>
                </a>    
		 	</div>
	 	</center>
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
		 tanya = confirm("Yakinn dipecat ?");
		 if (tanya == true) {
		 	return true;	
		 }else{
		 	return false;
		 }
	 }
 </script>