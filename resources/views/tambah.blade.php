<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.harongoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.harongoding.com">www.harongoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama    <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur    <input type="number" name="umur" required="required"> <br/>
		Alamat  <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>