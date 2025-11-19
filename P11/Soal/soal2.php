<?php
echo "<h1>Mencari Pasangan x + y + z = 25</h1>";
echo "<p>Dimana x, y, z adalah bilangan asli</p>";

$jumlah_penyelesaian = 0;

echo "<table border='1' cellpadding='5'>";
echo "<tr>
        <th>No</th>
        <th>x</th>
        <th>y</th>
        <th>z</th>
        <th>Hasil</th>
      </tr>";

// Nested loop 3 tingkat
for ($x = 1; $x <= 23; $x++) {
    for ($y = 1; $y <= 23; $y++) {
        for ($z = 1; $z <= 23; $z++) {
            if ($x + $y + $z == 25) {
                $jumlah_penyelesaian++;
                echo "<tr>";
                echo "<td>" . $jumlah_penyelesaian . "</td>";
                echo "<td>" . $x . "</td>";
                echo "<td>" . $y . "</td>";
                echo "<td>" . $z . "</td>";
                echo "<td>" . $x . " + " . $y . " + " . $z . " = " . ($x + $y + $z) . "</td>";
                echo "</tr>";
            }
        }
    }
}

echo "</table>";

echo "<h3>Jumlah penyelesaian: " . $jumlah_penyelesaian . "</h3>";

// Menampilkan penjelasan
echo "<h3>Penjelasan:</h3>";
echo "<p>Nilai minimum untuk x, y, z adalah 1</p>";
echo "<p>Nilai maksimum untuk masing-masing variabel adalah 23 (karena 1 + 1 + 23 = 25)</p>";
echo "<p>Total kombinasi yang diperiksa: 23 × 23 × 23 = " . (23 * 23 * 23) . " kemungkinan</p>";
?>