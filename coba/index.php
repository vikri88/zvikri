<?php require_once __DIR__.'/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>MULTIPLE INSERT</title>
</head>
<body>
<a href="tambah.php">Tambah data</a>
<table border="1">
 <thead>
  <tr>
   <td>ID</td>
   <td>NAME</td>
   <td>ADDRESS</td>
  </tr>
 </thead>
 <tbody>
  <?php
   // set query
   $sql = 'SELECT * FROM users';
   $rs = mysql_query($sql) or die ($sql);

   // loop data users
   while ($row = mysql_fetch_array($rs)) {
    $id = (int) $row['id'];
    $name = $row['name'];
    $address = $row['address'];
  ?>
  <tr>
   <td><?php echo $id; ?></td>
   <td><?php echo $name; ?></td>
   <td><?php echo $address; ?></td>
  </tr>
  <?php } ?>
 </tbody>
</table>
</body>
</html>
