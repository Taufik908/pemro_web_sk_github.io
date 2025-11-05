<?php
$nama = $_GET['nama'];
$email = $_GET['email'];
?>

<html>
<head>
    <title>Hasil Form GET</title>
</head>
<body>
    <h1>Hasil Pendaftaran (Method GET)</h1>
    <p><strong>Perhatikan URL browser:</strong> Data terlihat dalam parameter URL</p>
    
    <h3>Data yang Anda masukkan:</h3>
    <p>Nama: <?php echo $nama; ?></p>
    <p>Email: <?php echo $email; ?></p>
    
    <h3>Kesimpulan:</h3>
    <p>Method GET masih bisa bekerja tetapi:</p>
    <ul>
        <li>Data terlihat di address bar browser</li>
        <li>Kurang aman untuk data sensitif</li>
        <li>Terbatas panjang URL (~2048 karakter)</li>
        <li>Dapat di-bookmark</li>
    </ul>
    
    <a href="soal4-get-form.html">Kembali ke Form GET</a>
</body>
</html>