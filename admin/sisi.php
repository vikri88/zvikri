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
		<div id="input_user_pegawai">
			<a href="add_user.php"><img src="../img/adduser.png" align="top" width="20" style="margin-right:10px;">Input User</a>
		</div>
		<div id="input_karyawan">
			<a href="add_suplier.php"><img src="../img/addpegawai.png" align="top" width="20" style="margin-right:10px;">Input Supplier</a>
		</div>
		<div id="input_lokasi">
			<a href="add_lok.php"><img src="../img/lokasi.png" align="top" width="20" style="margin-right:10px;">Input Ruang</a>
		</div>
	<div id="penyimpanan">
		<a href="#"><img src="../img/lok.png" align="top" width="20" style="margin-right:10px;">Ruang</a>
	</div>
		<div id="p">
			<a href="lokasi.php?page=1"><img src="../img/ruang.png" align="top" width="20" style="margin-right:10px;">Ruang Barang</a>
		</div>
	<div id="kepegawaian">
		<a href="#"><img src="../img/pegawai.png" align="top" width="20" style="margin-right:10px;">User</a>
	</div>
		<div id="k">
			<a href="list_admin.php?page=1"><img src="../img/user2.png" align="top" width="20" style="margin-right:10px;">Data Admin</a>
		</div>
		<div id="k1">
			<a href="list_pegawai.php?page=1"><img src="../img/user.png" align="top" width="20" style="margin-right:10px;">Data Pegawai</a>
		</div>

	<div id="log">
		<a href="#"><img src="../img/log.png" align="top" width="20" style="margin-right:10px;">Log</a>
	</div>
		<div id="l">
			<a href="log.php?page=1"><img src="../img/log2.png" align="top" width="20" style="margin-right:10px;">Log Activity</a>
		</div>
		<div id="l1">
			<a href="log2.php?page=1"><img src="../img/log3.png" align="top" width="20" style="margin-right:10px;">User Log</a>
		</div>
	<div id="dashboard">
		<a href="report.php?page=1"><img src="../img/data.png" align="top" width="20" style="margin-right:10px;">Report</a>
	</div>						
 </div>