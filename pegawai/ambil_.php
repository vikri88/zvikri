<?php 
	include 'koneksi.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>coba</title>
 	<script>
 		function tampilkanbarang(str){
 			if (str="") {
 				document.getElementById('txtPetunjuk').innerHTML="";
 				return;
 			}
 			if (window.XMLHttpRequest) {
 				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
 			}
 			xmlhttp.onreadystatechange=function(){
 				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
 					document.getElementById("txtPetunjuk").innerHTML=xmlhttp.responseText;
 				}
 			}
 			xmlhttp.open("GET","ambil_barang.php?q="+str,true);
 			xmlhttp.send();
 		}	
 	</script>
 </head>
 <body>
 	<form>
 		<select>
 			<option value="">Pilih barang</option>
 			<option value="1">Cpu</option>
 			<option value="2">Monitor</option>
 		</select>
 	</form>
 	<br>
 	<div id="txtPetunjuk"><b>Informasi Detil di sini:</b></div>
 	</body>
 </body>
 </html>