<?php
// echo 'Ini menggunakan PHP';

$nilai = 60;
$kata = "Selamat datang";
$barang = ['meja', 'kursi', 'lampu', 'pintu', 'monitor'];
const phi = 3.14;

// print_r($barang);
// echo phi;

$nilai = 80;
if ($nilai > 70) {
    echo 'Diatas 70';
} elseif ($nilai > 50) {
    echo 'Diatas 50';
} else {
    echo 'Dibawah 50';
}

// echo $nilai > 50 ? 'Nilai Bagus' : 'Nilai kurang';
echo '<br>';

for ($i = 1; $i <= 10; $i++) {
    echo $i . '<br>';
}

foreach ($barang as $item) {
    echo "<h1>$item</h1>";
}

$biodata = [
    'nama' => 'Lina',
    'umur' => 20,
    'alamat' => 'jalan jauh'
];

echo 'Nama saya ' . $biodata['nama'] . ' umur saya ' . $biodata['umur'] . ', saya tinggal di ' . $biodata['alamat'];
