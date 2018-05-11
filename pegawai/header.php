<?php 
	include '../koneksi.php';
 ?>
<script>
	function myFunction() {
	    document.getElementById("myDropdown").classList.toggle("show");
	}

	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {

	    var dropdowns = document.getElementsByClassName("dropdown-content");
	    var i;
	    for (i = 0; i < dropdowns.length; i++) {
	      var openDropdown = dropdowns[i];
	      if (openDropdown.classList.contains('show')) {
	        openDropdown.classList.remove('show');
	      }
	    }
	  }
	}
</script>
<style type="text/css">
	.fck{
		padding-bottom: 20px;
	}
	.dropbtn{
		width: 60px;
		height: 60px;
		float:right; 
		margin-right:20px; 
		border-radius:50%; 
		margin-top:-4px; 
		border:4px solid white;
		background-image: url("../gambar_profile/<?php echo $b['nama_gambar']; ?>");
		background-size: cover;
		background-position: center;
		opacity: 0.8;
	}
	.tambahan{
		float: left;
		margin-top: 5px;
	}
</style>
<div class="fck">
	<div onclick="myFunction()" class="dropbtn">
		
	</div>
 	<div id="myDropdown" class="dropdown-content">
	    <a href="profile.php"><img src="../img/option2.png" align="top" width="20" style="margin-right:20px;">Edit Profile</a>
	    <a href="logout.php"><img src="../img/logout.png" align="top" width="20" style="margin-right:20px;">Logout</a>
  	</div>
  	<div class="tambahan">
  		<h1>Inventaris Alat</h1>
  	</div>
</div>  