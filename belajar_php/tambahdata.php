<?php
include 'koneksi.php';

$query = mysqli_query($db, "select * from buku");
// print_r($query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-primary">
        <div class="container">
            <span class="navbar-brand mb-0 h1 text-light">Navbar</span>
        </div>
    </nav>
    <div class="container">
        <h1>Tambah Data Buku</h1>
        <form action="proses.php" method="post">
            <div class="mb-3">
                <label class="form-label">Nama Buku</label>
                <input type="text" class="form-control" name="nama_buku">
            </div>
            <div class="mb-3">
                <label class="form-label">Penerbit</label>
                <input type="text" class="form-control" name="penerbit">
            </div>
            <div class="mb-3">
                <label class="form-label">Tahun terbit</label>
                <input type="number" class="form-control" name="tahun_terbit">
            </div>
            
            <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>