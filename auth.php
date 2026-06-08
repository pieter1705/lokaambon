<?php
session_start();
include "koneksi.php"; // Pastikan Anda sudah membuat file koneksi ke database

$username = $_POST['username'];
$password = $_POST['password'];
// die("Input: $password | Database: " . $row['password']);
// 1. Ambil data user berdasarkan username
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    // 2. Verifikasi password yang diinput dengan hash di database
    if ($password == $row['password']) {
        
        // 3. Jika benar, buat session
        $_SESSION['username'] = $row['username'];
        $_SESSION['nama'] = $row['nama_lengkap'];
        $_SESSION['role'] = $row['role'];

        // Redirect ke halaman utama
        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('Password Salah!'); window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('Username Tidak Ditemukan!'); window.location='login.php';</script>";
}
?>