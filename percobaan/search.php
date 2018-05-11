<?php
include "../koneksi.php"; // menghubungkan ke file koneksi.php agar terhubung dengan database
?>

<html>
<head>
 <title>Lihat Data</title>
<!-- CSS untuk mempercantik tampilan-->
 <style type="text/css">
td{
 text-align: center;
}
</style>

</head>

<body>
<fieldset>
<legend><h1>Cari Data Negara</h1></legend>
 <div style="margin-bottom:15px;" align="right">
  <form action="" method="post">
   <input type="text" name="input_cari" placeholder="Cari Berdasar Nama Negara" class="css-input" style="width:250px;" />
   <input type="submit" name="cari" value="Cari" class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
  </form>
 </div>

 <table width="100%" border="1px solid #000" style="border-collapse:collapse;">
  <tr style="background-color:#fc0;">
   <th>Kode</th>
   <th>Merk</th>
   <th>Aksi</th>
  </tr>
   <?php 

   $input_cari = $_POST['input_cari']; 
   $cari = $_POST['cari'];

   // jika tombol cari di klik
   if($cari) {

    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    // query mysql untuk mencari berdasarkan nama negara. .
    $sql = mysql_query("select * from barang where merk_brg like '%$input_cari%' or kode_brg like '%input_cari%' ") or die (mysql_error());   
    } else {
    $sql = mysql_query("select * from barang") or die (mysql_error());
    }
    } else {
    $sql = mysql_query("select * from barang") or die (mysql_error());
    }

   // mengecek data
   $cek = mysql_num_rows($sql);
   // jika data kurang dari 1
   if($cek < 1) {
    ?>
     <tr> <!--muncul peringata bahwa data tidak di temukan-->
      <td colspan="7" align="center style="padding:10px;""> Data Tidak Ditemukan</td>
     </tr>
    <?php
   } else {

   // mengulangi data agar tidak hanya 1 yang tampil
   while($data = mysql_fetch_array($sql)) {

   ?>
   <tr>
    <td><?php echo $data['kode_brg'] ?></td>
    <td><?php echo $data['merk_brg'] ?></td>
    
    <!--Hanya pemanis tampilan-->
    <td align="center">
    <button>Edit</button> 
    <button>Hapus</button>
    </td>
   </tr>
  <?php 

  } 
 }
?>
 </table>
</fieldset>
</body>
</html