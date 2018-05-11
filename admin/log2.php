<?php 
	include ('../koneksi.php');
	include 'session.php';
	include 'pagination.php';

	$sql =  "SELECT * FROM user_log INNER JOIN admin ON user_log.id=admin.id ORDER BY user_log.id DESC";
        $result = mysql_query($sql);
        
        //pagination config start
        $rpp = 4; // jumlah record per halaman
        $reload = "log2.php?pagination=true&page=1";
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
		 		<h1>User Log</h1><hr>
		 		<br>
		 		<?php
                    while(($count<$rpp) && ($i<$tcount)) {
                        mysql_data_seek($result,$i);
                        $data = mysql_fetch_array($result);
                        $date = $data['login_date'];
						$date = date('H:i', strtotime($date));
						$date2 = $data['logout_date'];
						$date2 = date('H:i', strtotime($date2));
						$tanggal = $data['login_date'];
						$tanggal = date('d-M-20y', strtotime($tanggal));
                    ?>
                    	<div class="user_log">
                    		<div class="photo">
                    			<img src="../gambar_profile/<?php echo $data['nama_gambar']; ?>">
                    		</div>
                    		<h3><?php echo $data['nama_depan']; ?></h3>
                    		<i style="float: right; margin-top: -15px; opacity: 0.8;"><?php echo $tanggal; ?></i>
                    		<p>Login pada pukul <i style="margin-left: -4px;"><?php echo $date; ?></i> 
                    		& logout pukul <i><?php echo $date2; ?></i></p>
                    	</div>
                    <?php
                        $i++; 
                        $count++;
                    } ?>
                <div class="pagination" style="float: left; margin-left: 22px; margin-top: 5px;">
                	<?php echo paginate_one($reload, $page, $tpages); ?>		
                </div>
                <a href="log.php?page=1">
                	<button>activity log</button>
                </a>
                <a href="inventori.php">
                	<button style="width: 90px;">Kembali</button>
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