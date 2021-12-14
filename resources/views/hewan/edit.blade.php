<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Hewan</h3>
 
	<a href="/Hewan"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($hewan as $p)
	<form action="/hewan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodehewan }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->namahewan }}"> <br/>
		Jumlah <input type="number" required="required" name="jumlah" value="{{ $p->jumlahhewan }}"> <br/>
		Tersedia <input type="number" required="required" name="tersedia" value="{{ $p->tersedia }}"> <br/>
		<input type="submit" value="Masuk menu praktikum">
	</form>
	@endforeach
		
</body>
</html>