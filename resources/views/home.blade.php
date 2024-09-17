<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SELISMOLISHOKI</title>
        <!-- Sertakan CSS Swiper -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100">
        @extends('layouts.navbar')
        @extends('layouts.footer')
        <header class="relative w-full h-screen pt-16">
            <div id="carouselExample" class="relative w-full h-screen overflow-hidden">
                <!-- Slide 1 -->
                <div class="carousel-item absolute inset-0 bg-cover bg-center transition-all duration-700"
                    style="background-image: url('images/mypict.jpg');">
                    <div class="absolute inset-0 bg-black bg-opacity-80 flex items-center justify-center">
                        <div class="container mx-auto text-center text-white">
                            <h1 class="text-5xl font-bold mb-4">Selis Molis Hoki</h1>
                            <h1 class="text-3xl font-bold mb-4">Membantu Penyebaran Kendaraan Listrik di Indonesia.</h1>
                            <p class="text-xl mb-8">Perbaikan Sepeda Listrik Terpercaya, Cepat, dan Profesional.</p>
                            <a href="#services" class="bg-yellow-600 text-white px-6 py-3 rounded-full text-lg hover:bg-yellow-700">Reservasi Jadwal Servis Anda Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item absolute inset-0 bg-cover bg-center transition-all duration-700"
                    style="background-image: url('images/service.jpg'); opacity: 0;">
                    <div class="absolute inset-0 bg-black bg-opacity-80 flex items-center justify-center">
                        <div class="container mx-auto text-center text-white">
                            <h1 class="text-5xl font-bold mb-4">Selis Molis Hoki</h1>
                            <h1 class="text-3xl font-bold mb-4">Home and Garage Services</h1>
                            <p class="text-xl mb-8">Siap Melayani Dimana Saja, Kapan Saja!</p>
                            <a href="#services" class="bg-yellow-600 text-white px-6 py-3 rounded-full text-lg hover:bg-yellow-700">Servis Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <div class="absolute inset-y-1/2 left-4 transform -translate-y-1/2 text-3xl text-white cursor-pointer" id="prev">
                &lt;
            </div>
            <div class="absolute inset-y-1/2 right-4 transform -translate-y-1/2 text-3xl text-white cursor-pointer" id="next">
                &gt;
            </div>
        </header>
        <script>
            const items = document.querySelectorAll('.carousel-item');
            let currentIndex = 0;
        
            function showSlide(index) {
                items.forEach((item, i) => {
                    item.style.opacity = i === index ? '1' : '0';
                });
            }
        
            document.getElementById('next').addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % items.length;
                showSlide(currentIndex);
            });
        
            document.getElementById('prev').addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + items.length) % items.length;
                showSlide(currentIndex);
            });
        
            showSlide(currentIndex);
        </script>
        <!-- Services Section -->
        <section id="services" class="py-16 bg-gray-100">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold mb-12 pt-16 text-gray-900">Layanan Servis Kami</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <!-- Home Service -->
                    <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <a href="{{ route('services.servis') }}" class="block">
                            <div class="overflow-hidden rounded-lg mb-6">
                                <img src="images/service.jpg" alt="Servis Sepeda Listrik" class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-105">
                            </div>
                        </a>                    
                        <a href="{{ route('services.servis') }}" class="block">
                            <h3 class="text-2xl font-semibold mb-4 text-gray-800 hover:text-gray-600">Home Service</h3>
                        </a>
                        <p class="text-gray-600 mb-6">Layanan servis sepeda listrik langsung di rumah Anda oleh teknisi profesional kami.</p>
                        <a href="{{ route('services.servis') }}" class="inline-block bg-yellow-500 text-white px-5 py-3 min-w-[200px] rounded-full text-lg hover:bg-yellow-600 transition-colors duration-300 text-center">
                            Reservasi sekarang
                        </a>
                    </div>
                    <!-- Servis di Bengkel  -->
                    <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <a href="{{ route('services.servisgarage') }}">
                            <div class="overflow-hidden rounded-lg mb-6">
                                <img src="images/sparepart.jpg" alt="Sparepart Sepeda Listrik" class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-105">
                            </div>
                        </a>
                        <a href="{{ route('services.servisgarage') }}" class="block">
                            <h3 class="text-2xl font-semibold mb-4 text-gray-800 hover:text-gray-600">Garage Service</h3>
                        </a>
                        <p class="text-gray-600 mb-6">Servis secara mendalam sepeda listrik Anda di bengkel kami dengan peralatan yang lebih lengkap.</p>
                        <a href="{{ route('services.servisgarage') }}" class="inline-block bg-yellow-500 text-white px-5 py-3 min-w-[200px] rounded-full text-lg hover:bg-yellow-600 transition-colors duration-300 text-center">
                            Reservasi sekarang
                        </a>
                    </div>
                </div>
            </div>
        </section>
    
    <!-- About Us Section -->
        <section id="about-us" class="bg-gray-800 text-white py-16">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold mb-8">Tentang Kami</h2>
                <p class="text-xl mb-8">Baik di rumah Anda maupun di bengkel kami, kami siap memastikan sepeda listrik Anda kembali berfungsi dengan optimal dan aman.</p>
                
                <!-- Tambahan kode iframe Google Maps -->
                <div class="w-full h-64 mb-8">
                    <iframe class="w-full h-full rounded-lg shadow-lg" 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.978965102293!2d109.2619913!3d-7.4374857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655c1e12755a2f%3A0x469c4dabeb58e272!2sSelis%20Molis%20Hoki%20Store!5e0!3m2!1sen!2sid!4v1692968239512!5m2!1sen!2sid" 
                            allowfullscreen="" 
                            loading="lazy"></iframe>
                </div>
        
                <!-- Tombol Pelajari Lebih Lanjut -->
                <a href="{{ route('aboutus') }}" class="bg-yellow-600 text-white px-6 py-3 rounded-full text-lg hover:bg-yellow-700">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </section>
    

    <!-- Additional Sections (x y) -->
        <section class="py-8">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- FAQ Section -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">FAQ (Frequently Asked Questions)</h3>
                    <p class="text-gray-700 mb-4">Temukan jawaban atas pertanyaan yang sering diajukan mengenai layanan dan produk kami.</p>
                    <a href="{{ route('boxbox.faq') }}" class="text-gray-900 hover:text-blue-900">Pelajari Lebih Lanjut</a>
                </div>
                <!-- Customer Testimonials Section -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Testimoni Pelanggan</h3>
                    <p class="text-gray-700 mb-4">Lihat apa yang pelanggan kami katakan tentang layanan kami.</p>
                    <a href="{{ route('boxbox.testimoni') }}" class="text-gray-900 hover:text-blue-900">Baca Testimoni</a>
                </div>
            </div>
        </section>

    <!-- Additional Sections (y x) -->
        <section class="py-8">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Blog/Article Section -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Blog atau Artikel</h3>
                    <p class="text-gray-700 mb-4">Baca artikel menarik tentang sepeda listrik, perawatan, dan tips lainnya.</p>
                    <a href="" class="text-gray-900 hover:text-blue-900">Kunjungi Blog Kami</a>
                </div>
                <!-- Interactive Q&A or Live Chat Section -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold text-blue-900 mb-4">Tanya Jawab Interaktif atau Live Chat</h3>
                    <p class="text-gray-700 mb-4">Butuh bantuan? Hubungi kami melalui live chat untuk mendapatkan jawaban langsung.</p>
                    <a href="" class="text-gray-900 hover:text-blue-900">Mulai Chat Sekarang</a>
                </div>
            </div>
        </section>

    <!-- Contact Section -->
        <section id="contact" class="bg-gray-800 text-white py-16">
            <div class="container mx-auto text-center px-4 md:px-0">
                <a href="{{ route('contact') }}">
                    <h2 class="text-3xl md:text-4xl font-bold mb-8 text-white hover:text-white hover:bg-yellow-600 transition duration-300 inline-block px-4 py-2 rounded">
                        Hubungi Kami
                    </h2>
                </a>
                <p class="text-lg md:text-xl mb-8">Siap membantu Anda dengan semua kebutuhan sepeda listrik Anda.</p>
                <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-6 items-center">
                    <a href="https://wa.link/tnpduo" class="bg-yellow-600 text-white px-6 py-3 rounded-full text-lg hover:bg-yellow-700 transition duration-300 inline-flex items-center justify-center w-full md:w-auto">
                        <i class="fab fa-whatsapp mr-2"></i> WhatsApp
                    </a>
                    <a href="https://www.instagram.com/selismolishokiofficial/" class="bg-yellow-600 text-white px-6 py-3 rounded-full text-lg hover:bg-yellow-700 transition duration-300 inline-flex items-center justify-center w-full md:w-auto">
                        <i class="fab fa-instagram mr-2"></i> Instagram
                    </a>
                    <a href="mailto:info@selismolishoki.com" class="bg-yellow-600 text-white px-6 py-3 rounded-full text-lg hover:bg-yellow-700 transition duration-300 inline-flex items-center justify-center w-full md:w-auto">
                        <i class="fas fa-envelope mr-2"></i> Email Kami
                    </a>
                </div>
            </div>
        </section>
    </body>
</html>
