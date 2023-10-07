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
        <h1>Data Buku</h1>
        <a href="tambahdata.php" class="btn btn-success">Tambah Data</a>
        <button class="btn btn-primary" onclick="modal('tambah.php', 'Tambah Data Buku')">Modal Tambah Data</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($query as $item) { ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $item['nama_buku'] ?></td>
                        <td><?= $item['penerbit'] ?></td>
                        <td><?= $item['tahun_terbit'] ?></td>
                        <td>
                            <button class="btn btn-info" onclick="modal(`edit.php?id=<?= $item['id'] ?>`, 'Edit Data Buku' )">Modal Edit</button>
                            <a href="editdata.php?id=<?= $item['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="proses.php?id=<?= $item['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-body">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        function modal(url, header) {
            $.ajax({
                type: "get",
                url: url,
                dataType: "html",
                success: function(response) {
                    $("#exampleModalLabel").text(header);
                    $("#modal-body").html(response);
                }
            });
            $("#exampleModal").modal('show');
        }
    </script>
</body>

</html>