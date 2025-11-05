<?php
$jumlahUang = $_POST['jumlah_uang'];
$sisa = $jumlahUang;

// Hitung masing-masing pecahan
$pecahan100k = floor($sisa / 100000);
$sisa = $sisa % 100000;

$pecahan50k = floor($sisa / 50000);
$sisa = $sisa % 50000;

$pecahan20k = floor($sisa / 20000);
$sisa = $sisa % 20000;

$pecahan5k = floor($sisa / 5000);
$sisa = $sisa % 5000;

$pecahan100 = floor($sisa / 100);
$sisa = $sisa % 100;

$pecahan50 = floor($sisa / 50);
$sisa = $sisa % 50;
?>

<html>
<head>
    <title>Hasil Pecahan Uang</title>
</head>
<body>
    <h1>Hasil Penghitungan Pecahan Uang</h1>
    <p>Jumlah Uang: Rp. <?php echo number_format($jumlahUang, 0, ',', '.'); ?></p>
    <h3>Pecahan Uang:</h3>
    <p>Rp. 100.000 : <?php echo $pecahan100k; ?> lembar</p>
    <p>Rp. 50.000 : <?php echo $pecahan50k; ?> lembar</p>
    <p>Rp. 20.000 : <?php echo $pecahan20k; ?> lembar</p>
    <p>Rp. 5.000 : <?php echo $pecahan5k; ?> lembar</p>
    <p>Rp. 100 : <?php echo $pecahan100; ?> koin</p>
    <p>Rp. 50 : <?php echo $pecahan50; ?> koin</p>
    <p>Sisa : Rp. <?php echo $sisa; ?></p>
    <a href="soal2-form.html">Kembali</a>
</body>
</html>