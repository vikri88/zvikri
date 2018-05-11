<?php 
	include ('../koneksi.php');
	include 'session.php';
 ?>
 <html>
 <head>
 	<title>Inventaris</title>
 	
 	<link rel="stylesheet" type="text/css" href="../css/admin_css.css">
 	<link rel="stylesheet" type="text/css" href="../css/tabs.css">

 	<style type="text/css">
 		.a{
 			background-color: #eeeeee;
 		}
 		.a21{
 			width: 150px;
 			height: 150px;
 			background-color: transparent;
 			border: 10px solid lightblue;
 			border-radius: 50%;
 		}
 		.a2 button{
 			width: 200px;
 			height: 50px;
 			background-color: transparent;
 			border: 5px solid #78909C;
 			font-family: century gothic;
 			color: #78909C;
 			font-size: 17px;
 		}
		.a img{
			float:left; 
			margin-top: 10px; 
			margin-left: 10px;
		}
		.w3-row h2{
			margin: 3px;
			font-family: paranoid;
			color: #78909C;
			font-size: 20px;
		}
 	</style>
 	<script>
	function myFunction() {
	    document.getElementById("myDropdown").classList.toggle("show");
	}

	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {

	    var dropdowns = document.getElementsByClassName("dropdown-content");
	    var i;
	    for (i = 0; i < dropdowns.length; i++) {
	      var openDropdown = dropdowns[i];
	      if (openDropdown.classList.contains('show')) {
	        openDropdown.classList.remove('show');
	      }
	    }
	  }
	}
	</script>
 </head>
 <body>
 	<?php 
 		include 'header.php';
 	 ?>
 </div>
	 <div class="a">
	 <br>
	 <div class="welcome" style="box-shadow: 3px 3px 3px #bababa;">
	 		<h1 style="float: left;" class="hide">welcome <?php echo $nama; ?></h1>
	 </div>
	 	<div class="a1" style="box-shadow: 3px 3px 3px #bababa;">
	 	<a href="barang_baru.php?page=1">
	 		<img src="../img/new.png" width="50" align="middle">
	 		<h1 style="margin-top:0px;">
	 			<?php 
	 				$queri = "SELECT * FROM barang WHERE status_brg='baru' or status_brg='selesai repair'";
	 				$sql = mysql_query($queri);
	 				$num = mysql_num_rows($sql);

	 				echo $num;
 	 			?>
	 		</h1>
	 		<p>Barang Baru</p>
	 	</a>
	 	</div>
	 	<div class="a1" id="a1" style="box-shadow: 3px 3px 3px #bababa;">
	 	<a href="barang_repair.php?page=1">	
	 		<img src="../img/repair.png" width="50" align="middle" style="float:left;">
	 		<h1 style="margin-top:0px;">
	 			<?php 
	 				$queri = "SELECT * FROM barang WHERE status_brg='repair'";
	 				$sql = mysql_query($queri);
	 				$num = mysql_num_rows($sql);

	 				echo $num;
 	 			?>
	 		</h1>
	 		<p>Barang Repair</p>
	 	</a>
	 	</div>
	 	<div class="a1" id="a1" style="box-shadow: 3px 3px 3px #bababa;">
	 	<a href="barang_rusak.php?page=1">	
	 		<img src="../img/freak.png" width="50" align="middle" style="float:left;">
	 		<h1 style="margin-top:0px;">
	 			<?php 
	 				$queri = "SELECT * FROM barang WHERE status_brg='rusak'";
	 				$sql = mysql_query($queri);
	 				$num = mysql_num_rows($sql);

	 				echo $num;
 	 			?>
	 		</h1>
	 		<p>Barang Rusak</p>
	 	</a>
	 	</div>
	 	<div class="a1" id="a1" style="box-shadow: 3px 3px 3px #bababa;">
	 	<a href="barang_terbuang.php?page=1">	
	 		<img src="../img/terbuang.png" width="50" align="middle" style="float:left;">
	 		<h1 style="margin-top:0px;">
	 			<?php 
	 				$queri = "SELECT * FROM barang WHERE status_brg='terbuang'";
	 				$sql = mysql_query($queri);
	 				$num = mysql_num_rows($sql);

	 				echo $num;
 	 			?>
	 		</h1>
	 		<p>Terbuang</p>
	 	</a>
	 	</div>

	 	<br><br>

	 	<div class="a2" style="box-shadow: 3px 3px 3px #bababa;">
	 	<br><br>
	 		<center>
	 			<h1>Semua Barang</h1>
	 			<div class="a21">
	 				<h1 style="margin-top:35px; color:#78909C; font-size:60px; font-family:century gothic;">
	 					<?php 
	 						$sql = "SELECT * FROM barang";
	 						$query = mysql_query($sql);
	 						$num = mysql_num_rows($query);

	 						echo $num;
	 					 ?>
	 				</h1>
	 			</div><br><br>
	 			<a href="semua_brg.php?page=1">
	 				<button>Lihat Selengkapnya</button>
	 			</a>
	 		</center>
	 	</div>
	 	<div class="a3" style="box-shadow: 3px 3px 3px #bababa;">
	 		<div class="w3-row">
		    <a href="javascript:void(0)" onclick="openCity(event, 'London');">
		      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 44%;"><h2>Log Activity</h2></div>
		    </a>
		    <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
		      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 45%;"><h2>User Log</h2></div>
		    </a>
		  </div>

		  <div id="London" class="w3-container city" style="display:block;">
		  	<?php 
		  		$sql = mysql_query("SELECT * FROM activty_log INNER JOIN admin ON activty_log.id=admin.id ORDER BY activty_log.date DESC LIMIT 0,4");

		  		while ($waw = mysql_fetch_array($sql)) { ?>
		    
			    <div class="message">
			    	<div class="photo">
						<img src="../gambar_profile/<?php echo $waw['nama_gambar']; ?>">
                    </div>
			    	<div class="pesan">
			    		<h3><?php echo $waw['nama_depan']; ?></h3>
			    		<i style="margin-top: -14px;"><?php echo date('H:i', strtotime($waw['date'])); ?></i>
			    		<p><?php echo $waw['action']; ?></p>
			    		<hr>
			    	</div>
			    </div>
		    
		    <?php } ?>
		    <center>
			    <footer>
			    	<a href="log.php?page=1"><button>Show More</button></a>
			    </footer>
			 </center>   
		  </div>

		  <div id="Paris" class="w3-container city" style="display:none">
		  	<?php 
		  		$sql = mysql_query("SELECT * FROM user_log INNER JOIN admin ON user_log.id=admin.id ORDER BY user_log.id_log DESC LIMIT 0,4");
		  		while ($wawe = mysql_fetch_array($sql)) { ?>
		    <div class="message">
		    	<div class="photo">
                    <img src="../gambar_profile/<?php echo $wawe['nama_gambar']; ?>">
				</div>
		    	<div class="pesan">
		    		<h3><?php echo $wawe['nama_depan']; ?></h3>
		    		<i><?php echo ""; ?></i>
		    		<p>login pada <?php echo date('H:i', strtotime($wawe['login_date'])); ?> dan Logout pada <?php echo date('H:i', strtotime($wawe['logout_date'])); ?></p>
		    		<hr>
		    	</div>
		    </div>
			<?php } ?>
		    <center>
			    <footer>
			    	<a href="log2.php?page=1"><button>Show More</button></a>
			    </footer>
			 </center> 
		  </div>
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
	 </div>
 	<?php 
 		include 'sisi.php';
 	 ?>
 <div class="c">
 	
 </div>
 </body>
 </html>