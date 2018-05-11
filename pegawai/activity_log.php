<?php 
	include ('../koneksi.php');
	include 'session.php';
 ?>
 <html>
 <head>
 	<title>Inventaris</title>
 	<link rel="stylesheet" type="text/css" href="../css/admin_style.css">
	 	<script type="text/javascript">
	 		function konfirmasi(){
		 		var msg;
		 		msg = "Yakin Dihapus? :(";
		 		var yakin = confirm(msg);
		 		if (yakin) {
		 			return true;
		 		} else {
		 			return false;
		 		}
		 	}
	 	</script>
 </head>
 <body>
 <div class="fck">
 	<form action="logout.php">
		<input type="submit" name="log" value="logouts">
	</form>
 </div>
 <div class="a">
 <br><br>
 <center>
 	<h1 style="font-family:century gothic;">Activity Log</h1>
 </center>
 <div id="tai">
 	<a href="inventori.php"><button>Kembali</button></a>
 	<br><br>
 </div>
 <center>
 	<div class="activity">
 		<table border="1">
 			<tr>
 				<td colspan="2">Tanggal</td>
 				<td width="20%">Pengguna</td>
 				<td width="40%">Riwayat</td>
 			</tr>
 			<?php 
 				$sql = "SELECT * FROM activty_log ORDER BY date DESC limit 5";
 				$query = mysql_query($sql);
 				while ($data = mysql_fetch_array($query)) {
 					echo "<tr>";
 					echo "<td><a href='delete_log.php?id=".$data['id_activity']."' onclick='return konfirmasi()'>Hapuss</a></td>";
 					echo "<td>".$data['date']."</td>";
 					echo "<td>".$data['username']."</td>";
 					echo "<td>".$data['action']."</td>";
 					echo "</tr>";
 				}
 			 ?>
 		</table>
 	</div>
 </center>	
 </div>

 <div class="b">
 	
 </div>
 </body>
 </html>