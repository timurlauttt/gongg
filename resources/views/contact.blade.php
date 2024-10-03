<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Selis Molis Hoki</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    @include('layouts.navbar')

    <div class="text-left py-8 ml-8">
        <button onclick="window.history.back()" class="bg-white-500 text-black px-6 py-2 rounded-lg shadow-md hover:bg-yellow-100 transition duration-300 mt-24">
            <- Kembali
        </button>
    </div>

    <div class="container mx-auto px-4 md:px-0 mt-4">
        <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center">Hubungi Kami</h2>
        <p class="text-lg md:text-xl mb-8 text-center">Kami siap membantu Anda dengan segala kebutuhan sepeda listrik Anda. Berikut adalah cara untuk menghubungi kami:</p>
    </div>
    <!-- Contact Us Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
        <!-- Nomor Telepon / WhatsApp -->
        <a href="https://wa.link/tnpduo" class="md:order-1">
            <div class="bg-white border-4 border-orange-500 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div>
                    <h3 class="text-2xl text-orange-600 font-bold mb-4">Nomor Telepon / WhatsApp</h3>
                    <p class="mb-4 text-gray-800">Hubungi kami langsung di nomor berikut:</p>
                    <a href="https://wa.link/tnpduo" class="text-orange-600 text-xl hover:text-orange-800">+62 812-3456-7890</a>
                </div>
            </div>
        </a>

        <!-- Instagram -->
        <a href="https://www.instagram.com/selismolishokiofficial/" class="md:order-2">
            <div class="bg-white border-4 border-orange-500 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div>
                    <h3 class="text-2xl text-orange-600 font-bold mb-4">Instagram</h3>
                    <p class="mb-4 text-gray-800">Ikuti kami di Instagram untuk mendapatkan update terbaru:</p>
                    <a href="https://www.instagram.com/selismolishokiofficial/" class="text-orange-600 text-xl hover:text-orange-800">@selismolishokiofficial</a>
                </div>
            </div>
        </a>

        <!-- Email -->
        <a href="mailto:info@selismolishoki.com" class="md:order-4">
            <div class="bg-white border-4 border-orange-500 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div>
                    <h3 class="text-2xl text-orange-600 font-bold mb-4">Email</h3>
                    <p class="mb-4 text-gray-800">Kirimkan pertanyaan atau saran Anda melalui email:</p>
                    <a href="mailto:info@selismolishoki.com" class="text-orange-600 text-xl hover:text-orange-800">info@selismolishoki.com</a>
                </div>
            </div>
        </a>

        <!-- Alamat -->
        <a href="https://maps.app.goo.gl/VZsa7XuGhPK4AZMJ6" class="md:order-3">
            <div class="bg-white border-4 border-orange-500 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div>
                    <h3 class="text-2xl text-orange-600 font-bold mb-4">Alamat</h3>
                    <p class="mb-4 text-gray-800">Kunjungi bengkel kami di alamat berikut:</p>
                    <a href="https://maps.app.goo.gl/VZsa7XuGhPK4AZMJ6" class="text-orange-600 text-xl hover:text-orange-800">
                        Kebontebu, Berkoh, Kec. Purwokerto Selatan, Kabupaten Banyumas, Jawa Tengah
                    </a>
                </div>
            </div>
        </a>
    </div>

    <!-- Map Section -->
    <section class="py-16 bg-white border-4 border-orange-500 text-center mt-10">
        <div class="container mx-auto px-4 md:px-0">
            <a href="https://maps.app.goo.gl/fEhytgQWyXmS4o6F9">
                <h2 class="text-3xl md:text-4xl font-bold text-orange-600 mb-8 hover:text-orange-800">Lokasi Kami</h2>
            </a>
            <p class="text-lg md:text-xl text-gray-800 mb-8">Temukan lokasi kami di peta berikut ini:</p>
            <div class="w-full h-64">
                <!-- Ganti dengan embed Google Maps Anda -->
                <iframe class="w-full h-full rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.978965102293!2d109.2619913!3d-7.4374857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655c1e12755a2f%3A0x469c4dabeb58e272!2sSelis%20Molis%20Hoki%20Store!5e0!3m2!1sen!2sid!4v1692968239512!5m2!1sen!2sid" 
                        allowfullscreen="" 
                        loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>

</html>
