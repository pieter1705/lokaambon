<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/png" href="./assets/loko.jpg">
        <link rel="apple-touch-icon" href="./assets/loko.jpg">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/css/glightbox.min.css" />

        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

        <link rel="stylesheet" href="assets/css/styles.css">

        <title>LOKA MONITOR SFR AMBON</title>
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

    <section class="py-20 bg-gray-50" id="contact">
    <div class="container mx-auto max-w-6xl px-6">
        
        <div class="mb-12 border-b border-gray-200 pb-6" data-aos="fade-up">
            <h3 class="text-gray-400 uppercase tracking-[0.3em] text-xs font-bold mb-2">Contact Us</h3>
            <h2 class="text-4xl font-black text-[#002B49] uppercase leading-none">Hubungi Kami</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            
            <div class="bg-white p-8 rounded-[2rem] shadow-xl border border-gray-100" data-aos="fade-right">
                <form action="proses_kontak.php" method="POST" class="space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block text-xs font-bold text-[#002B49] uppercase mb-2 ml-1">Nama Lengkap</label>
            <input type="text" name="nama" required placeholder="Masukkan nama Anda" class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:outline-none focus:border-blue-500 transition-all">
        </div>
        <div>
            <label class="block text-xs font-bold text-[#002B49] uppercase mb-2 ml-1">E-Mail</label>
            <input type="email" name="email" required placeholder="contoh@mail.com" class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:outline-none focus:border-blue-500 transition-all">
        </div>
    </div>
    
    <div>
        <label class="block text-xs font-bold text-[#002B49] uppercase mb-2 ml-1">Judul Pesan</label>
        <input type="text" name="subjek" required placeholder="Subjek pesan Anda" class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:outline-none focus:border-blue-500 transition-all">
    </div>

    <div>
        <label class="block text-xs font-bold text-[#002B49] uppercase mb-2 ml-1">Pesan</label>
        <textarea name="pesan" rows="5" required placeholder="Tulis pesan Anda di sini..." class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-2xl focus:outline-none focus:border-blue-500 transition-all resize-none"></textarea>
    </div>

    <button type="submit" class="w-full md:w-fit bg-[#002B49] hover:bg-blue-600 text-white font-bold py-4 px-10 rounded-2xl shadow-lg transition-all flex items-center justify-center gap-3 group uppercase text-sm tracking-widest">
        Kirim Pesan
        <i class="ri-send-plane-fill group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
    </button>
</form>
            </div>

            <div class="space-y-8" data-aos="fade-left">
                <div class="h-[450px] rounded-[2rem] overflow-hidden shadow-2xl border-4 border-white relative group">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.5647714881023!2d128.1884020736173!3d-3.6850020427352355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce84400555555%3A0xc47f03f733189d98!2sLoka%20Monitor%20Spektrum%20Frekuensi%20Radio%20Ambon!5e0!3m2!1sid!2sid!4v1704100000000!5m2!1sid!2sid" 
                        class="w-full h-full border-0 grayscale hover:grayscale-0 transition-all duration-700" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    <a href="https://www.google.com/maps/place/LOKA+MONITOR+SFR+AMBON/@-3.6974541,128.2013211,752m/data=!3m1!1e3!4m14!1m7!3m6!1s0x2d6ce974b428561f:0x99cbd4e1654c1f91!2sLOKA+MONITOR+SFR+AMBON!8m2!3d-3.6974541!4d128.203896!16s%2Fg%2F11kr_y_cy5!3m5!1s0x2d6ce974b428561f:0x99cbd4e1654c1f91!8m2!3d-3.6974541!4d128.203896!16s%2Fg%2F11kr_y_cy5?entry=ttu&g_ep=EgoyMDI2MDExMy4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="bg-blue-50 p-6 rounded-3xl text-center border border-blue-100 hover:shadow-md hover:bg-blue-100 transition-all block">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
            <i class="ri-map-pin-2-fill text-xl"></i>
        </div>
        <h4 class="text-[10px] font-black uppercase text-[#002B49]">Alamat</h4>
    </a>

    <a href="tel:08114705124" class="bg-blue-50 p-6 rounded-3xl text-center border border-blue-100 hover:shadow-md hover:bg-blue-100 transition-all block">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
            <i class="ri-phone-fill text-xl"></i>
        </div>
        <h4 class="text-[10px] font-black uppercase text-[#002B49]">Telepon</h4>
    </a>

    <a href="mailto:lokaambon@gmail.com" class="bg-blue-50 p-6 rounded-3xl text-center border border-blue-100 hover:shadow-md hover:bg-blue-100 transition-all block">
        <div class="w-12 h-12 bg-blue-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
            <i class="ri-mail-fill text-xl"></i>
        </div>
        <h4 class="text-[10px] font-black uppercase text-[#002B49]">E-Mail</h4>
    </a>
</div>
            </div>
        </div>

        <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left border-t border-gray-200 pt-12" data-aos="fade-up">
            <div class="flex flex-col items-center md:items-start gap-4">
                <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mb-2">
                    <i class="ri-building-2-fill text-3xl"></i>
                </div>
                <div>
                    <h4 class="font-bold text-[#002B49] mb-2 uppercase text-xs tracking-widest">Kantor Kami</h4>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Kantor Loka Monitor Spektrum Frekuensi Radio Ambon <br>
                        Jl. Tabea Jou Kopertis, Kel Karang Panjang, Kota Ambon, Maluku
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center md:items-start gap-4">
                <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mb-2">
                    <i class="ri-customer-service-2-fill text-3xl"></i>
                </div>
                <div>
                    <h4 class="font-bold text-[#002B49] mb-2 uppercase text-xs tracking-widest">Hubungi Kami</h4>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        <!--Telp: 0911xxxxxx <br>-->
                        WhatsApp: 08114705124
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center md:items-start gap-4">
                <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mb-2">
                    <i class="ri-mail-open-fill text-3xl"></i>
                </div>
                <div>
                    <h4 class="font-bold text-[#002B49] mb-2 uppercase text-xs tracking-widest">Surat Elektronik</h4>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        lokaambon@gmail.com <br>
                        upt_ambon@kominfo.go.id
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
    
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

<script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
<script src="https://cdn.tailwindcss.com"></script>

       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.2/papaparse.min.js"></script>

    <script>
        
// Fungsi Slider Otomatis
function startHeroSlider() {
    const slides = document.querySelectorAll('.hero__slide');
    let currentSlide = 0;

    setInterval(() => {
        // Hapus class active dari slide saat ini
        slides[currentSlide].classList.remove('active');

        // Pindah ke slide berikutnya (kembali ke 0 jika sudah slide terakhir)
        currentSlide = (currentSlide + 1) % slides.length;

        // Tambahkan class active ke slide baru
        slides[currentSlide].classList.add('active');
    }, 5000); // Ganti gambar setiap 5 detik (5000ms)
}

// Panggil fungsi slider saat halaman dimuat
window.addEventListener('DOMContentLoaded', startHeroSlider);
    </script>

    <script>
    
    // 2. Fungsi Animasi Scroll (Reveal Left)
    function initRevealAnimation() {
        const observerOptions = {
            threshold: 0.15 // Animasi jalan saat 15% elemen terlihat
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal-left').forEach((el) => {
            observer.observe(el);
        });
    }

   // 1. Fungsi Statistik Pengunjung
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

<script>
    // Inisialisasi Animasi Saat Scroll
    AOS.init({
        duration: 800,
        once: true
    });

    // Inisialisasi Lightbox (Foto Membesar)
    const lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
</script>

    <script src="assets/js/main.js"></script>
</body>
</html>     