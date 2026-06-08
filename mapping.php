<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapping - Loka Monitor SFR Ambon</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <link rel="icon" type="image/png" href="./assets/loko.jpg">
    <link rel="apple-touch-icon" href="./assets/loko.jpg">
    
    <!-- Link CSS bawaan navbar Anda -->
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <style>
        .dashboard-bg { background-color: #f8fafc; }
        .card { background: white; border-radius: 1rem; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1); transition: transform 0.2s; }
        .card:hover { transform: translateY(-2px); }
        .header-gradient { background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%); }
        
        /* Penyesuaian Layout agar tidak tertutup Navbar Fixed (jika navbar fixed) */
        .main-container { margin-top: 2rem; }
        
        /* Memperbaiki tampilan scrollbar pada tabel */
        .overflow-x-auto::-webkit-scrollbar { height: 6px; }
        .overflow-x-auto::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    </style>
</head>
<body class="dashboard-bg font-sans">

    <!-- 1. NAVBAR HEADER (NAVIGASI) -->
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

    <!-- 2. DASHBOARD HEADER (JUDUL & TOTAL) -->
    <header class="header-gradient text-white py-10 px-6 shadow-xl">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="text-center md:text-left">
                <h1 class="text-3xl font-extrabold tracking-tight mb-2 uppercase">Dashboard Statistik Site</h1>
                <p class="text-blue-100 flex items-center justify-center md:justify-start gap-2">
                    <i class="ri-map-pin-2-fill"></i> Loka Monitor SFR Ambon
                </p>
            </div>
            
            <div id="total-badge" class="mt-4 md:mt-0 bg-white/20 backdrop-blur-md px-6 py-3 rounded-2xl border border-white/30 text-center">
                <span class="block text-xs uppercase font-bold text-blue-100">Total Keseluruhan</span>
                <span id="total-site-count" class="text-3xl font-black">0</span> <span class="text-sm">Sites</span>
            </div>
        </div>
    </header>

    <!-- 3. MAIN CONTENT (STATISTIK) -->
    <main class="container mx-auto px-4 pb-12 main-container">
        
        <!-- Mini Stats Bar -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8" id="mini-stats"></div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Grafik Sebaran Per Kota -->
            <div class="lg:col-span-2 card p-6">
                <h3 class="font-bold text-gray-700 uppercase tracking-wider mb-2 flex items-center gap-2">
                    <i class="ri-bar-chart-fill text-blue-600"></i> Sebaran Per Kota & Sub Service
                </h3>
                <div class="relative h-[600px]">
                    <canvas id="cityChart"></canvas>
                </div>
            </div>

            <!-- Grafik Komposisi Layanan Utama -->
            <div class="card p-6">
                <h3 class="font-bold text-gray-700 uppercase tracking-wider mb-6 flex items-center gap-2">
                    <i class="ri-pie-chart-2-fill text-blue-600"></i> Komposisi Layanan
                </h3>
                <div class="relative h-[300px]">
                    <canvas id="serviceChart"></canvas>
                </div>
                <div id="service-legend" class="mt-6 space-y-3"></div>
            </div>
        </div>

        <!-- Tabel Rincian Infrastruktur -->
        <div class="mt-8 card overflow-hidden border border-gray-100">
            <div class="bg-gray-50 p-4 border-b border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4">
                <div>
                    <h3 class="font-bold text-gray-700 uppercase text-sm">Tabel Rincian Infrastruktur</h3>
                    <p class="text-[10px] text-gray-500 italic">*Data khusus: AM, DVB-T, FM</p>
                </div>
                <div class="relative w-full md:w-64">
                    <input type="text" id="searchTable" placeholder="Cari site atau kota..." class="w-full pl-8 pr-4 py-1.5 text-sm border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="ri-search-line absolute left-3 top-2.5 text-gray-400 text-xs"></i>
                </div>
            </div>
            <div class="overflow-x-auto max-h-[500px]">
                <table class="w-full text-sm text-left border-collapse">
                    <thead class="bg-white sticky top-0 shadow-sm z-10">
                        <tr>
                            <th class="p-4 text-blue-600 border-b font-bold uppercase">Kota/Kabupaten</th>
                            <th class="p-4 text-blue-600 border-b font-bold uppercase">Nama Site</th>
                            <th class="p-4 text-blue-600 border-b text-center font-bold uppercase">Sub Service</th>
                        </tr>
                    </thead>
                    <tbody id="dataTableBody" class="divide-y divide-gray-100 bg-white">
                        <!-- Data diisi oleh JS -->
                    </tbody>
                </table>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.2/papaparse.min.js"></script>

    <!-- JS untuk Navigasi Toggle (Mobile) -->
    <script>
        const navMenu = document.getElementById('nav-menu'),
              navToggle = document.getElementById('nav-toggle');

        if(navToggle){
            navToggle.addEventListener('click', () =>{
                navMenu.classList.toggle('show-menu')
            })
        }
    </script>

    <!-- JS Dashboard Logic -->
    <script>
        
        Chart.register(ChartDataLabels);

        const csvUrl = 'Link DB Rahasia';
        let cityChart, serviceChart;

        async function initDashboard() {
            Papa.parse(csvUrl, {
                download: true,
                header: true,
                complete: function(results) {
                    const rawData = results.data.filter(row => row.City && row.Nama);
                    document.getElementById('total-site-count').innerText = rawData.length.toLocaleString('id-ID');
                    updateMiniStats(rawData);
                    renderCharts(rawData);
                    const allowedSubServices = ['AM', 'DVB-T', 'FM'];
                    const tableData = rawData.filter(row => allowedSubServices.includes(row.SUBSERVICE));
                    renderTable(tableData);
                }
            });
        }

        function updateMiniStats(data) {
            const cities = [...new Set(data.map(d => d.City))].length;
            const services = [...new Set(data.map(d => d.SERVICE))].length;
            const statsContainer = document.getElementById('mini-stats');
            const stats = [
                { label: 'Total Wilayah', value: cities, icon: 'ri-map-2-line', color: 'text-emerald-600', bg: 'bg-emerald-50' },
                { label: 'Jenis Layanan', value: services, icon: 'ri-broadcast-line', color: 'text-orange-600', bg: 'bg-orange-50' },
                { label: 'Status Sistem', value: 'Online', icon: 'ri-pulse-line', color: 'text-blue-600', bg: 'bg-blue-50' },
                { label: 'Tahun Data', value: '2026', icon: 'ri-calendar-line', color: 'text-purple-600', bg: 'bg-purple-50' }
            ];
            statsContainer.innerHTML = stats.map(s => `
                <div class="card p-5 flex items-center gap-4">
                    <div class="${s.bg} ${s.color} w-12 h-12 rounded-xl flex items-center justify-center text-2xl">
                        <i class="${s.icon}"></i>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase">${s.label}</p>
                        <p class="text-xl font-bold text-gray-800">${s.value}</p>
                    </div>
                </div>
            `).join('');
        }

        function renderCharts(data) {
            const cities = [...new Set(data.map(d => d.City))].sort();
            const subServices = [...new Set(data.map(d => d.SUBSERVICE || 'Lainnya'))];
            const cityData = cities.map(city => {
                const filtered = data.filter(d => d.City === city);
                const counts = {};
                subServices.forEach(ss => {
                    counts[ss] = filtered.filter(f => (f.SUBSERVICE || 'Lainnya') === ss).length;
                });
                return { city, total: filtered.length, ...counts };
            }).sort((a, b) => b.total - a.total);

            const datasets = subServices.map((ss, index) => {
                const palette = ['#3b82f6', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6', '#64748b', '#ec4899'];
                return {
                    label: ss,
                    data: cityData.map(d => d[ss]),
                    backgroundColor: palette[index % palette.length],
                };
            });

            const ctxCity = document.getElementById('cityChart').getContext('2d');
            if(cityChart) cityChart.destroy();
            cityChart = new Chart(ctxCity, {
                type: 'bar',
                data: { labels: cityData.map(d => d.city), datasets: datasets },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: { stacked: true, grid: { display: false } },
                        y: { stacked: true, grid: { display: false } }
                    },
                    plugins: {
                        legend: { position: 'bottom', labels: { boxWidth: 12, font: { size: 10 } } },
                        datalabels: {
                            color: '#fff',
                            font: { weight: 'bold', size: 9 },
                            formatter: (val) => val > 0 ? val : '',
                        }
                    }
                }
            });

            const serviceCounts = {};
            data.forEach(d => {
                const s = d.SERVICE || 'Lainnya';
                serviceCounts[s] = (serviceCounts[s] || 0) + 1;
            });

            const ctxService = document.getElementById('serviceChart').getContext('2d');
            if(serviceChart) serviceChart.destroy();
            serviceChart = new Chart(ctxService, {
                type: 'doughnut',
                data: {
                    labels: Object.keys(serviceCounts),
                    datasets: [{
                        data: Object.values(serviceCounts),
                        backgroundColor: ['#3b82f6', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6', '#6366f1'],
                        borderWidth: 2,
                        cutout: '70%'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false }, datalabels: { display: false } }
                }
            });

            const legendDiv = document.getElementById('service-legend');
            const colors = ['#3b82f6', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6', '#6366f1'];
            legendDiv.innerHTML = Object.entries(serviceCounts).map(([name, val], i) => `
                <div class="flex justify-between items-center text-sm border-b border-gray-50 pb-2">
                    <div class="flex items-center gap-3">
                        <span class="w-3 h-3 rounded-full" style="background:${colors[i % colors.length]}"></span>
                        <span class="text-gray-600 font-medium">${name}</span>
                    </div>
                    <span class="font-bold text-gray-900 bg-gray-100 px-2 py-0.5 rounded text-xs">${val.toLocaleString('id-ID')}</span>
                </div>
            `).join('');
        }

        function renderTable(tableData) {
            const tbody = document.getElementById('dataTableBody');
            const drawRows = (dataToDraw) => {
                tbody.innerHTML = dataToDraw.map(d => `
                    <tr class="hover:bg-blue-50/50 transition border-b border-gray-50">
                        <td class="p-4 font-semibold text-gray-700">${d.City}</td>
                        <td class="p-4 text-gray-600">${d.Nama}</td>
                        <td class="p-4 text-center">
                            <span class="px-3 py-1 ${getBadgeClass(d.SUBSERVICE)} rounded-full text-[10px] font-bold uppercase tracking-wider">
                                ${d.SUBSERVICE || 'N/A'}
                            </span>
                        </td>
                    </tr>
                `).join('');
            };

            const getBadgeClass = (ss) => {
                switch(ss) {
                    case 'FM': return 'bg-orange-100 text-orange-700';
                    case 'AM': return 'bg-blue-100 text-blue-700';
                    case 'DVB-T': return 'bg-emerald-100 text-emerald-700';
                    default: return 'bg-gray-100 text-gray-700';
                }
            };
            drawRows(tableData);

            document.getElementById('searchTable').addEventListener('input', (e) => {
                const val = e.target.value.toLowerCase();
                const filtered = tableData.filter(d => 
                    d.Nama.toLowerCase().includes(val) || 
                    d.City.toLowerCase().includes(val) ||
                    (d.SUBSERVICE && d.SUBSERVICE.toLowerCase().includes(val))
                );
                drawRows(filtered);
            });
        }
        window.onload = initDashboard;
    </script>
</body>
</html>
