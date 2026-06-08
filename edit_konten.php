<?php
session_start();
include 'koneksi.php';

// Keamanan: Cek apakah yang login adalah Editor
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'editor') {
    header("Location: login.php");
    exit();
}

// Ambil ID halaman yang dikirim dari Dashboard
$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$query = mysqli_query($koneksi, "SELECT * FROM halaman WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);

// Jika tombol "Simpan Perubahan" diklik
if (isset($_POST['update'])) {
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul_header']);
    $konten = mysqli_real_escape_string($koneksi, $_POST['isi_konten']);

    $update = mysqli_query($koneksi, "UPDATE halaman SET 
                judul_header = '$judul', 
                isi_konten = '$konten' 
                WHERE id = '$id'");

    if ($update) {
        echo "<script>alert('Berhasil! Konten " . $data['nama_halaman'] . " telah diperbarui.'); window.location='dashboard_editor.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui konten.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit <?= $data['nama_halaman']; ?> - Loka Ambon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6 md:p-12">
    <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-xl overflow-hidden">
        <div class="bg-[#002B49] p-8 text-white flex justify-between items-center">
            <div>
                <p class="text-blue-300 text-xs uppercase tracking-widest font-bold mb-1">Mode Editor</p>
                <h1 class="text-2xl font-bold">Edit Halaman: <?= $data['nama_halaman']; ?></h1>
            </div>
            <a href="dashboard_editor.php" class="text-white/50 hover:text-white transition-all text-2xl"><i class="ri-close-circle-line"></i></a>
        </div>

        <form action="" method="POST" class="p-8 space-y-6">
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Judul Header Halaman</label>
                <input type="text" name="judul_header" value="<?= $data['judul_header']; ?>" required
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Isi Konten / Paragraf Utama</label>
                <textarea name="isi_konten" rows="12" required
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all font-sans leading-relaxed"><?= $data['isi_konten']; ?></textarea>
                <p class="text-[10px] text-gray-400 mt-2 italic">*Gunakan Enter untuk membuat paragraf baru.</p>
            </div>

            <div class="pt-4 border-t border-gray-100 flex gap-4">
                <button type="submit" name="update" 
                    class="bg-[#002B49] text-white px-8 py-3 rounded-xl font-bold hover:bg-blue-800 transition-all flex items-center gap-2">
                    <i class="ri-save-3-line"></i> Simpan Perubahan
                </button>
                <a href="dashboard_editor.php" class="bg-gray-100 text-gray-600 px-8 py-3 rounded-xl font-bold hover:bg-gray-200 transition-all">
                    Batal
                </a>
            </div>
        </form>
    </div>
</body>
</html>