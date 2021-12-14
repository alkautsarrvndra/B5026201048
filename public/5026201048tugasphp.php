<!DOCTYPE html>
<html>
<body>
    <style>
        h2{
          font-size: large;
        }
    </style>
<!-- Required meta tags-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h2>
            <?php
            $JudulBuku = $_GET["Judul Buku"];
            $Nobuku = $_GET["Nomor Buku"];
            $JenisPeminjaman = $_GET["Jenis Peminjaman"];
            $TglPeminjaman = $_GET["Tanggal Peminjaman"];
            ?>
            </h2>
            <div class="alert alert-success alert-dismissible fade show">
                <button type="submit"></button>
                <button type="reset"></button>
     </body>
</html>