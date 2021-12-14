<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data Hewan</h3>
 
	<a href="/hewan/tambah"> + Tambah Hewan Baru</a>
	
	<br/>
	<br/>
 
	<table border="1" class="table-success"> 
		<tr>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Tersedia</th>
		</tr>
		@foreach($hewan as $p)
		<tr>
			<td>{{ $p->namahewan }}</td>
			<td>{{ $p->jumlahhewan }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
				<a href="/hewan/edit/{{ $p->kodehewan }}">Edit</a>
				|
				<a href="/hewan/hapus/{{ $p->kodehewan }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>