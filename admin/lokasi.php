<?php 
    include ('../koneksi.php');
    include 'session.php';
    include 'pagination.php';

        $sql =  "SELECT * FROM lokasi";
        $result = mysql_query($sql);
        
        //pagination config start
        $rpp = 8; // jumlah record per halaman
        $reload = "lokasi.php?pagination=true&page=1";
        $page = intval($_GET["page"]);
        if($page<=0) $page = 1;  
        $tcount = mysql_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
 ?>
 <html>
 <head>
    <title>Inventaris</title>
    
    <link rel="stylesheet" type="text/css" href="../css/admin_css.css">
    <link rel="stylesheet" type="text/css" href="../css/table.css">
    <link rel="stylesheet" type="text/css" href="../css/lok.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">


    <style type="text/css">
        
    </style>
 </head>
 <body>
 <?php 
    include 'header.php';
  ?>
     <div class="a">
        <h1 style="font-size: 35px; font-family: paranoid;">Lokasi Barang</h1>
        <a href="inventori.php"><button style="margin-right:55px; margin-top: 20px;">Kembali</button></a><br><br><br>
        <?php 
            $sql = "SELECT * FROM lokasi";
            $query = mysql_query($sql);
            while(($count<$rpp) && ($i<$tcount)) {
                mysql_data_seek($result,$i);
                $data = mysql_fetch_array($result);
                
                $id_lokasi = $data['id_lokasi']; ?>
            
            <div class="lokasi">
                <center>
                    <img src="../img/city.png">
                    <h5><?php echo $data['nama_lok']; ?></h5>
                    <?php 
                        $sql2 = "SELECT * FROM barang INNER JOIN lokasi_detail ON barang.id = lokasi_detail.id 
                                WHERE id_lokasi = '$id_lokasi' ";
                        $query2 = mysql_query($sql2);        
                        $number = mysql_num_rows($query2);
                     ?>
                    <div class="number">
                        <p><?php echo $number; ?></p>
                    </div>
                    <div class="button">
                        <a href="lok_barang.php?page=1&id_lokasi=<?php echo $data['id_lokasi']; ?>"><button>Lihat</button></a><br><br>
                        <a href=edit_ruang.php?id_lokasi=<?php echo $data['id_lokasi']; ?>"><button style="margin-top: 5px;">Edit</button></a>
                    </div>
                </center>
            </div>

            <?php 
                $i++; 
                $count++;
            } 
            ?>
            <div class="zz" style="width: 100%; height: 70px; background-color: transparent; float: left; margin-top: 10px;">
                <div class="pagination" style="display: block; margin-top: 0;">
                    <?php echo paginate_one($reload, $page, $tpages); ?>
                </div>
            </div>
     </div>
     <?php 
        include 'sisi.php';
      ?>
 <div class="c">
    
 </div>
 </body>
 </html>