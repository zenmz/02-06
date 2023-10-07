<?php
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $nama_buku = $_POST['nama_buku'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $query = mysqli_query($db, "insert into buku values (null, '$nama_buku', '$penerbit', '$tahun_terbit')");

    if ($query) {
        header('location:index.php');
    }
} elseif (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $nama_buku = $_POST['nama_buku'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $query = mysqli_query($db, "update buku set nama_buku = '$nama_buku', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit' where id = $id");

    if ($query) {
        header('location:index.php');
    }
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($db, "delete from buku where id = $id");

    if ($query) {
        header('location:index.php');
    }
}

// echo $nama_buku;
