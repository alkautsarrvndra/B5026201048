<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Tugas</h3>
 
	<a href="/tugas"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		Pegawai<select id="IDPegawai" name="IDPegawai" required="required">
        <option value=""></option>
</select>

		ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Tanggal <input type="date" name="tanggal" required="required"> <br/>
		Nama Tugas <input type="text" name="namatugas" required="required"> <br/>
		Status <input type="text" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>