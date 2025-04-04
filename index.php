<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIZTA Family KTV</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-300 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-pink-500 text-white p-4 flex flex-col md:flex-row justify-between items-center">
        <div class="font-bold text-xl mb-2 md:mb-0">VIZTA Family KTV</div>
        <ul class="flex flex-wrap justify-center space-x-2 md:space-x-4 relative">
            <li><a href="#" class="hover:text-gray-200 px-2">HOME</a></li>
            <li><a href="#" class="hover:text-gray-200 px-2">NEWS</a></li>
            <li class="relative group">
                <a href="#" class="hover:text-gray-200 px-2">OUTLET</a>
                <ul class="absolute hidden group-hover:block bg-pink-600 text-white mt-2 py-2 w-48 z-10">
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">DKI JAKARTA</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">JAWA</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">KALIMANTAN</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">SUMATERA</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">SULAWESI</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">MALUKU</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">IRIAN JAYA</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="#" class="hover:text-gray-200 px-2">SYSTEM</a>
                <ul class="absolute hidden group-hover:block bg-pink-600 text-white mt-2 py-2 w-48 z-10">
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">COMPUTERIZED</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">AUDIO SYSTEM</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">SONG COLLECTION</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="#" class="hover:text-gray-200 px-2">EVENT</a>
                <ul class="absolute hidden group-hover:block bg-pink-600 text-white mt-2 py-2 w-48 z-10">
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">PICTURE</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="#" class="hover:text-gray-200 px-2">PROMO</a>
                <ul class="absolute hidden group-hover:block bg-pink-600 text-white mt-2 py-2 w-48 z-10">
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">PROMO OUTLET</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">PROMO PUSAT</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="#" class="hover:text-gray-200 px-2">FAQ</a>
                <ul class="absolute hidden group-hover:block bg-pink-600 text-white mt-2 py-2 w-48 z-10">
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">GUEST COMMENT</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="#" class="hover:text-gray-200 px-2">INFO</a>
                <ul class="absolute hidden group-hover:block bg-pink-600 text-white mt-2 py-2 w-48 z-10">
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">FRANCHISE</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-pink-700">WEBMAIL</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Header Image -->
    <div class="relative w-full h-64 md:h-96 overflow-hidden">
        <img src="hed.jpeg" alt="KTV Room" class="w-full h-full object-cover">
        <h1 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-xl md:text-3xl font-bold text-center">BLOG POST</h1>
    </div>

    <!-- Promo Section -->
    <section class="py-10 px-5">
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card Repeated -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center border border-gray-200">
                <h2 class="font-bold text-xl">Promo Valentine</h2>
                <p class="text-sm text-gray-500">📅 💬 0 Comments</p>
                <p class="text-sm text-gray-500">📋 Pejaten</p>
                <p class="mt-4 text-gray-700">Siap bikin Valentine tahun ini jadi momen tak terlupakan? Ajak orang tersayang bernyanyi dan bersenang-senang di Inul Vizta dengan promo.</p>
                <button class="mt-4 bg-pink-500 text-white px-4 py-2 rounded">READ MORE</button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center border border-gray-200">
                <h2 class="font-bold text-xl">Promo Beerame-rame</h2>
                <p class="text-sm text-gray-500">📅 💬 0 Comments</p>
                <p class="text-sm text-gray-500">📋 Promo Pusat</p>
                <p class="mt-4 text-gray-700">Nikmati kehangatan dan kebersamaan dengan PAKET BEERAME-RAME dari Inul Vizta! 🍻✨ Pilihan terbaik untuk meramaikan momen bersama teman-temanmu!</p>
                <button class="mt-4 bg-pink-500 text-white px-4 py-2 rounded">READ MORE</button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center border border-gray-200">
                <h2 class="font-bold text-xl">Promo Tiket.com</h2>
                <p class="text-sm text-gray-500">📅 💬 0 Comments</p>
                <p class="text-sm text-gray-500">📋 Promo Pusat</p>
                <p class="mt-4 text-gray-700">Siap-siap untuk seru-seruan karaoke di Inul Vizta dengan voucher hemat dari Tiket.com! 🎉 Dapatkan paket mulai dari Rp 85.000 dan rasakan keseruannya!</p>
                <button class="mt-4 bg-pink-500 text-white px-4 py-2 rounded">READ MORE</button>
            </div>
            <!-- Repeat as needed -->
        </div>
    </section>

    <!-- Floating WhatsApp Button -->
    <footer class="fixed bottom-4 right-4 z-50">
        <a href="#" class="bg-green-500 p-3 rounded-full shadow-lg flex items-center justify-center w-14 h-14">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="w-8 h-8">
        </a>
    </footer>
</body>
</html>