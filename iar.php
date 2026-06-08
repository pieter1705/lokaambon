<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Izin Amatir Radio - Loka Ambon</title>

    <link rel="icon" type="image/png" href="./assets/loko.jpg">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.2/papaparse.min.js"></script>

    <style>
        /* CSS Dashboard db_orari.php */
        :root {
            --bg-dashboard: #f0f2f9;
            --primary: #2563eb;
            --primary-light: #dbeafe;
            --secondary: #000000ff;
            --card-bg: #ffffff;
            --border-soft: rgba(226, 232, 240, 0.8);
        }

        .dashboard-section { background-color: var(--bg-dashboard); padding: 2rem 0; }
        .layout-grid {
            display: grid;
            grid-template-columns: 1fr 380px;
            gap: 24px;
            max-width: 1700px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        @media (max-width: 1280px) { .layout-grid { grid-template-columns: 1fr; } }

        .summary-card {
            background: var(--card-bg); padding: 24px; border-radius: 24px;
            box-shadow: 0 10px 30px -5px rgba(0,0,0,0.05);
            display: flex; align-items: center; gap: 16px; border: 1px solid var(--border-soft);
        }

        .summary-card i {
            font-size: 24px; padding: 16px; border-radius: 18px;
            background: var(--primary-light); color: var(--primary);
        }

        .db-card {
            background: var(--card-bg); border-radius: 24px;
            border: 1px solid var(--border-soft); padding: 28px; margin-bottom: 24px;
        }

        .btn-filter {
            padding: 8px 16px; font-size: 0.8rem; font-weight: 600;
            background: white; border: 1px solid #e2e8f0; border-radius: 10px;
            cursor: pointer; transition: all 0.3s; margin: 0 4px 10px 0; color: var(--secondary);
        }

        .btn-filter.active { background: var(--primary); color: white; box-shadow: 0 10px 20px rgba(37, 99, 235, 0.25); }

        .chart-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
        @media (max-width: 768px) { .chart-grid { grid-template-columns: 1fr; } }

        .chart-wrapper { height: 320px; position: relative; }
        
        /* DataTable styling adjustment */
        .side-panel { position: sticky; top: 100px; height: fit-content; }
        table.dataTable tbody tr { background: #fff; border-radius: 10px; }
    </style>
</head>
<body class="bg-gray-50">

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
                Pelayanan &nbsp;/&nbsp; Perizinan
            </nav>
            <h1 class="text-4xl md:text-5xl font-black tracking-tight uppercase">Izin Amatir Radio (IAR)</h1>
            <div class="h-1.5 w-24 bg-yellow-400 mt-6 rounded-full"></div>
        </div>
    </section>
    
    <main class="container mx-auto px-6 py-16 border-t border-gray-200">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <div class="lg:col-span-2 space-y-10">
                <section class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <h2 class="text-2xl font-bold text-[#002B49] flex items-center gap-3">
                        <i class="bi bi-book text-4xl text-blue-400 mb-6 block"></i></i> Layanan Perizinan
                    </h2>
                    <br>
                    <p class="text-gray-700 text-lg leading-relaxed italic">
                        "Izin untuk mendirikan, memiliki, mengoperasikan stasiun amatir radio dan menggunakan frekuensi radio pada alokasi yang telah ditentukan untuk radio amatir di Indonesia."
                    </p>
                </section>

                <section class="space-y-6">
                    <h2 class="text-2xl font-bold text-[#002B49] flex items-center gap-3">
                        <i class="bi bi-diagram-3-fill text-blue-600"></i> Alur Perizinan
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-2xl shadow-md border-t-4 border-blue-600 hover:shadow-xl transition-all">
                            <h3 class="font-black text-gray-800 mb-4 uppercase">Alur UNAR & IAR Baru</h3>
                            <div class="bg-slate-100 h-48 rounded-xl flex items-center justify-center mb-4">
                                <i class="bi bi-image text-slate-400 text-4xl"></i>
                            </div>
                            <p class="text-sm text-gray-600">Proses sertifikasi melalui UNAR untuk mendapatkan IAR pertama kali.</p>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-md border-t-4 border-orange-500 hover:shadow-xl transition-all">
                            <h3 class="font-black text-gray-800 mb-4 uppercase">Alur Perizinan IKRAP</h3>
                            <div class="bg-slate-100 h-48 rounded-xl flex items-center justify-center mb-4">
                                <i class="bi bi-image text-slate-400 text-4xl"></i>
                            </div>
                            <p class="text-sm text-gray-600">Izin Komunikasi Radio Antar Penduduk sesuai regulasi.</p>
                        </div>
                    </div>
                </section>
            </div>

            <div class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    <div class="bg-gradient-to-br from-[#2D2A70] to-[#1a184d] p-8 rounded-[2.5rem] text-white shadow-2xl">
                        <i class="bi bi-laptop text-4xl text-blue-400 mb-6 block"></i>
                        <h3 class="text-xl font-bold mb-4">Ajukan Perizinan Online</h3>
                        <p class="text-blue-100 text-sm mb-8">Pendaftaran dan perpanjangan IAR/IKRAP lebih mudah melalui portal e-Licensing.</p>
                        <a href="https://iar-ikrap.postel.go.id" target="_blank" class="flex items-center justify-center gap-3 bg-white text-[#2D2A70] py-4 px-6 rounded-2xl font-black uppercase text-sm hover:bg-yellow-400 transition-colors">
                            Buka Portal IAR-IKRAP <i class="bi bi-box-arrow-up-right"></i>
                        </a>
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
        Chart.register(ChartDataLabels);
        function getGradient(ctx, colorStart, colorEnd) {
            const gradient = ctx.createLinearGradient(0, 0, 0, 400);
            gradient.addColorStop(0, colorStart);
            gradient.addColorStop(1, colorEnd);
            return gradient;
        }

        const csvUrl = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vT52cgUmE1A7unqqGw7awGDvieIOEEWSVgnz7Mw-oIqMBpEOqkvc_SLlUjpT61JiIqZSmbQYU26dNpy/pub?output=csv';
        let masterData = [];
        let charts = {};

        async function init() {
            Papa.parse(csvUrl, {
                download: true,
                header: true,
                skipEmptyLines: true,
                complete: function(results) {
                    masterData = results.data.map(row => {
                        let newRow = {};
                        Object.keys(row).forEach(key => newRow[key.trim()] = row[key]);
                        return newRow;
                    });
                    createFilters(masterData);
                    updateDashboard();
                }
            });
        }

        function createFilters(data) {
            const configs = [
                { id: 'filter-kabupaten', key: 'Kabupaten' },
                { id: 'filter-tingkat', key: 'Tingkat' },
                { id: 'filter-status', key: 'Status' },
                { id: 'filter-keanggotaan', key: 'Keanggotaan' }
            ];
            configs.forEach(config => {
                const vals = [...new Set(data.map(item => item[config.key]))].filter(v => v).sort();
                const container = document.getElementById(config.id);
                vals.forEach(val => {
                    const btn = document.createElement('button');
                    btn.className = 'btn-filter';
                    btn.innerText = val;
                    btn.onclick = () => { $(btn).toggleClass('active'); updateDashboard(); };
                    container.appendChild(btn);
                });
            });
        }

        function updateDashboard() {
            const getActive = (id) => [...document.querySelectorAll(`#${id} .active`)].map(b => b.innerText);
            const selKab = getActive('filter-kabupaten');
            const selTing = getActive('filter-tingkat');
            const selStat = getActive('filter-status');
            const selAngg = getActive('filter-keanggotaan');

            let filtered = masterData;
            if (selKab.length) filtered = filtered.filter(d => selKab.includes(d.Kabupaten));
            if (selTing.length) filtered = filtered.filter(d => selTing.includes(d.Tingkat));
            if (selStat.length) filtered = filtered.filter(d => selStat.includes(d.Status));
            if (selAngg.length) filtered = filtered.filter(d => selAngg.includes(d.Keanggotaan));

            document.getElementById('stat-total').innerText = filtered.length.toLocaleString();
            document.getElementById('stat-aktif').innerText = filtered.filter(d => d.Status === 'AKTIF').length.toLocaleString();

            renderUI(filtered);
        }

        function renderUI(data) {
            if ($.fn.DataTable.isDataTable('#tableData')) $('#tableData').DataTable().destroy();
            $('#tableData').DataTable({
                data: data,
                columns: [
                    { data: null, render: (d, t, r, meta) => meta.row + 1 },
                    { data: 'Nama Pemilik', defaultContent: '-' },
                    { data: 'Callsign', defaultContent: '-' },
                    { data: 'Expired', defaultContent: '-' }
                ],
                pageLength: 15,
                dom: 'ftip'
            });

            const palette = {
                blue: ['#3b82f6', '#1d4ed8'],
                green: ['#10b981', '#059669'],
                orange: ['#f59e0b', '#d97706'],
                multi: ['#2563eb', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6', '#06b6d4']
            };

            renderChart('chartLokal', 'bar', getCounts(data, 'Kabupaten'), palette.blue);
            renderChart('chartIar', 'bar', getCounts(data, 'Status'), palette.green, true);
            renderChart('chartTingkat', 'bar', getCounts(data, 'Tingkat'), palette.orange);
            renderChart('chartKeanggotaan', 'doughnut', getCounts(data, 'Keanggotaan'), palette.multi);
        }

        function getCounts(data, key) {
            const counts = {};
            data.forEach(d => { if(d[key]) counts[d[key]] = (counts[d[key]] || 0) + 1; });
            return counts;
        }

        function renderChart(id, type, countData, palette, horizontal = false) {
            const canvas = document.getElementById(id);
            const ctx = canvas.getContext('2d');
            if (charts[id]) charts[id].destroy();
            const isPie = type === 'doughnut';
            let background = isPie ? palette : getGradient(ctx, palette[0], palette[1]);

            charts[id] = new Chart(ctx, {
                type: type,
                data: {
                    labels: Object.keys(countData),
                    datasets: [{
                        data: Object.values(countData),
                        backgroundColor: background,
                        borderRadius: isPie ? 0 : 12,
                        hoverOffset: 15
                    }]
                },
                options: {
                    indexAxis: horizontal ? 'y' : 'x',
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: isPie, position: 'bottom' },
                        datalabels: { color: isPie ? '#0f0e0eff' : '#0c0c0cff', font: { weight: '800' }, formatter: (val) => val }
                    },
                    scales: isPie ? {} : {
                        y: { beginAtZero: true, grid: { color: '#f1f5f9' } },
                        x: { grid: { display: false } }
                    }
                }
            });
        }
        
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
        
        init();
    </script>
</body>
</html>