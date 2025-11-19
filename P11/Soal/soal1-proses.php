<?php
$saldo_awal = $_POST['saldo_awal'];
$bulan = $_POST['bulan'];
$saldo = $saldo_awal;

echo "<h1>Hasil Simulasi Tabungan Bank</h1>";
echo "<p>Saldo Awal: Rp. " . number_format($saldo_awal, 0, ',', '.') . "</p>";
echo "<p>Jangka Waktu: " . $bulan . " bulan</p>";
echo "<hr>";

echo "<h3>Rincian Per Bulan:</h3>";
echo "<table border='1' cellpadding='5'>";
echo "<tr>
        <th>Bulan</th>
        <th>Saldo Awal</th>
        <th>Bunga</th>
        <th>Biaya Admin</th>
        <th>Saldo Akhir</th>
      </tr>";

for ($i = 1; $i <= $bulan; $i++) {
    $saldo_awal_bulan = $saldo;
    
    // Hitung bunga berdasarkan saldo
    if ($saldo < 1100000) {
        $bunga = $saldo * 0.03 / 12; // 3% per tahun
    } else {
        $bunga = $saldo * 0.04 / 12; // 4% per tahun
    }
    
    $biaya_admin = 9000;
    $saldo = $saldo + $bunga - $biaya_admin;
    
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td>Rp. " . number_format($saldo_awal_bulan, 0, ',', '.') . "</td>";
    echo "<td>Rp. " . number_format($bunga, 0, ',', '.') . "</td>";
    echo "<td>Rp. " . number_format($biaya_admin, 0, ',', '.') . "</td>";
    echo "<td>Rp. " . number_format($saldo, 0, ',', '.') . "</td>";
    echo "</tr>";
}

echo "</table>";

echo "<h3>Kesimpulan:</h3>";
echo "<p>Saldo Akhir setelah " . $bulan . " bulan: <strong>Rp. " . number_format($saldo, 0, ',', '.') . "</strong></p>";

echo "<br><a href='soal1-form.html'>Kembali ke Form</a>";
?>