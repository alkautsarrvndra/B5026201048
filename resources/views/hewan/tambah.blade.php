<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Hewan</h3>
 
	<a href="/hewan"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/hewan/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama"> <br/>
		Jumlah <input type="number" name="jumlah"> <br/>
		Tersedia <input type="number" name="tersedia"> <br/>
		<input type="submit" value="Masuk menu praktikkum">
	</form>
		
 
 
</body>
</html>