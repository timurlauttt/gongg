<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SELISMOLISHOKI</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-100">
        @include('layouts.navbar')
        <!-- Header/Hero Section -->
        <header class="relative w-full h-screen pt-20" style="z-index: 0;">
            <div id="carouselExample" class="relative w-full h-screen overflow-hidden">
                <!-- Slide 1 -->
                <div class="carousel-item absolute inset-0 bg-cover bg-center transition-all duration-700" style="background-image: url('images/mypict.jpg');">
                    <div class="absolute inset-0 bg-black bg-opacity-80 flex items-center justify-center">
                        <div class="container mx-auto text-center text-white">
                            <h1 class="text-5xl font-bold mb-4">Selis Molis Hoki</h1>
                            <h1 class="text-3xl font-bold mb-4">Membantu Penyebaran Kendaraan Listrik di Indonesia.</h1>
                            <p class="text-xl mb-8">Perbaikan Sepeda Listrik Terpercaya, Cepat, dan Profesional.</p>
                            <a href="#services" class="slide-button bg-yellow-500 drop-shadow-lg text-white px-6 py-3 rounded-full text-lg hover:bg-yellow-600">Reservasi Jadwal Servis Anda Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item absolute inset-0 bg-cover bg-center transition-all duration-700" style="background-image: url('images/service.jpg');">
                    <div class="absolute inset-0 bg-black bg-opacity-80 flex items-center justify-center">
                        <div class="container mx-auto text-center text-white">
                            <h1 class="text-5xl font-bold mb-4">Selis Molis Hoki</h1>
                            <h1 class="text-3xl font-bold mb-4">Home Service dan Servis di Bengkel</h1>
                            <p class="text-xl mb-8">Siap Melayani Dimana Saja, Kapan Saja!</p>
                            <a href="#services" class="slide-button bg-yellow-500 drop-shadow-2xl text-white px-6 py-3 rounded-full text-lg hover:bg-yellow-600">Servis Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item absolute inset-0 bg-cover bg-center transition-all duration-700" style="background-image: url('images/bengkel.jpg');">
                    <div class="absolute inset-0 bg-black bg-opacity-80 flex items-center justify-center">
                        <div class="container mx-auto text-center text-white">
                            <h1 class="text-5xl font-bold mb-4">Selis Molis Hoki</h1>
                            <h1 class="text-3xl font-bold mb-4">Cek Status Perbaikan Anda</h1>
                            <p class="text-xl mb-8">Ingin tahu status perbaikan kendaraan anda? kliki tombol di bawah ini</p>
                            <a href="#cek-status" class="slide-button bg-yellow-500 drop-shadow-2xl text-white px-6 py-3 rounded-full text-lg hover:bg-yellow-600 ">Cek Status</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <div class="absolute inset-y-1/2 left-4 transform -translate-y-1/2 text-3xl text-white cursor-pointer z-20 bg-black bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center hover:bg-opacity-80" id="prev">
                &lt;
            </div>
            <div class="absolute inset-y-1/2 right-4 transform -translate-y-1/2 text-3xl text-white cursor-pointer z-20 bg-black bg-opacity-50 rounded-full w-12 h-12 flex items-center justify-center hover:bg-opacity-80" id="next">
                &gt;
            </div>
        </header>
        <script src="js/carousel.js"></script>
        
        <!-- Services Section -->
        <section id="services" style="background-color: #f8f8f8" class="py-16">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold mb-12 pt-16 text-gray-900">Layanan Servis Kami</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <!-- Home Service -->
                    <div class="bg-white p-8 rounded-lg drop-shadow-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <a href="{{ route('services.servis') }}" class="block">
                            <div class="overflow-hidden rounded-lg mb-6">
                                <img src="images/service.jpg" alt="Servis Sepeda Listrik" class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-105">
                            </div>
                        </a>
                        <a href="{{ route('services.servis') }}" class="block">
                            <h3 class="text-2xl font-semibold mb-4 text-gray-800 hover:text-gray-600">Home Service</h3>
                        </a>
                        <p class="text-gray-600 mb-6">Layanan servis sepeda listrik langsung di rumah Anda oleh teknisi profesional kami.</p>
                        <a href="{{ route('services.servis') }}" 
                        style="background-color: #d97706" 
                        class="inline-block text-white px-5 py-3 min-w-[200px] rounded-full text-lg transition-colors duration-300 text-center"
                        onmouseover="this.style.backgroundColor='#eab308'"
                        onmouseout="this.style.backgroundColor='#d97706'">
                        Reservasi sekarang
                        </a>
                    </div>
                    <!-- Servis di Bengkel  -->
                    <div class="bg-white p-8 rounded-lg drop-shadow-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                        <a href="{{ route('services.servisgarage') }}">
                            <div class="overflow-hidden rounded-lg mb-6">
                                <img src="images/sparepart.jpg" alt="Sparepart Sepeda Listrik" class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-105">
                            </div>
                        </a>
                        <a href="{{ route('services.servisgarage') }}" class="block">
                            <h3 class="text-2xl font-semibold mb-4 text-gray-800 hover:text-gray-600">Servis di Bengkel</h3>
                        </a>
                        <p class="text-gray-600 mb-6">Servis secara mendalam sepeda listrik Anda di bengkel kami dengan peralatan yang lebih lengkap.</p>
                        <a href="{{ route('services.servisgarage') }}" 
                        style="background-color: #d97706" 
                        class="inline-block text-white px-5 py-3 min-w-[200px] rounded-full text-lg transition-colors duration-300 text-center"
                        onmouseover="this.style.backgroundColor='#eab308'"
                        onmouseout="this.style.backgroundColor='#d97706'">
                        Reservasi sekarang
                        </a>
                    </div>
                </div>
            </div>
        </section>
         
        {{-- cek status --}}
        <section id="cek-status" style="background-color: white" class="py-24 px-6">
            <div class="container mx-auto text-center">
                <!-- Judul Section -->
                <h2 class="text-4xl font-bold mb-8 text-gray-900">Cek Status Perbaikan</h2>

                <!-- Paragraph Section -->
                <p class="text-xl text-gray-700 mb-10">Masukkan token perbaikan Anda untuk melihat status terkini dari unit yang sedang diperbaiki.</p>

                <!-- Form untuk Mengecek Status -->
                <form id="status-form" class="w-full max-w-lg mx-auto">
                    <div class="flex flex-col md:flex-row items-center justify-center mb-8">
                        <input 
                            type="text" 
                            name="token" 
                            id="token" 
                            placeholder="Masukkan Token Perbaikan" 
                            class="w-full px-5 py-4 text-gray-900 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500 mb-4 md:mb-0 md:mr-4"
                            required>
                        <button 
                            type="submit" 
                            class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none transition duration-300">
                            Cek Status
                        </button>
                    </div>
                </form>
                <!-- Div untuk menampilkan hasil pengecekan status -->
                <div id="status-result" class="w-full max-w-lg mx-auto mt-8 p-4 bg-white rounded-lg shadow-md hidden">
                    <!-- The status will be dynamically inserted here -->
                </div>
                <script src="js/check.js"></script>

                <!-- Placeholder Hasil Cek -->
                <div id="status-hasil" class="text-xl text-gray-800 mt-12">
                    <!-- Hasil status akan ditampilkan di sini -->
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="about-us" style="background-color: #F3F4F6" class="py-12 bg-gray-100 text-gray-900">
            <div class="container mx-auto text-center">
                <!-- Heading Section -->
                <h2 class="text-4xl font-bold mb-12 pt-10 text-gray-900">Tentang Kami</h2>
                <!-- Paragraph Section -->
                <p class="text-lg md:text-xl mb-6 mx-4 lg:mx-0">
                    Baik di rumah Anda maupun di bengkel kami, kami siap memastikan sepeda listrik Anda kembali berfungsi dengan optimal dan aman.
                </p>
                <!-- Google Maps iframe -->
                <div class="w-full h-64 md:h-80 lg:h-96 mb-8">
                    <iframe class="w-full h-full rounded-lg shadow-lg" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.978965102293!2d109.2619913!3d-7.4374857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655c1e12755a2f%3A0x469c4dabeb58e272!2sSelis%20Molis%20Hoki%20Store!5e0!3m2!1sen!2sid!4v1692968239512!5m2!1sen!2sid" 
                    allowfullscreen="" 
                    loading="lazy">
                    </iframe>
                </div>
                <!-- Button Section -->
                <a href="{{ route('aboutus') }}" 
                style="background-color: #d97706" 
                class="inline-block text-white px-5 py-3 min-w-[200px] rounded-full text-lg transition-colors duration-300 text-center"
                onmouseover="this.style.backgroundColor='#eab308'"
                onmouseout="this.style.backgroundColor='#d97706'">
                Selengkapnya
                </a>
            </div>
        </section>

        {{-- Testimonial Section --}}
        <section id="testimoni" class="py-16 px-4 bg-gray-50 text-gray-900">
            <div class="container mx-auto text-center h-full flex flex-col justify-center">
                <!-- Heading Section -->
                <h2 class="text-4xl font-bold mb-6 lg:mb-12 pt-10 text-gray-900">Testimoni Pelanggan</h2>
                <!-- Paragraph Section -->
                <p class="text-lg md:text-xl mb-6 mx-4 lg:mx-0 text-gray-700">
                    Lihat apa yang pelanggan kami katakan tentang layanan kami. Kami berkomitmen untuk memberikan pelayanan terbaik untuk Anda.
                </p>
                <!-- Carousel Testimoni Section -->
                <div class="w-full mb-8">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Testimoni 1 -->
                            <div class="swiper-slide py-12 p-6 lg:p-12 bg-white rounded-lg shadow-lg lg:text-xl">
                                <p class="text-lg lg:text-2xl italic mb-4 text-gray-800">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, dolore recusandae eaque dolorum optio placeat minus qui odit nam suscipit.</p>
                                <p class="text-sm lg:text-lg text-gray-500">- Budi Santoso</p>
                            </div>
                            <!-- Testimoni 2 -->
                            <div class="swiper-slide py-12 p-6 lg:p-12 bg-white rounded-lg shadow-lg lg:text-xl">
                                <p class="text-lg lg:text-2xl italic mb-4 text-gray-800">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente placeat porro voluptatibus iusto obcaecati commodi nemo quia, cum corrupti similique natus dolore maxime officia totam. Soluta dicta dolorem minus rerum?</p>
                                <p class="text-sm lg:text-lg text-gray-500">- Siti Nurhaliza</p>
                            </div>
                            <!-- Testimoni 3 -->
                            <div class="swiper-slide py-12 p-6 lg:p-12 bg-white rounded-lg shadow-lg lg:text-xl">
                                <p class="text-lg lg:text-2xl italic mb-4 text-gray-800">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia facilis enim deserunt eveniet earum aspernatur repellendus, dicta eius rem quam nihil fuga!</p>
                                <p class="text-sm lg:text-lg text-gray-500">- Andi Nugraha</p>
                            </div>
                            <!-- Testimoni 4 -->
                            <div class="swiper-slide py-12 p-6 lg:p-12 bg-white rounded-lg shadow-lg lg:text-xl">
                                <p class="text-lg lg:text-2xl italic mb-4 text-gray-800">"Lorem ipsum dolor sit amet consectetur, adipisicing elit."</p>
                                <p class="text-sm lg:text-lg text-gray-500">- Andi</p>
                            </div>
                            <!-- Testimoni 5 -->
                            <div class="swiper-slide py-12 p-6 lg:p-12 bg-white rounded-lg shadow-lg lg:text-xl">
                                <p class="text-lg lg:text-2xl italic mb-4 text-gray-800">"Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                                <p class="text-sm lg:text-lg text-gray-500">- Nugraha</p>
                            </div>
                        </div>
                        <!-- Navigasi -->
                        <div class="swiper-pagination mt-4"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Swiper JS Script -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 5000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        </script>
        
        <!-- Contact Section -->
        <section id="contact" style="background-color: #f5f5f5" class="text-gray-900 py-16">
            <div class="container mx-auto text-center px-4 md:px-0">
                <a href="{{ route('contact') }}">
                    <h2 class="text-3xl md:text-4xl font-bold mb-8 text-gray-900 hover:text-white hover:bg-yellow-600 transition duration-300 inline-block px-4 py-2 rounded">
                        Hubungi Kami
                    </h2>
                </a>
                <p class="text-lg md:text-xl mb-8 text-gray-700">Siap membantu Anda dengan semua kebutuhan sepeda listrik Anda.</p>
                <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-6 items-center">
                    <!-- Tombol WhatsApp -->
                    <a href="https://wa.link/69xji2" class="text-white px-6 py-3 rounded-full text-lg transition duration-300 inline-flex items-center justify-center w-full md:w-auto drop-shadow-lg shadow-lg hover:shadow-xxl" style="background-color: #25D366;" onmouseover="this.style.backgroundColor='#1EBB5D'" onmouseout="this.style.backgroundColor='#25D366'">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo" class="mr-2 w-6 h-6"> WhatsApp
                    </a>
                    <!-- Tombol Instagram -->
                    <a href="https://www.instagram.com/selismolishokiofficial/" class="text-white px-6 py-3 rounded-full text-lg transition duration-300 inline-flex items-center justify-center w-full md:w-auto drop-shadow-lg shadow-lg hover:shadow-xl" style="background-color: #405DE6;" onmouseover="this.style.backgroundColor='#3A4DCB'" onmouseout="this.style.backgroundColor='#405DE6'">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo" class="mr-2 w-6 h-6"> Instagram
                    </a>
                    <!-- Tombol Email -->
                    <a href="mailto:info@selismolishoki.com" class="text-white px-6 py-3 rounded-full text-lg transition duration-300 inline-flex items-center justify-center w-full md:w-auto drop-shadow-lg shadow-lg hover:shadow-xl" style="background-color: #D14836;" onmouseover="this.style.backgroundColor='#C0392B'" onmouseout="this.style.backgroundColor='#D14836'">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Gmail_icon_%282020%29.svg" alt="Email Logo" class="mr-2 w-6 h-6"> Email Kami
                    </a>
                </div>
            </div>
        </section>
        
        @include('layouts.footer')
    </body>
</html>