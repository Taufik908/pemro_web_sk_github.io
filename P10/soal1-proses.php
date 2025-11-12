<?php
$tahun = $_POST['tahun'];

if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
    $hasil = "Tahun Kabisat";
} else {
    $hasil = "Bukan Tahun Kabisat";
}
?>

<html>
<head>
    <title>Hasil Deteksi Tahun Kabisat</title>
</head>
<body>
    <h1>Hasil Deteksi Tahun Kabisat</h1>
    <p>Tahun <?php echo $tahun; ?> adalah: <strong><?php echo $hasil; ?></strong></p>
    <a href="soal1-form.html">Kembali</a>
</body>
</html>