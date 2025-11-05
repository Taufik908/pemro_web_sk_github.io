<?php
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$asal_sekolah = $_POST['asal_sekolah'];
$nilai_uan = $_POST['nilai_uan'];
?>

<html>
<head>
    <title>Konfirmasi Pendaftaran</title>
</head>
<body>
    <h1>Konfirmasi Pendaftaran</h1>
    <p>Terimakasih <strong><?php echo $nama; ?></strong> sudah mengisi form pendaftaran.</p>
    
    <h3>Data yang Anda masukkan:</h3>
    <table border="1" cellpadding="5">
        <tr>
            <td><strong>Nama Lengkap</strong></td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td><strong>Tempat Lahir</strong></td>
            <td><?php echo $tempat_lahir; ?></td>
        </tr>
        <tr>
            <td><strong>Tanggal Lahir</strong></td>
            <td><?php echo $tanggal . '-' . $bulan . '-' . $tahun; ?></td>
        </tr>
        <tr>
            <td><strong>Alamat Rumah</strong></td>
            <td><?php echo nl2br($alamat); ?></td>
        </tr>
        <tr>
            <td><strong>Jenis Kelamin</strong></td>
            <td><?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
            <td><strong>Asal Sekolah</strong></td>
            <td><?php echo $asal_sekolah; ?></td>
        </tr>
        <tr>
            <td><strong>Nilai UAN</strong></td>
            <td><?php echo $nilai_uan; ?></td>
        </tr>
    </table>
    <br>
    <a href="soal3-form.html">Kembali ke Form</a>
</body>
</html>