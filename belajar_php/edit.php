<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($db, "select * from buku where id = $id");
    $data = mysqli_fetch_array($query);
}
// print_r($data);
?>

<form action="proses.php?id=<?= $data['id'] ?>" method="post">
    <div class="mb-3">
        <label class="form-label">Nama Buku</label>
        <input type="text" class="form-control" name="nama_buku" value="<?= $data['nama_buku'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Penerbit</label>
        <input type="text" class="form-control" name="penerbit" value="<?= $data['penerbit'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Tahun terbit</label>
        <input type="number" class="form-control" name="tahun_terbit" value="<?= $data['tahun_terbit'] ?>">
    </div>

    <button type="submit" class="btn btn-primary" name="edit">Submit</button>
</form>