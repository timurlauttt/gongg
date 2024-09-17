<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servis Sepeda Listrik</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    @extends('layouts.navbar')
    @extends('layouts.footer')

    <!-- Section Form Servis -->
    <section id="form" class="py-16 isolate bg-white px-6 sm:py-32 lg:px-8 pt-36">
        <div class="container mx-auto max-w-lg sm:max-w-2xl text-center">
            <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-gray-900">Formulir Home Service</h2>
            <p class="mt-2 text-base sm:text-lg leading-7 sm:leading-8 text-gray-600">Isi formulir di bawah ini untuk reservasi jadwal servis sepeda listrik Anda.</p>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" class="mx-auto mt-10 sm:mt-16 max-w-md sm:max-w-xl">
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
                <!-- Upload Gambar Kerusakan -->
                <div class="sm:col-span-2">
                    <label for="damage_image" class="block text-sm font-semibold leading-6 text-black">Upload Gambar Kerusakan</label>
                    <div class="mt-2.5">
                        <input type="file" id="damage_image" name="damage_image" accept="image/*" required class="block w-full rounded-md border-0 px-3 py-2 shadow-sm ring-1 ring-inset ring-blue-300 focus:ring-2 focus:ring-blue-400 sm:text-sm">
                    </div>
                </div>
                <!-- Upload Video Kerusakan (Opsional) -->
                <div class="sm:col-span-2">
                    <label for="damage_video" class="block text-sm font-semibold leading-6 text-black">Upload Video Kerusakan (Opsional)</label>
                    <div class="mt-2.5">
                        <input type="file" id="damage_video" name="damage_video" accept="video/*" class="block w-full rounded-md border-0 px-3 py-2 shadow-sm ring-1 ring-inset ring-blue-300 focus:ring-2 focus:ring-blue-400 sm:text-sm">
                    </div>
                </div>
            </div>
            <!-- Tombol Submit -->
            <div class="mt-8">
                <button type="submit"
                class="block w-full rounded-md bg-gray-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Reservasi Jadwal Servis</button>
            </div>
        </form>
    </section>
</body>

</html>
