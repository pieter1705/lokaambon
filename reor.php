<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="./assets/loko.jpg">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <title>Perpanjangan Sertifikat Operator Radio - Loka Monitor Ambon</title>
    
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .header { background-color: #001a2e; }
        .nav__link { color: white !important; }
        .step-number { 
            background: linear-gradient(135deg, #2D2A70 0%, #1a184d 100%); 
            box-shadow: 0 4px 15px rgba(45, 42, 112, 0.3);
        }
    </style>
</head>
<body>
        <header class="header">
            <nav class="nav container">
                <div class="nav__data">
                    <a href="index.php" class="nav__logo">LOKA MONITOR SFR AMBON</a>
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line nav__burger"></i>
                        <i class="ri-close-line nav__close"></i>
                    </div>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li><a href="index.php" class="nav__link">Home</a></li>
                        <li class="dropdown__item">
                            
        <div class="nav__link">
            Profil <i class="ri-arrow-down-s-line dropdown__arrow"></i>
        </div>

        <ul class="dropdown__menu">
            <li>
                <a href="sejarah.php" class="dropdown__link">
                    <i class="ri-user-line"></i> Tentang Kami
                </a>
            </li>
            <li>
                <a href="visi.php" class="dropdown__link">
                    <i class="ri-flag-line"></i> Visi & Misi
                </a>
            </li>
            <li>
                <a href="sto.php" class="dropdown__link">
                    <i class="ri-organization-chart"></i> Struktur Organisasi
                </a>
            </li>
            <li>
                <a href="tugas.php" class="dropdown__link">
                    <i class="ri-briefcase-line"></i> Tugas & Fungsi
                </a>
            </li>
        </ul>
    </li>
                        <li class="dropdown__item">
                            
        <div class="nav__link">
            Pengaduan <i class="ri-arrow-down-s-line dropdown__arrow"></i>
        </div>

        <ul class="dropdown__menu">
            <li>
                <a href="lgf.php" class="dropdown__link">
                    <i class="ri-user-line"></i> Lapor gangguan Frekuensi
                </a>
            </li>
            <li>
                <a href="https://wbs.komdigi.go.id/" target='balnk' class="dropdown__link">
                    <i class="ri-flag-line"></i> WhistleBlow System
                </a>
            </li>
            <li>
                <a href="https://kominfo.lapor.go.id/" class="dropdown__link">
                    <i class="ri-organization-chart"></i> SP4N
                </a>
            </li>
            </ul>
    </li>
                        <li class="dropdown__item">
                            
        <div class="nav__link">
            Informasi <i class="ri-arrow-down-s-line dropdown__arrow"></i>
        </div>

        <ul class="dropdown__menu">
            <li>
                <a href="artikel.php" class="dropdown__link">
                    <i class="ri-user-line"></i> Artikel
                </a>
            </li>
            <li>
                <a href="lkip.php" class="dropdown__link">
                    <i class="ri-flag-line"></i> LKIP
                </a>
            </li>
            <li>
                <a href="capaian.php" class="dropdown__link">
                    <i class="ri-organization-chart"></i> Capaian Kinerja Tahunan
                </a>
            </li>
            <li><a href="isar.php" class="dropdown__link"><i class="ri-pulse-line"></i> Informasi Sertifikasi Alat</a></li>
            <li>
                <a href="mapping.php" class="dropdown__link">
                    <i class="ri-briefcase-line"></i> Dashboard Mapping Loka Monitor SFR Ambon
                </a>
            </li>
        </ul>
    </li>

    <li class="dropdown__item">
                            
        <div class="nav__link">
            Regulasi <i class="ri-arrow-down-s-line dropdown__arrow"></i>
        </div>

        <ul class="dropdown__menu">
            <li>
                <a href="https://jdih.komdigi.go.id/produk_hukum/pencarian?tentang=&kategori=1&tahun=all" target="blank" class="dropdown__link">
                    <i class="ri-user-line"></i> Undang-Undang
                </a>
            </li>
            <li>
                <a href="https://jdih.komdigi.go.id/produk_hukum/pencarian?tentang=&kategori=3&tahun=all" class="dropdown__link">
                    <i class="ri-flag-line"></i> Peraturan Pemerintah
                </a>
            </li>
            <li>
                <a href="https://jdih.komdigi.go.id/produk_hukum/pencarian?tentang=&kategori=7&tahun=all" class="dropdown__link">
                    <i class="ri-organization-chart"></i> Peraturan Menteri
                </a>
            </li>
            </ul>
    </li>

                        <li class="dropdown__item">
            <div class="nav__link">
                Layanan <i class="ri-arrow-down-s-line dropdown__arrow"></i>
            </div>
            <ul class="dropdown__menu">
                <li class="dropdown__subitem">
                    <div class="dropdown__link">
                        <i class="ri-broadcast-line"></i> Dinas Amatir <i class="ri-arrow-right-s-line dropdown__add"></i>
                    </div>
                    <ul class="dropdown__submenu">
                        <li><a href="db_orari.php" class="dropdown__sublink"><i class="ri-radio-2-line"></i> ORARI</a></li>
                        <li><a href="db_ikrap.php" class="dropdown__sublink"><i class="ri-mic-line"></i> RAPI</a></li>
                    </ul>
                </li>
                <li><a href="https://seenow.postel.go.id/" target="blank" class="dropdown__link"><i class="ri-broadcast-line"></i>Try-Out Amatir Radio</a></li>
                <li><a href="iar.php" class="dropdown__link"><i class="ri-broadcast-line"></i> Izin Amatir Radio</a></li>
                <li><a href="isr.php" class="dropdown__link"><i class="ri-file-shield-2-line"></i> Izin Spektrum Frekuensi Radio</a></li>
                <li><a href="reor.php" class="dropdown__link"><i class="ri-smartphone-line"></i> Perpanjang Sertifikat REOR</a></li>
                
                <li><a href="https://www.postel.go.id/sdppi_maps/10-20200601-sdppi-maps-simulasi-bhp.php?utm_source=kominfo&utm_medium=shorturl" target="_blank" class="dropdown__link"><i class="ri-money-dollar-circle-line"></i> Simulasi BHP</a></li>
            </ul>
        </li>
                        <li><a href="#Home" class="nav__link">Reformasi Birokrasi</a></li>

                    <li class="dropdown__item">
                        <div class="nav__link">
                            Galeri <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>
                        <ul class="dropdown__menu">
                            <li><a href="foto.php" class="dropdown__link"><i class="ri-image-line"></i> Gambar</a></li>
                            <li><a href="vidio.php" class="dropdown__link"><i class="ri-video-line"></i> Video</a></li>
                        </ul>
                    </li>

                    <li><a href="kontak.php" class="nav__link">Contact</a></li>
                    <li><a href="login.php" class="nav__link"><i class="ri-lock-password-line"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="mt-20 bg-[#002B49] text-white py-16 shadow-lg relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500 opacity-10 rounded-full -mr-20 -mt-20"></div>
        <div class="container mx-auto px-6 relative z-10">
            <nav class="text-sm mb-4 text-blue-300 uppercase tracking-widest font-bold">
                Pelayanan &nbsp;/&nbsp; Sertifikasi
            </nav>
            <h1 class="text-4xl md:text-5xl font-black tracking-tight uppercase leading-tight">
                Perpanjangan Sertifikat <br><span class="text-yellow-400">Operator Radio (REOR)</span>
            </h1>
            <div class="h-1.5 w-24 bg-yellow-400 mt-6 rounded-full"></div>
        </div>
    </section>

    <main class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <div class="lg:col-span-2 space-y-12">
                
                <section class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <div class="flex gap-4 items-start">
                        <div class="bg-blue-100 p-3 rounded-2xl">
                            <i class="ri-medal-line text-3xl text-blue-600"></i>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold text-[#002B49] mb-4">Apa itu Sertifikasi REOR?</h2>
                            <p class="text-slate-600 leading-relaxed text-sm">
                                Sertifikasi Radio Elektronik dan Elektronik Radio (REOR) merupakan bukti kompetensi seseorang untuk melakukan pekerjaan sebagai radio elektronika atau operator radio pada stasiun kapal atau stasiun radio pantai sesuai standar <strong>GMDSS</strong>. Sertifikat ini berlaku selama 5 tahun dan dapat diperpanjang paling cepat 12 bulan sebelum masa berlaku habis.
                            </p>
                        </div>
                    </div>
                </section>

                <section class="space-y-8">
                    <h2 class="text-2xl font-bold text-[#002B49] flex items-center gap-3">
                        <i class="ri-list-ordered text-blue-600"></i> Langkah Permohonan Sertifikasi
                    </h2>

                    <div class="space-y-6">
                        <div class="flex gap-6 relative">
                            <div class="step-number w-10 h-10 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0 z-10">1</div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 w-full">
                                <h3 class="font-bold text-slate-800 mb-2 uppercase text-sm">Ujian Negara REOR</h3>
                                <p class="text-xs text-slate-500 italic mb-2">Pendaftaran: https://reor.postel.go.id/</p>
                                <p class="text-sm text-slate-600 leading-relaxed">Pendaftar wajib mengikuti proses pembelajaran di Lembaga Diklat REOR yang ditunjuk dan mendaftar ujian secara online melalui e-licensing REOR.</p>
                            </div>
                            <div class="absolute left-5 top-10 w-0.5 h-full bg-slate-200"></div>
                        </div>

                        <div class="flex gap-6 relative">
                            <div class="step-number w-10 h-10 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0 z-10">2</div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 w-full">
                                <h3 class="font-bold text-slate-800 mb-2 uppercase text-sm">Kelengkapan Dokumen</h3>
                                <ul class="text-sm text-slate-600 space-y-2 list-disc pl-4">
                                    <li>Scan Surat Tanda Tamat Pendidikan & Pelatihan (STTPP) REOR.</li>
                                    <li>Scan KTP & Foto diri terbaru 4x6 (Kemeja putih & berdasi hitam).</li>
                                </ul>
                            </div>
                            <div class="absolute left-5 top-10 w-0.5 h-full bg-slate-200"></div>
                        </div>

                        <div class="flex gap-6 relative">
                            <div class="step-number w-10 h-10 rounded-full flex items-center justify-center text-white font-bold flex-shrink-0 z-10">3</div>
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 w-full">
                                <h3 class="font-bold text-slate-800 mb-2 uppercase text-sm">Biaya Sertifikasi</h3>
                                <div class="grid grid-cols-2 gap-4 mt-4">
                                    <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                                        <p class="text-[10px] text-slate-400 uppercase font-bold">SRE-I & SRE-II</p>
                                        <p class="font-black text-blue-600 text-sm">Rp 100.000</p>
                                    </div>
                                    <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                                        <p class="text-[10px] text-slate-400 uppercase font-bold">SOU / SOT</p>
                                        <p class="font-black text-blue-600 text-sm">Rp 50.000</p>
                                    </div>
                                </div>
                                <p class="text-[10px] text-slate-400 mt-2 font-medium italic"></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="lg:col-span-1">
                <div class="sticky top-28 space-y-6">
                    
                    <div class="bg-gradient-to-br from-[#2D2A70] to-[#1a184d] p-8 rounded-[2.5rem] text-white shadow-2xl relative overflow-hidden group">
                        <div class="absolute -right-4 -bottom-4 opacity-10 group-hover:scale-110 transition-transform">
                            <i class="ri-calendar-check-line text-9xl"></i>
                        </div>
                        <i class="ri-qr-code-line text-4xl text-blue-400 mb-6 block"></i>
                        <h3 class="text-xl font-bold mb-4 leading-tight">Booking Online Pengambilan Sertifikat</h3>
                        <p class="text-blue-100 text-sm mb-8 leading-relaxed">
                            Pilih jadwal pengambilan sertifikat Anda di Balai/Loka Monitor terdekat untuk menghindari antrian fisik.
                        </p>
                        <a href="https://antrian.postel.go.id" target="_blank" 
                           class="flex items-center justify-center gap-3 bg-white text-[#2D2A70] py-4 px-6 rounded-2xl font-black uppercase text-sm hover:bg-yellow-400 transition-all shadow-lg active:scale-95">
                            AMBIL NOMOR ANTRIAN <i class="ri-external-link-line"></i>
                        </a>
                    </div>

                    <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm">
                        <h4 class="font-bold text-[#002B49] mb-4 flex items-center gap-2">
                            <i class="ri-error-warning-line text-orange-500"></i> Ketentuan Pengambilan
                        </h4>
                        <ul class="space-y-3 text-xs text-slate-600">
                            <li class="flex gap-2"><i class="ri-checkbox-circle-fill text-green-500"></i> Tunjukkan QR Code Antrian ke petugas.</li>
                            <li class="flex gap-2"><i class="ri-checkbox-circle-fill text-green-500"></i> Sertifikat dikirim ke Lembaga Diklat pengukuhan.</li>
                            <li class="flex gap-2"><i class="ri-checkbox-circle-fill text-green-500"></i> Bawa surat kuasa jika diwakilkan.</li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <footer class="bg-[#002B49] text-white pt-16 pb-6 font-sans relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
        <svg viewBox="0 0 1440 320" class="absolute bottom-0 w-full transform scale-110">
            <path fill="#0099ff" d="M0,128L48,144C96,160,192,192,288,186.7C384,181,480,139,576,144C672,149,768,203,864,213.3C960,224,1056,192,1152,165.3C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-start">
            
            <div>
                <div class="mb-8">
                    <h3 class="font-bold mb-4 tracking-wider text-blue-400 border-l-4 border-blue-500 pl-3">LINK NAVIGASI</h3>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li><a href="#" class="hover:text-white hover:translate-x-1 inline-block transition-all">FAQ</a></li>
                        <li><a href="#" class="hover:text-white hover:translate-x-1 inline-block transition-all">Hubungi Kami</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold mb-5 tracking-wider uppercase text-blue-400 border-l-4 border-blue-500 pl-3">Keep Connected</h3>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/share/1DsP8MUBgA/" target='blank' class="w-10 h-10 bg-white/10 hover:bg-blue-600 rounded-full flex items-center justify-center transition-all group" title="Facebook">
                            <i class="ri-facebook-fill text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/lokaambon?igsh=dHB5bXFtNzRtMDQw" target='blank' class="w-10 h-10 bg-white/10 hover:bg-pink-600 rounded-full flex items-center justify-center transition-all group" title="Instagram">
                            <i class="ri-instagram-line text-xl"></i>
                        </a>
                        <a href="https://youtube.com/@lokamonitorsframbon8750?si=YNzinPrigxTcRb1V" target='blank' class="w-10 h-10 bg-white/10 hover:bg-red-600 rounded-full flex items-center justify-center transition-all group" title="Youtube">
                            <i class="ri-youtube-fill text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white/5 backdrop-blur-sm p-6 rounded-2xl border border-white/10 shadow-2xl">
                <h3 class="font-bold mb-6 tracking-wider uppercase text-center text-blue-400">Statistik Pengunjung</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center p-3 bg-white/5 rounded-lg">
                        <p class="text-[10px] uppercase text-gray-400 mb-1">Hari Ini</p>
                        <span id="stat-today" class="font-mono text-lg font-bold">0</span>
                    </div>
                    <div class="text-center p-3 bg-white/5 rounded-lg">
                        <p class="text-[10px] uppercase text-gray-400 mb-1">Kemarin</p>
                        <span id="stat-yesterday" class="font-mono text-lg font-bold text-gray-300">0</span>
                    </div>
                    <div class="text-center p-3 bg-white/5 rounded-lg col-span-2">
                        <p class="text-[10px] uppercase text-gray-400 mb-1">Bulan Ini</p>
                        <span id="stat-month" class="font-mono text-xl font-bold text-blue-300">0</span>
                    </div>
                    <div class="text-center p-3 bg-blue-500/20 rounded-lg col-span-2 border border-blue-500/30">
                        <p class="text-[10px] uppercase text-blue-200 mb-1 font-bold">Total Kunjungan</p>
                        <span id="stat-total" class="font-mono text-2xl font-bold text-white">0</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center md:items-end">
                <div class="bg-white p-6 rounded-3xl shadow-[0_20px_50px_rgba(8,_112,_184,_0.7)] text-center w-72 transform hover:-translate-y-2 transition-all duration-300">
                    <div class="mb-4">
                        <div class="w-20 h-20 bg-blue-50 mx-auto rounded-full flex items-center justify-center mb-3">
                            <i class="ri-customer-service-2-fill text-4xl text-[#2D2A70]"></i>
                        </div>
                        <h4 class="text-xs font-black text-gray-800 leading-tight uppercase tracking-tighter">
                            Layanan Informasi & Pengaduan<br>
                            <span class="text-blue-600">Loka Monitor SFR Ambon</span>
                        </h4>
                    </div>
                    <a href="https://wa.me/628114705124" class="block bg-gradient-to-r from-[#2D2A70] to-[#1a184d] text-white py-3 px-4 rounded-2xl font-bold text-xl hover:shadow-lg active:scale-95 transition-all">
                        08114705124
                    </a>
                    <p class="text-[9px] text-gray-400 mt-2 italic">*Klik nomor untuk chat via WhatsApp</p>
                </div>
            </div>
        </div>

        <div class="mt-16 pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="text-sm text-gray-400 space-y-1">
                <p class="font-semibold text-gray-300">Copyright &copy; 2026 Loka Monitor Ambon</p>
                <p>Kementerian Komunikasi dan Digital Republik Indonesia</p>
            </div>
            <div class="mt-4 md:mt-0 flex gap-6 text-[10px] uppercase tracking-widest text-gray-500">
                <!--<a href="#" class="hover:text-white">Privacy Policy</a>-->
                <!--<a href="#" class="hover:text-white">Terms of Service</a>-->
            </div>
        </div>
    </div>
</footer>

<script>
    
    // 1. Fungsi Burger Menu (Tambahkan ini!)
    const navMenu = document.getElementById('nav-menu'),
          navToggle = document.getElementById('nav-toggle');

    if(navToggle){
        navToggle.addEventListener('click', () =>{
            // Menambah class show-menu untuk menampilkan navigasi
            navMenu.classList.toggle('show-menu');
            // Menambah class show-icon untuk mengubah ikon burger ke close
            navToggle.classList.toggle('show-icon');
        });
    }
    
// 2. Fungsi Statistik Pengunjung
    async function updateVisitorStats() {
    try {
        // Mengambil data dari penyimpanan lokal browser
        let totalVisit = parseInt(localStorage.getItem('stat_total')) || 1250; 
        let todayVisit = parseInt(localStorage.getItem('stat_today')) || 45;
        let yesterdayVisit = parseInt(localStorage.getItem('stat_yesterday')) || 38;
        let monthVisit = parseInt(localStorage.getItem('stat_month')) || 420;
        let lastVisitDate = localStorage.getItem('stat_last_date');

        const now = new Date();
        const currentDateString = now.toDateString(); // Format: "Wed Jan 21 2026"
        const currentMonth = now.getMonth();

        // Logika Reset Harian & Bulanan
        if (lastVisitDate !== currentDateString) {
            // Jika hari berganti, pindahkan angka hari ini ke kemarin
            localStorage.setItem('stat_yesterday', todayVisit);
            yesterdayVisit = todayVisit;
            
            // Reset angka hari ini dimulai dari 1
            todayVisit = 1;

            // Cek apakah ganti bulan (jika bulan sekarang berbeda dengan bulan terakhir kunjungan)
            const lastDateObj = lastVisitDate ? new Date(lastVisitDate) : null;
            if (lastDateObj && lastDateObj.getMonth() !== currentMonth) {
                monthVisit = 1;
            } else {
                monthVisit += 1;
            }
        } else {
            // Jika masih di hari yang sama, tambahkan +1
            todayVisit += 1;
            monthVisit += 1;
        }

        // Tambah Total Kunjungan
        totalVisit += 1;

        // Simpan kembali data yang telah diperbarui
        localStorage.setItem('stat_total', totalVisit);
        localStorage.setItem('stat_today', todayVisit);
        localStorage.setItem('stat_month', monthVisit);
        localStorage.setItem('stat_last_date', currentDateString);

        // Update tampilan ke HTML
        document.getElementById('stat-today').innerText = todayVisit.toLocaleString('id-ID');
        document.getElementById('stat-yesterday').innerText = yesterdayVisit.toLocaleString('id-ID');
        document.getElementById('stat-month').innerText = monthVisit.toLocaleString('id-ID');
        document.getElementById('stat-total').innerText = totalVisit.toLocaleString('id-ID');

    } catch (error) {
        console.error("Gagal memperbarui statistik:", error);
    }
}

 // 3. Jalankan Semua Fungsi Saat Window Load
    window.addEventListener('load', () => {
        updateVisitorStats();
        initRevealAnimation();
        if (typeof startHeroSlider === "function") startHeroSlider();
        
        // Cek parameter URL untuk peta
        const urlParams = new URLSearchParams(window.location.search);
        const region = urlParams.get('region');
        if (region) activateMap(decodeURIComponent(region));
    });


// Jalankan fungsi saat halaman dimuat
    window.onload = updateVisitorStats;
    </script>

</body>
</html>