<?php
$jam = $_POST['jam'];
$golongan = $_POST['golongan'];
$jam_normal = 48;
$lembur = 3000;

$upah = ['A'=>4000, 'B'=>5000, 'C'=>6000, 'D'=>7500];
$rate = $upah[$golongan];

if ($jam <= $jam_normal) {
    $total = $jam * $rate;
} else {
    $total = ($jam_normal * $rate) + (($jam - $jam_normal) * $lembur);
}

echo "<h3>Hasil Perhitungan</h3>";
echo "Golongan: $golongan<br>";
echo "Jam Kerja: $jam jam<br>";
echo "Total Upah: Rp. " . number_format($total, 0, ',', '.') . ",-<br>";
?>