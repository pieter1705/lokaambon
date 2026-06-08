<?php
// Memulai session untuk mendapatkan akses ke data session yang ada
session_start();

// Menghapus semua variabel session yang tersimpan
$_SESSION = array();

// Jika ingin menghapus session sepenuhnya, hapus juga cookie session-nya
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Menghancurkan session
session_destroy();

// Mengarahkan pengguna kembali ke halaman index atau login setelah logout
header("Location: index.php");
exit;
?>