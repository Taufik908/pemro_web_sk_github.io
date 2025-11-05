<html>
<head>
    <title>Menghitung Komisi Salesman</title>
</head>
<body>
    <h1>Menghitung Komisi Salesman</h1>
    <?php
    $penjualan = $_POST["penjualan"];    // membaca nilai penjualan
    $prosenKomisi = $_POST["komisi"];    // membaca nilai prosentase komisi
    
    $komisi = $penjualan * $prosenKomisi / 100;  // hitung komisi berdasarkan prosen komisi
    
    echo "Penjualan : Rp. $penjualan <br/>";     // menampilkan nilai penjualan salesman
    echo "Prosentase Komisi : $prosenKomisi % <br/>";    // menampilkan nilai prosentase komisi salesman
    echo "Komisi yang didapat salesman adalah Rp. $komisi </p>";   // menampilkan hasil perhitungan komisi
    ?>
</body>
</html>