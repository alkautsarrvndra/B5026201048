<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Tugas</h3>
 
	<a href="/tugas"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->tugas_id}}"> <br/>
		ID Pegawai <input type="number" required="required" name="idpegawai" value="{{ $p->tugas_idpegawai }}"> <br/>
		Tanggal <input type="date" required="required" name="tanggal" value="{{ $p->tugas_tanggal }}"> <br/>
		Nama Tugas <input type="text" required="required" name="namatugas" value="{{ $p->tugas_namatugas }}"> <br/>
		Status <input type="text" required="required" name="status" value="{{ $p->tugas_status }}"><br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>