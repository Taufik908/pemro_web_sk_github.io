<?php
$jam = $_POST['jam'];
$upah_per_jam = 2000;
$upah_lembur = 3000;
$jam_normal = 48;

if ($jam <= $jam_normal) {
    $total = $jam * $upah_per_jam;
} else {
    $lembur = $jam - $jam_normal;
    $total = ($jam_normal * $upah_per_jam) + ($lembur * $upah_lembur);
}

echo "Total upah yang diterima: Rp. " . number_format($total, 0, ',', '.') . ",-";
?>