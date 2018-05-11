 <?php 
	include '../koneksi.php';
	include 'session.php';

	$id = $_GET['id'];
 	$ss = mysql_query("SELECT * FROM barang WHERE id='$id'");
 	$data = mysql_fetch_array($ss);
  ?>
  <html>
 <head>
 	<title>Inventaris</title>
 	
 	<link rel="stylesheet" type="text/css" href="../css/admin_css.css">
 	<link rel="stylesheet" type="text/css" href="../css/form.css">

 	<style type="text/css">
 		
 	</style>
 </head>
 <body>
 <div class="fck">
 	<img src="../img/adminn.png" width="35" align="middle" style="float:right; margin-right:20px; border-radius:50%; margin-top:-4px; border:5px solid white; ">
 </div>
	 <div class="a">
	 	<br><br>
	 	<center>
	 		<div class="lok_form">
	 			<h1>Transfer Barang</h1>
	 			<form method="POST">
	 				<select name="id_lokasi" required/ style="width: 90%;">
			          	<?php $result =  mysql_query("select * from lokasi")or die(mysql_error()); 
			          		while ($row=mysql_fetch_array($result)){ ?>
				   		<option value="<?php echo $row['id_lokasi']; ?>"><?php echo $row['nama_lok']; ?></option>
				    	<?php } ?>
				   	</select><br><br>
				   	<input type="submit" name="edit" style="width: 130px;" value="OK">
	 			</form>
	 			<a href="barang_baru.php?page=1">
	 				<button type="submit" name="back" style="width: 130px; height: 50px; color: white; font-family: paranoid; font-size:15px; letter-spacing: 2px; margin-left: -25%; background-color:#C62828; border:0px solid white; margin-top: -5px"> batal 
	 				</button>
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
 <?php
	 if(isset($_POST['back'])){
 		header("location: barang_baru.php");
	 }
  ?>