<?php
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'test';

 $conn = mysql_connect($host, $user, $pass);
 mysql_select_db($db, $conn);
 ?>