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
    <!-- Contact Us Section -->
    <section class="pt-32 pb-16 bg-white text-black">
        <div class="container mx-auto px-4 md:px-0">
            <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center">Hubungi Kami</h2>
            <p class="text-lg md:text-xl mb-8 text-center">Kami siap membantu Anda dengan segala kebutuhan sepeda listrik Anda. Berikut adalah cara untuk menghubungi kami:</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Nomor Telepon / WhatsApp -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex items-center justify-center text-center min-h-[250px]">
                    <div>
                        <h3 class="text-2xl text-white font-bold mb-4">Nomor Telepon / WhatsApp</h3>
                        <p class="mb-4 text-white">Hubungi kami langsung di nomor berikut:</p>
                        <a href="https://wa.link/tnpduo" class="text-white text-xl hover:text-yellow-600">+62 812-3456-7890</a>
                    </div>
                </div>

                <!-- Instagram -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex items-center justify-center text-center min-h-[250px]">
                    <div>
                        <h3 class="text-2xl text-white font-bold mb-4">Instagram</h3>
                        <p class="mb-4 text-white">Ikuti kami di Instagram untuk mendapatkan update terbaru:</p>
                        <a href="https://www.instagram.com/selismolishokiofficial/" class="text-white text-xl hover:text-yellow-600">@selismolishokiofficial</a>
                    </div>
                </div>

                <!-- Email -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex items-center justify-center text-center min-h-[250px]">
                    <div>
                        <h3 class="text-2xl text-white font-bold mb-4">Email</h3>
                        <p class="mb-4 text-white">Kirimkan pertanyaan atau saran Anda melalui email:</p>
                        <a href="mailto:info@selismolishoki.com" class="text-white text-xl hover:text-yellow-600">info@selismolishoki.com</a>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex items-center justify-center text-center min-h-[250px]">
                    <div>
                        <h3 class="text-2xl text-white font-bold mb-4">Alamat</h3>
                        <p class="mb-4 text-white">Kunjungi bengkel kami di alamat berikut:</p>
                        <a href="https://maps.app.goo.gl/VZsa7XuGhPK4AZMJ6" class="text-white text-xl hover:text-yellow-600">
                            Kebontebu, Berkoh, Kec. Purwokerto Selatan., Kabupaten Banyumas, Jawa Tengah
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 bg-gray-700 text-white">
        <div class="container mx-auto px-4 md:px-0 text-center">
            <a href="https://maps.app.goo.gl/fEhytgQWyXmS4o6F9">
                <h2 class="text-3xl md:text-4xl font-bold mb-8 hover:text-yellow-600">Lokasi Kami</h2>
            </a>
            <p class="text-lg md:text-xl mb-8">Temukan lokasi kami di peta berikut ini:</p>
            <div class="w-full h-64">
                <!-- Ganti dengan embed Google Maps Anda -->
                <iframe class="w-full h-full rounded-lg shadow-lg" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.978965102293!2d109.2619913!3d-7.4374857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655c1e12755a2f%3A0x469c4dabeb58e272!2sSelis%20Molis%20Hoki%20Store!5e0!3m2!1sen!2sid!4v1692968239512!5m2!1sen!2sid" 
                        allowfullscreen="" 
                        loading="lazy"></iframe>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</body>

</html>
