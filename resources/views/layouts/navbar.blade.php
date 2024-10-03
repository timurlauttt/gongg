<nav class="p-4 fixed top-0 w-full z-10 border-b border-gray-300" style="background-color: #f97316">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Mobile menu button -->
        <button id="menu-btn" class="block md:hidden text-white focus:outline-none order-1 md:order-none transition-transform duration-300">
            <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path id="line1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"></path>
                <path id="line2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16"></path>
                <path id="line3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 18h16"></path>
            </svg>
        </button>

        <!-- Logo and Title -->
        <a href="{{ route('home') }}" class="hover:text-gray-400 text-white text-2xl font-bold flex items-center md:ml-0 ml-auto order-2 md:order-none">
            Selis Molis Hoki
            <div class="ml-1 bg-white p-0 rounded-full border-2 border-black">
                <img src="images/logofix.png" alt="Logo Perusahaan" class="h-6 md:h-8 lg:h-10 w-auto">
            </div>
        </a>

        <!-- Desktop and mobile menu -->
        <ul id="menu" class="hidden flex-col md:flex md:flex-row md:space-x-6 text-white mt-4 md:mt-0 md:items-center transition-all duration-300 ease-in-out absolute top-16 left-0 w-full md:static md:w-auto md:top-0 md:left-0 md:order-none order-3 bg-orange-500 md:bg-transparent">
            <li class="w-full md:w-auto"><a href="home" class="block py-2 px-4 bg-orange-500 hover:bg-yellow-700 rounded transition-colors duration-300 ease-in-out text-center">Home</a></li>
            <li class="w-full md:w-auto"><a href="#services" class="block py-2 px-4 bg-orange-500 hover:bg-yellow-700 rounded transition-colors duration-300 ease-in-out text-center">Services</a></li>
            <li class="w-full md:w-auto"><a href="#about-us" class="block py-2 px-4 bg-orange-500 hover:bg-yellow-700 rounded transition-colors duration-300 ease-in-out text-center">About Us</a></li>
            <li class="w-full md:w-auto"><a href="#testimoni" class="block py-2 px-4 bg-orange-500 hover:bg-yellow-700 rounded transition-colors duration-300 ease-in-out text-center">Testimonials</a></li>
            <li class="w-full md:w-auto"><a href="#contact" class="block py-2 px-4 bg-orange-500 hover:bg-yellow-700 rounded transition-colors duration-300 ease-in-out text-center">Contact</a></li>
        </ul>
    </div>
</nav>

<!-- JavaScript for handling dropdown with animation -->
<script>
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');
    const menuIcon = document.getElementById('menu-icon');
    const line1 = document.getElementById('line1');
    const line2 = document.getElementById('line2');
    const line3 = document.getElementById('line3');

    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');

        // Toggle the icon appearance
        if (menu.classList.contains('hidden')) {
            // Menu is closed: Set lines to horizontal
            line1.setAttribute('d', 'M4 6h16');
            line2.setAttribute('d', 'M4 12h16');
            line3.setAttribute('d', 'M4 18h16');
        } else {
            // Menu is open: Transform lines to vertical
            line1.setAttribute('d', 'M6 4L18 20'); // First line to diagonal
            line2.setAttribute('d', 'M6 20L18 4'); // Second line to diagonal
            line3.setAttribute('class', 'hidden'); // Hide third line
        }
    });

    // Adding smooth scroll
    menu.addEventListener('click', function(event) {
        const targetId = event.target.getAttribute('href');
        if (targetId.startsWith('#')) {
            event.preventDefault();
            const targetElement = document.querySelector(targetId);
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>
