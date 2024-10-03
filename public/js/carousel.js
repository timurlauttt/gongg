const items = document.querySelectorAll('.carousel-item');
let currentIndex = 0;

function showSlide(index) {
    items.forEach((item, i) => {
        if (i === index) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');
        }
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

function startCarousel() {
    setInterval(() => {
        currentIndex = (currentIndex + 1) % items.length;
        showSlide(currentIndex);
    }, 5000); // Ganti angka 5000 dengan interval waktu (ms) yang diinginkan
}

// Inisialisasi slide pertama
showSlide(currentIndex);

// Mulai otomatis carousel
startCarousel();
