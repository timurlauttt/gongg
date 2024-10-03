<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servis Sepeda Listrik</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="bg-gray-100">
    @include('layouts.navbar')
    
    <!-- Section Form Servis -->
    <section id="form" class="py-16 isolate bg-gray-100 px-6 sm:py-32 lg:px-8 pt-36">
        <div class="container mx-auto max-w-lg sm:max-w-2xl">
            <!-- Card Wrapper -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <!-- Tombol Back -->
                <div class="flex items-center mb-4">
                    <button onclick="window.history.back()" class="flex items-center text-orange-600 hover:text-orange-800 transition duration-300 ease-in-out">
                        <svg class="h-6 w-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="font-semibold text-lg">Kembali</span>
                    </button>
                </div>
                
                <div class="text-center">
                    <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-gray-900">Formulir Servis di Bengkel</h2>
                    <p class="mt-2 text-base sm:text-lg leading-7 sm:leading-8 text-gray-600">Isi formulir di bawah ini untuk reservasi jadwal servis sepeda listrik Anda.</p>
                </div>
                
                <form id="service-form" action="" method="POST" enctype="multipart/form-data" class="mx-auto mt-10 sm:mt-16 max-w-md sm:max-w-xl">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Nama Lengkap -->
                        <div>
                            <label for="name" class="block text-sm font-semibold leading-6 text-black">Nama Lengkap</label>
                            <div class="mt-2.5">
                                <input type="text" id="name" placeholder="Tulis nama lengkap anda" name="name" required class="block w-full rounded-md border-0 px-3 py-2 shadow-sm ring-1 ring-inset ring-blue-300 focus:ring-2 focus:ring-blue-400 sm:text-sm">
                            </div>
                        </div>
                        <!-- Nomor Telepon -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold leading-6 text-black">Nomor WhatsApp/Telepon</label>
                            <div class="mt-2.5">
                                <input type="text" id="phone" placeholder="Tulis nomor WA/Telp anda" name="phone" required class="block w-full rounded-md border-0 px-3 py-2 shadow-sm ring-1 ring-inset ring-blue-300 focus:ring-2 focus:ring-blue-400 sm:text-sm">
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="sm:col-span-2">
                            <label for="address" class="block text-sm font-semibold leading-6 text-black">Alamat Lengkap</label>
                            <div class="mt-2.5">
                                <textarea id="address" placeholder="Tulis alamat lengkap beserta patokan rumah anda" name="address" rows="3" required class="block w-full rounded-md border-0 px-3 py-2 shadow-sm ring-1 ring-inset ring-blue-300 focus:ring-2 focus:ring-blue-400 sm:text-sm"></textarea>
                            </div>
                        </div>
                        <!-- Jenis Kerusakan -->
                        <div class="sm:col-span-2">
                            <label for="damage_type" class="block text-sm font-semibold leading-6 text-black">Jenis Kerusakan</label>
                            <div class="mt-2.5">
                                <select id="damage_type" name="damage_type" required class="block w-full rounded-md border-0 px-3 py-2 shadow-sm ring-1 ring-inset ring-blue-300 focus:ring-2 focus:ring-blue-400 sm:text-sm">
                                    <option value="battery">Kerusakan Baterai</option>
                                    <option value="motor">Kerusakan Motor</option>
                                    <option value="brakes">Kerusakan Rem</option>
                                    <option value="electrical">Masalah Kelistrikan</option>
                                    <option value="other">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <!-- Deskripsi Kerusakan -->
                        <div class="sm:col-span-2">
                            <label for="damage_description" class="block text-sm font-semibold leading-6 text-black">Deskripsi Kerusakan</label>
                            <div class="mt-2.5">
                                <textarea id="damage_description" placeholder="Dekripsikan secara jelas kerusakan kendaraan anda" name="damage_description" rows="4" required class="block w-full rounded-md border-0 px-3 py-2 shadow-sm ring-1 ring-inset ring-blue-300 focus:ring-2 focus:ring-blue-400 sm:text-sm"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Tombol Submit -->
                    <div class="mt-8">
                        <button style="background-color: #ea580c" type="button" id="reserve-btn"
                        class="block w-full rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Reservasi Jadwal Servis</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Modal for Confirmation -->
    <div id="modal" class="modal flex">
        <div class="modal-content">
            <h3 class="text-lg font-semibold text-gray-800">Nomor Resi Anda</h3>
            <p class="mt-2 text-gray-600">Nomor Resi Anda: <span id="tracking-number">123456789</span></p>
            <p class="text-gray-600">Gunakan nomor ini untuk mengecek status perbaikan unit Anda.</p>
            <button id="close-modal" class="close mt-4">Tutup</button>
        </div>
    </div>

    @include('layouts.footer')
    <script src="js/popover.js"></script>
</body>
</html>
