<!DOCTYPE html>
<html>
<head>
<title>MULTIPLE INSERT</title>
<script type="text/javascript">
 function add() {
  var content = '';
  content += '<a href="javascript:;" onclick="hapus(this)">Hapus record</a><br />';
  content += 'Nama : <input type="text" name="name[]"><br />';
  content += 'Address : <textarea name="address[]"></textarea><br />';
  content += '<hr />';

  var x = document.createElement('div');
  x.innerHTML = content;
  document.getElementById('record').appendChild(x);
 }

 function hapus(element) {
  var x = document.getElementById('record');
  x.removeChild(element.parentNode);
 }
</script>
</head>
<body>
TAMBAH DATA
<hr/>
<a href="javascript:add();">Tambah record</a>
<br />
<form action="aksi.php" method="POST">
<pre>
Nama : <input type="text" name="name[]">
Address : <textarea name="address[]"></textarea>
<hr />
<div id="record"></div>
</pre>
<button>TAMBAH DATA</button>
</form>
</body>
</html>
