<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $ke = "udutpieter17@gmail.com";
    $subjek = $_POST['subjek'];
    $pesan = "Dari: " . $_POST['nama'] . "\nEmail: " . $_POST['email'] . "\n\n" . $_POST['pesan'];
    $headers = "From: " . $_POST['email'];

    if(mail($ke, $subjek, $pesan, $headers)) {
        echo "<script>alert('Pesan terkirim!'); window.location='kontak.php';</script>";
    } else {
        echo "Gagal mengirim pesan.";
    }
}
?>