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
        :root {
            --bg-dashboard: #f0f2f9;
            --primary: #2563eb;
            --primary-light: #dbeafe;
            --secondary: #000000ff;
            --card-bg: #ffffff;
            --border-soft: rgba(226, 232, 240, 0.8);
        }

        .dashboard-section { background-color: var(--bg-dashboard); padding: 2rem 0; }
        
        /* PERBAIKAN: Layout diubah menjadi block dan dibatasi lebarnya agar berada di tengah */
        .layout-grid {
            display: block; 
            max-width: 1200px; /* Lebar standar dashboard agar tidak terlalu melebar */
            margin: 0 auto;
            padding: 0 1.5rem;
        }

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
        .col-span-full { grid-column: 1 / -1; }

        @media (max-width: 768px) { .chart-grid { grid-template-columns: 1fr; } }

        .chart-wrapper { height: 320px; position: relative; }
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
    </header

    <section class="mt-20 bg-[#002B49] text-white py-16 shadow-lg relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <nav class="text-sm mb-4 text-blue-300 uppercase tracking-widest font-bold">Database &nbsp;/&nbsp; IKRAP</nav>
            <h1 class="text-4xl md:text-5xl font-black tracking-tight uppercase">Dashboard IKRAP</h1>
            <div class="h-1.5 w-24 bg-yellow-400 mt-6 rounded-full"></div>
        </div>
    </section>

    <div class="dashboard-section">
        <div class="layout-grid">
            <div class="main-panel">
                <!-- Stat Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
                    <div class="summary-card">
                        <i class="fas fa-database"></i>
                        <div>
                            <small class="text-gray-500 font-bold uppercase text-[10px] tracking-wider">Total Database</small>
                            <div id="stat-total" class="text-2xl font-extrabold">0</div>
                        </div>
                    </div>
                    <div class="summary-card">
                        <i class="fas fa-user-check" style="background:#ecfdf5; color:#10b981;"></i>
                        <div>
                            <small class="text-gray-500 font-bold uppercase text-[10px] tracking-wider">IKRAP Aktif</small>
                            <div id="stat-aktif" class="text-2xl font-extrabold text-[#10b981]">0</div>
                        </div>
                    </div>
                </div>

                <!-- Filter -->
                <div class="db-card bg-slate-50 border-slate-200 p-4">
                    <h3 class="text-sm font-bold text-slate-700 mb-4 uppercase tracking-widest">
                        <i class="fas fa-filter mr-2"></i> Ikrap Segmentation
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div id="filter-kabupaten"></div>
                        <div id="filter-tingkat"></div>
                        <div id="filter-status"></div>
                        <div id="filter-keanggotaan"></div>
                    </div>
                </div>

                <!-- Charts (Sekarang berada di tengah) -->
                <div class="chart-grid">
                    <div class="db-card col-span-full">
                        <h4 class="font-bold text-gray-800 mb-4">Sebaran Lokal</h4>
                        <div class="chart-wrapper"><canvas id="chartLokal"></canvas></div>
                    </div>
                    <div class="db-card">
                        <h4 class="font-bold text-gray-800 mb-4">Proporsi Keanggotaan</h4>
                        <div class="chart-wrapper"><canvas id="chartKeanggotaan"></canvas></div>
                    </div>
                    <div class="db-card">
                        <h4 class="font-bold text-gray-800 mb-4">Status IKRAP</h4>
                        <div class="chart-wrapper"><canvas id="chartIar"></canvas></div>
                    </div>
                </div>
            </div>
            
            <!-- Side panel ditiadakan agar elemen utama berada di tengah -->
        </div>
    </div>

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
                            <a href="https://www.facebook.com/share/1DsP8MUBgA/" target='_blank' class="w-10 h-10 bg-white/10 hover:bg-blue-600 rounded-full flex items-center justify-center transition-all" title="Facebook"><i class="ri-facebook-fill text-xl"></i></a>
                            <a href="https://www.instagram.com/lokaambon?igsh=dHB5bXFtNzRtMDQw" target='_blank' class="w-10 h-10 bg-white/10 hover:bg-pink-600 rounded-full flex items-center justify-center transition-all" title="Instagram"><i class="ri-instagram-line text-xl"></i></a>
                            <a href="https://youtube.com/@lokamonitorsframbon8750?si=YNzinPrigxTcRb1V" target='_blank' class="w-10 h-10 bg-white/10 hover:bg-red-600 rounded-full flex items-center justify-center transition-all" title="Youtube"><i class="ri-youtube-fill text-xl"></i></a>
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
                            <span id="stat-total-footer" class="font-mono text-2xl font-bold text-white">0</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center md:items-end">
                    <div class="bg-white p-6 rounded-3xl shadow-[0_20px_50px_rgba(8,_112,_184,_0.7)] text-center w-72 transform hover:-translate-y-2 transition-all duration-300">
                        <div class="mb-4">
                            <div class="w-20 h-20 bg-blue-50 mx-auto rounded-full flex items-center justify-center mb-3">
                                <i class="ri-customer-service-2-fill text-4xl text-[#2D2A70]"></i>
                            </div>
                            <h4 class="text-xs font-black text-gray-800 uppercase tracking-tighter">Layanan Informasi & Pengaduan<br><span class="text-blue-600">Loka Monitor SFR Ambon</span></h4>
                        </div>
                        <a href="https://wa.me/628114705124" class="block bg-gradient-to-r from-[#2D2A70] to-[#1a184d] text-white py-3 px-4 rounded-2xl font-bold text-xl hover:shadow-lg transition-all">08114705124</a>
                        <p class="text-[9px] text-gray-400 mt-2 italic">*Klik nomor untuk chat via WhatsApp</p>
                    </div>
                </div>
            </div>

            <div class="mt-16 pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center text-center md:text-left">
                <div class="text-sm text-gray-400 space-y-1">
                    <p class="font-semibold text-gray-300">Copyright &copy; 2026 Loka Monitor Ambon</p>
                    <p>Kementerian Komunikasi dan Digital Republik Indonesia</p>
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

    const csvUrl = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vScjK_rwE9O1LS1BLs_iBwu6ouzODBMVaDIyuX1Cvhv5oJYATiyrqfhUxA0HRadrgKd28fH6U1HwkQx/pub?output=csv';
    
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
                    Object.keys(row).forEach(key => {
                        newRow[key.trim()] = row[key] ? row[key].trim() : "";
                    });
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
            const container = document.getElementById(config.id);
            if(!container) return;
            const vals = [...new Set(data.map(item => item[config.key]))].filter(v => v).sort();
            container.innerHTML = `<p class="text-[10px] font-bold text-gray-400 mb-2 uppercase">${config.key}</p>`;
            vals.forEach(val => {
                const btn = document.createElement('button');
                btn.className = 'btn-filter';
                btn.innerText = val;
                btn.onclick = () => { 
                    $(btn).toggleClass('active'); 
                    updateDashboard(); 
                };
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
        const aktifCount = filtered.filter(d => d.Status?.toUpperCase() === 'AKTIF').length;
        document.getElementById('stat-aktif').innerText = aktifCount.toLocaleString();

        renderUI(filtered);
    }

    function renderUI(data) {
        const palette = {
            blue: ['#3b82f6', '#1d4ed8'],
            green: ['#10b981', '#059669'],
            multi: ['#2563eb', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6', '#06b6d4']
        };

        renderChart('chartKeanggotaan', 'doughnut', getCounts(data, 'Keanggotaan'), palette.multi);
        renderChart('chartIar', 'bar', getCounts(data, 'Status'), palette.green, true);
        renderChart('chartLokal', 'bar', getCounts(data, 'Kabupaten'), palette.blue);
    }

    function getCounts(data, key) {
        const counts = {};
        data.forEach(d => { if(d[key]) counts[d[key]] = (counts[d[key]] || 0) + 1; });
        return counts;
    }

    function renderChart(id, type, countData, palette, horizontal = false) {
        const canvas = document.getElementById(id);
        if(!canvas) return;
        const ctx = canvas.getContext('2d');
        if (charts[id]) charts[id].destroy();

        const isPie = type === 'doughnut';
        charts[id] = new Chart(ctx, {
            type: type,
            data: {
                labels: Object.keys(countData),
                datasets: [{
                    data: Object.values(countData),
                    backgroundColor: isPie ? palette : getGradient(ctx, palette[0], palette[1]),
                    borderRadius: isPie ? 0 : 8,
                }]
            },
            options: {
                indexAxis: horizontal ? 'y' : 'x',
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: isPie, position: 'bottom' },
                    datalabels: { 
                        color: isPie ? '#fff' : '#444', 
                        font: { weight: '800' },
                        formatter: (value) => value > 0 ? value : ''
                    }
                }
            }
        });
    }

    // Burger Menu Logic
    const navMenu = document.getElementById('nav-menu'),
          navToggle = document.getElementById('nav-toggle');
    if(navToggle) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('show-menu');
        });
    }

    $(document).ready(function() {
        init();
    });
    </script>
</body>
</html>