<?php 
	$q = intval($_GET['q']);
	include '../koneksi.php';

 	echo "<table border='1'>
 		<tr>
 			<td>Jenis</td>
 			<td>Keterangan</td>
 			<td>Kode Inventaris</td>
 			<td>Merk</td>
 			<td>Serial Kode</td>
 			<td>Status</td>
 			<td>Aksi</td>
 		</tr>";

 	while ($data = mysql_fetch_array($hasil)) {
 			echo "<tr>";
 			echo "<td>". $data['nama'] ."</td>";
 			echo "<td>". $data['deskripsi_brg'] . "</td>";
 			echo "<td>". $data['kode_brg'] ."</td>";
 			echo "<td>". $data['merk_brg'] ."</td>";
 			echo "<td>". $data['no_seri'] ."</td>";
 			echo "<td>". $data['status_brg'] ."</td>";
 			
 			echo "<td><a href='edit.php?id=". $data['id'] ."'><button>Edit</button></a>";
 			echo "</tr>";
 		}	

 ?>