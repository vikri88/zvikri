<?php 
	include '../koneksi.php';
	include 'session.php';
	$id = $_GET['id'];
	$id_lok = $_POST['id_lokasi'];

	$oe = mysql_query("SELECT * FROM barang WHERE id='$id'");
	$eo = mysql_fetch_array($oe);
	$kode = $eo['kode_brg'];
	$jenis = substr($kode, 10, 1);
	$kode2 = substr($kode, 7, 2);
	$brg = substr($kode, 12, 3);

	$io = mysql_query("SELECT * FROM lokasi WHERE id_lokasi='$id_lok'");
	$oi = mysql_fetch_array($io);
	$name = $oi['nama_lok'];

	if ($id == '') {
		echo "<script>alert('Gagal')</script>";
	} else {
		$kode3 = $id_lok;
		$kodew = "SMKN02/".$id_lok."/".$jenis."-".$brg;
		$query = mysql_query("SELECT * FROM lokasi_detail ORDER BY Id_id DESC");
		$query2 = mysql_query("UPDATE barang SET kode_brg='$kodew' ,status_brg='terpakai' WHERE id=$id");
		$hasil = mysql_fetch_array($query);
		$id_id = $hasil['Id_id'];

		$activty_log = "INSERT INTO activty_log VALUES('','$id2',NOW(),'barang dengan kode $kode dilokasikan ke $name','admin')";
		$log = mysql_query($activty_log);

		$a = count($id);
		for ($i=0; $i < $a; $i++) { 
			mysql_query("INSERT INTO lokasi_detail (Id_id,id_lokasi,date,id) values('','$id_lok',NOW(),'$id')");
		}
		echo "<script>alert('Berhasil');window.location='barang_baru.php?page=1'</script>";
	}
 ?>