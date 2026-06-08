<?php
$host = "localhost";
$user = "u828377116_unpatti";     // Default XAMPP
$pass = "Unpatti16";         // Default XAMPP kosong
$db   = "u828377116_db_unpatti"; // GANTI DENGAN NAMA DATABASE ANDA

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek Koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>