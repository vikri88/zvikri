<?php 
	session_start();
	if (!isset($_SESSION['login_admin'])) {
		die("login doeloe :((");
	}

	$a = $_SESSION['login_admin'];
	$number = $_SESSION['number'];
	$u_query= mysql_query("SELECT * FROM admin where username='$a'")or die(mysql_error());
	$b = mysql_fetch_array($u_query);
	$nama = $b['nama_depan'];
	$id = $b['id'];
	$id2 = $b['id'];
	$page=1;
 ?>