<head>
	<style type="text/css">
		#dashboard nav{
			width: 35px; 
			margin-top: -7px;
			height: 25px; 
			background-color: #eee; 
			float: right; 
			border-radius: 50%;
			margin-right: 10px;
			color: white;
			text-align: center;
			padding-top: 10px;
			font-family: paranoid;
			color: rgba(49, 54, 58, 0.73);
		}
	</style>
</head>
<script src="../js/slide.js"></script>
<script> 
	$(document).ready(function(){
	    $("#barang").click(function(){
	        $("#panel").slideToggle("");
	        $("#panel1").slideToggle("");
	        $("#panel2").slideToggle("");
	        $("#panel3").slideToggle("");
	        $("#panel4").slideToggle("");
	        $("#panel5").slideToggle("");
	        $("#p").hide();
	        $("#p1").hide();
	        $("#k").hide();
	        $("#k1").hide();
	    	$("#l").hide();
	        $("#l1").hide();
	    	$("#o").hide();
	        $("#o1").hide();
	    	$("#input_barang").hide();
	        $("#input_kategori").hide();
	    	$("#input_karyawan").hide();
	    	$("#input_user_pegawai").hide();
	    	$("#input_lokasi").hide();
	    });
	    $("#penyimpanan").click(function(){
	        $("#p").slideToggle("");
	        $("#p1").slideToggle("");
	        $("#panel").hide();
	        $("#panel1").hide();
	        $("#panel2").hide();
	        $("#panel3").hide();
	        $("#panel4").hide();
	        $("#panel5").hide();
	        $("#k").hide();
	        $("#k1").hide();
	    	$("#l").hide();
	        $("#l1").hide();
	    	$("#o").hide();
	        $("#o1").hide();
	    	$("#input_barang").hide();
	        $("#input_kategori").hide();
	    	$("#input_karyawan").hide();
	    	$("#input_user_pegawai").hide();
	    	$("#input_lokasi").hide();
	    });
	    $("#kepegawaian").click(function(){
	        $("#k").slideToggle("");
	        $("#k1").slideToggle("");
	        $("#panel").hide();
	        $("#panel1").hide();
	        $("#panel2").hide();
	        $("#panel3").hide();
	        $("#panel4").hide();
	        $("#panel5").hide();
	        $("#l").hide();
	        $("#l1").hide();
	    	$("#o").hide();
	        $("#o1").hide();
	    	$("#input_barang").hide();
	        $("#input_kategori").hide();
	    	$("#input_karyawan").hide();
	    	$("#input_user_pegawai").hide();
	    	$("#input_lokasi").hide();
	    });
	    $("#log").click(function(){
	        $("#l").slideToggle("");
	        $("#l1").slideToggle("");
	        $("#panel").hide();
	        $("#panel1").hide();
	        $("#panel2").hide();
	        $("#panel3").hide();
	        $("#panel4").hide();
	        $("#panel5").hide();
	        $("#p").hide();
	        $("#p1").hide();
	        $("#k").hide();
	        $("#k1").hide();
	    	$("#o").hide();
	        $("#o1").hide();
	    	$("#input_barang").hide();
	        $("#input_kategori").hide();
	    	$("#input_karyawan").hide();
	    	$("#input_user_pegawai").hide();
	    	$("#input_lokasi").hide();
	        
	    });
	     $("#option").click(function(){
	        $("#o").slideToggle("");
	        $("#o1").slideToggle("");
	        $("#panel").hide();
	        $("#panel1").hide();
	        $("#panel2").hide();
	        $("#panel3").hide();
	        $("#panel4").hide();
	        $("#panel5").hide();
	        $("#input_barang").hide();
	        $("#input_kategori").hide();
	    	$("#input_karyawan").hide();
	    	$("#input_user_pegawai").hide();
	    	$("#input_lokasi").hide();
	    	$("#k").hide();
	        $("#k1").hide();
	        $("#l").hide();
	        $("#l1").hide();
	    });
	     $("#masukan").click(function(){
	        $("#input_barang").slideToggle("");
	        $("#input_kategori").slideToggle("");
	    	$("#input_karyawan").slideToggle("");
	    	$("#input_user_pegawai").slideToggle("");
	    	$("#input_lokasi").slideToggle("");
	    	$("#panel").hide();
	        $("#panel1").hide();
	        $("#panel2").hide();
	        $("#panel3").hide();
	        $("#panel4").hide();
	        $("#panel5").hide();
	        $("#k").hide();
	        $("#k1").hide();
	        $("#l").hide();
	        $("#l1").hide();
	        $("#o").hide();
	        $("#o1").hide();
	    });
	});
	</script>
<div class="b">
 	
	<div id="dashboard">
		<a href="inventori.php"><img src="../img/dashboard.png" align="top" width="20" style="margin-right:10px;">Dashboard</a>
	</div>
	<div id="barang">
		<a href="#"><img src="../img/keranjang.png" align="top" width="20" style="margin-right:10px;">Barang</a>
	</div>
		<div id="panel">
			<a href="semua_brg.php?page=1"><img src="../img/all.png" align="top" width="20" style="margin-right:10px;">Semua Barang</a>
		</div>
		<div id="panel1">
			<a href="barang_baru.php?page=1"><img src="../img/new.png" align="top" width="20" style="margin-right:10px;">Barang Baru</a>
		</div>
		<div id="panel2">
			<a href="barang_repair.php?page=1"><img src="../img/repair.png" align="top" width="20" style="margin-right:10px;">Barang Repair</a>
		</div>
		<div id="panel3">
			<a href="barang_rusak.php?page=1"><img src="../img/freak.png" align="top" width="20" style="margin-right:10px;">Barang Rusak</a>
		</div>
		<div id="panel4">
			<a href="barang_terbuang.php?page=1"><img src="../img/terbuang.png" align="top" width="20" style="margin-right:10px;">Barang Terbuang</a>
		</div>
	<div id="masukan">
		<a href="#"><img src="../img/add.png" align="top" width="20" style="margin-right:10px;">Inputan</a>
	</div>
		<div id="input_barang">
			<a href="tambah.php"><img src="../img/addevice.png" align="top" width="20" style="margin-right:10px;">Input Barang</a>
		</div>
	<div id="penyimpanan">
		<a href="#"><img src="../img/lok.png" align="top" width="20" style="margin-right:10px;">Ruang</a>
	</div>
		<div id="p">
			<a href="lokasi.php?page=1"><img src="../img/ruang.png" align="top" width="20" style="margin-right:10px;">Ruang Barang</a>
		</div>				
 </div>