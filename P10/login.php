<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (($username == "joko" && $password == "passjoko") || 
    ($username == "amir" && $password == "passamir")) {
    echo "Login berhasil!";
} else {
    echo "Login gagal! Username atau password salah.";
}
?>