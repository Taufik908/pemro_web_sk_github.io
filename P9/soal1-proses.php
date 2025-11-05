<?php
$saldoAwal = $_POST['saldo_awal'];
$bunga = $_POST['bunga'] / 100;
$bulan = $_POST['bulan'];

$saldoAkhir = $saldoAwal * pow(1 + $bunga, $bulan);
?>

<html>
<head>
    <title>Hasil Perhitungan Saldo</title>
</head>
<body>
    <h1>Hasil Perhitungan Saldo Tabungan</h1>
    <p>Saldo Awal: Rp. <?php echo number_format($saldoAwal, 0, ',', '.'); ?></p>
    <p>Bunga per Bulan: <?php echo $_POST['bunga']; ?>%</p>
    <p>Lama Menabung: <?php echo $bulan; ?> bulan</p>
    <p><strong>Saldo Akhir: Rp. <?php echo number_format($saldoAkhir, 0, ',', '.'); ?></strong></p>
    <a href="soal1-form.html">Kembali</a>
</body>
</html>