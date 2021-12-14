<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data Tugas</h3>
 
	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>
	
	<br/>
	<br/>
 
	<table border="1" class="table-dark">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->tugas_idpegawai}}</td>
			<td>{{ $p->tugas_tanggal}}</td>
			<td>{{ $p->tugas_namatugas}}</td>
			<td>{{ $p->tugas_status}}</td>
			<td>
				<a href="/tugas/edit/{{ $p->tugas_id }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->tugas_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>