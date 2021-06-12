<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	
	<br/>
	<br/>
	

	<form action="/user/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Username <input type="text" name="username" required="required"><br/>
        Password <input type="text" name="password" required="required"><br/>

		<input type="submit" value="Simpan Data">
	</form>

	<br>
	<a href="/user">Kembali</a>

</body>
</html>