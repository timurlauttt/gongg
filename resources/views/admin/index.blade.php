<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Memuat Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="flex flex-col h-screen bg-gray-100">

    <!-- Bar Navigasi Atas -->
    <div class="bg-white shadow w-full p-2 flex items-center justify-between">
        <div class="flex items-center">
            <div class="flex items-center">
                <img src="assets/logofix.png" alt="Logo" class="w-28 h-18 mr-2">
                <h2 class="font-bold text-xl">Selis Molis Hoki</h2>
            </div>
            <div class="md:hidden flex items-center">
                <button id="menuBtn">
                    <i class="fas fa-bars text-gray-500 text-lg"></i>
                </button>
            </div>
        </div>

        <!-- Ikon Notifikasi dan Profil -->
        <div class="space-x-5">
            <button>
                <i class="fas fa-bell text-gray-500 text-lg"></i>
            </button>
            <button>
                <i class="fas fa-user text-gray-500 text-lg"></i>
            </button>
        </div>
    </div>

    <!-- Konten Utama -->
    <div class="flex-1 flex flex-wrap">
        <!-- Bar Samping Navigasi -->
        <div class="p-2 bg-white w-full md:w-60 flex flex-col hidden md:flex" id="sideNav">
            <nav>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                    <i class="fas fa-home mr-2"></i>Beranda
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                    <i class="fas fa-file-alt mr-2"></i>Otorisasi
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                    <i class="fas fa-users mr-2"></i>Pengguna
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                    <i class="fas fa-store mr-2"></i>Perdagangan
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
                    <i class="fas fa-exchange-alt mr-2"></i>Transaksi
                </a>
            </nav>

            <!-- Item Keluar -->
            <a class="block text-gray-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white mt-auto" href="#">
                <i class="fas fa-sign-out-alt mr-2"></i>Keluar
            </a>

            <!-- Pembatas -->
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>

        </div>

        <!-- Area Konten Utama -->
        <div class="flex-1 p-4">
            <!-- Field Pencarian -->
            <div class="relative max-w-md w-full mb-8">
                <div class="absolute top-1 left-2 inline-flex items-center p-2">
                    <i class="fas fa-search text-gray-400"></i>
                </div>
                <input class="w-full h-10 pl-10 pr-4 py-1 text-base placeholder-gray-500 border rounded-full focus:shadow-outline" type="search" placeholder="Cari...">
            </div>

            <!-- Container Grafik -->
            <div class="flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                <!-- Container Pertama - Grafik Pengguna -->
                <div class="flex-1 bg-white p-4 shadow rounded-lg md:w-1/2">
                    <h2 class="text-gray-500 text-lg font-semibold pb-1">Pengguna</h2>
                    <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                    <div class="chart-container" style="position: relative; height:150px; width:100%">
                        <canvas id="usersChart"></canvas>
                    </div>
                </div>

                <!-- Container Kedua - Grafik Perdagangan -->
                <div class="flex-1 bg-white p-4 shadow rounded-lg md:w-1/2">
                    <h2 class="text-gray-500 text-lg font-semibold pb-1">Perdagangan</h2>
                    <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                    <div class="chart-container" style="position: relative; height:150px; width:100%">
                        <canvas id="commercesChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Container Ketiga - Tabel Otorisasi Tertunda -->
            <div class="mt-8 bg-white p-4 shadow rounded-lg">
                <h2 class="text-gray-500 text-lg font-semibold pb-4">Otorisasi Tertunda</h2>
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                <table class="w-full table-auto text-sm">
                    <thead>
                        <tr class="text-sm leading-normal">
                            <th class="py-2 px-4 bg-gray-100 font-bold uppercase text-sm text-gray-600 border-b border-gray-300">Foto</th>
                            <th class="py-2 px-4 bg-gray-100 font-bold uppercase text-sm text-gray-600 border-b border-gray-300">Nama</th>
                            <th class="py-2 px-4 bg-gray-100 font-bold uppercase text-sm text-gray-600 border-b border-gray-300">Peran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b border-gray-300"><img src="https://via.placeholder.com/40" alt="Foto Profil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-gray-300">Juan Pérez</td>
                            <td class="py-2 px-4 border-b border-gray-300">Perdagangan</td>
                        </tr>
                        <!-- Tambahkan baris lain di sini -->
                    </tbody>
                </table>
                <div class="text-right mt-4">
                    <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                        Lihat lebih banyak
                    </button>
                </div>
            </div>

            <!-- Container Keempat - Tabel Transaksi -->
            <div class="mt-8 bg-white p-4 shadow rounded-lg">
                <h2 class="text-gray-500 text-lg font-semibold pb-4">Transaksi</h2>
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                <table class="w-full table-auto text-sm">
                    <thead>
                        <tr class="text-sm leading-normal">
                            <th class="py-2 px-4 bg-gray-100 font-bold uppercase text-sm text-gray-600 border-b border-gray-300">ID</th>
                            <th class="py-2 px-4 bg-gray-100 font-bold uppercase text-sm text-gray-600 border-b border-gray-300">Jumlah</th>
                            <th class="py-2 px-4 bg-gray-100 font-bold uppercase text-sm text-gray-600 border-b border-gray-300">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border-b border-gray-300">001</td>
                            <td class="py-2 px-4 border-b border-gray-300">100.000 IDR</td>
                            <td class="py-2 px-4 border-b border-gray-300">15/09/2024</td>
                        </tr>
                        <!-- Tambahkan baris lain di sini -->
                    </tbody>
                </table>
                <div class="text-right mt-4">
                    <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                        Lihat lebih banyak
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-3">
        <p>&copy; 2024 - Selis Molis Hoki</p>
    </footer>
</div>

<script>
    const usersChartCtx = document.getElementById('usersChart').getContext('2d');
    const usersChart = new Chart(usersChartCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
            datasets: [{
                label: 'Pengguna Terdaftar',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const commercesChartCtx = document.getElementById('commercesChart').getContext('2d');
    const commercesChart = new Chart(commercesChartCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
            datasets: [{
                label: 'Perdagangan',
                data: [10, 20, 15, 30, 25, 35],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    document.getElementById('menuBtn').addEventListener('click', () => {
        const sideNav = document.getElementById('sideNav');
        sideNav.classList.toggle('hidden');
    });
</script>
</body>
</html>
