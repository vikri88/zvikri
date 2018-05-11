<?php 
	include ('../koneksi.php');
	include 'session.php';
 ?>
 <html>
 <head>
 	<title>Inventaris</title>
 	
 	<link rel="stylesheet" type="text/css" href="../css/admin_css.css">
 	<link rel="stylesheet" type="text/css" href="../css/tabs.css">
 	<link rel="stylesheet" type="text/css" href="../css/list.css">

 	<style type="text/css">
 	.a{
 		background-color: #eeeeee;
 	}
 	.owe{
 		padding: 10px;
 		padding-left: 0px;
 		background-color: white;
 		margin-top: 30px;
 		padding-bottom: 70px;
 		box-shadow: 2px 5px 5px #bababa;
 	}
 	</style>
 </head>
 <body>
 	<?php 
 		include 'header.php';
 	 ?>
 </div>
	 <div class="a">
	 	<div class="owe">
		 	<h1>List Pegawai</h1>
		 	<hr>
		 	<?php 
		 		$sql = mysql_query("SELECT * FROM pegawai");
		 		while ($data=mysql_fetch_array($sql)) { ?>
		 			<div class="list">
		 				<div class="jelly">
		 					<center>
			 					<div class="profile_admin">	
									<img src="../gambar_profile/<?php echo $data['nama_gambar']; ?>">
								</div>
								<h4><?php echo $data['nama_depan']; ?></h4>
								<h3><?php echo $data['no_telepon']; ?></h3>
								<h3><?php echo $data['email']; ?></h3>
								<a href="profile_singkat_pegawai.php?idpro=<?php echo $data['id']; ?>">
		 							<button style="float: left; margin-left: 7px;">Lihat</button>
		 						</a>
		 						<a onclick="return konfirmasi()" href="pecat.php?idpro=<?php echo $data['id']; ?>">
		 							<button style="float: right; margin-right: 7px;">Pecat</button>
		 						</a>
			 				</center>	 	
		 				</div>
		 			</div>
		 	<?php } ?>
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
		 tanya = confirm("Yakinn dipecat ?");
		 if (tanya == true) {
		 	return true;	
		 }else{
		 	return false;
		 }
	 }
 </script>