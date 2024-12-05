@yield('content')
        <footer class="bg-black text-gray-400 py-10">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
        
        <div>
        <img src="{{ asset('img/fliplogo.svg') }}" alt="flip">
        <div class="flex space-x-4 mt-4">
            <a href="#" aria-label="TikTok" class="text-white text-2xl"><i class="fab fa-tiktok"></i></a>
            <a href="#" aria-label="Instagram" class="text-white text-2xl"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="Twitter" class="text-white text-2xl"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Facebook" class="text-white text-2xl"><i class="fab fa-facebook"></i></a>
        </div>
        </div>

        <div>
        <h3 class="text-white font-bold mb-4">About Flip</h3>
        <ul class="space-y-2">
            <li><a href="#" class="hover:underline">Blog</a></li>
            <li><a href="#" class="hover:underline">Promo</a></li>
            <li><a href="#" class="hover:underline">News & Media</a></li>
            <li><a href="#" class="hover:underline">Swift Code Finder</a></li>
            <li><a href="#" class="hover:underline">Currency Converter</a></li>
            <li><a href="#" class="hover:underline">Community</a></li>
            <li><a href="#" class="hover:underline">Help Center</a></li>
            <li><a href="#" class="hover:underline">Privacy Policy</a></li>
            <li><a href="#" class="hover:underline">Terms and Conditions</a></li>
            <li><a href="#" class="hover:underline">Report a Vulnerability</a></li>
        </ul>
        </div>

        <div>
        <h3 class="text-white font-bold mb-2">Contact Us</h3>
        <ul class="space-y-2">
            <li>Call Center: <a href="tel:+622130002424" class="hover:underline">+62 21 - 30002424</a></li>
            <li>Email: <a href="mailto:hello@flip.id" class="hover:underline">hello@flip.id</a></li>
            <li>Address:</li>
            <li class="text-sm">Jl. Pesona Khayangan Blok CK No. 50, Mekar Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16411</li>
            <h3 class="text-white font-bold mb-4">Business & Partnership</h3>
            <ul class="space-y-2">
                <li>Email: <a href="mailto:business@flip.id" class="hover:underline">business@flip.id</a></li>
            </ul>
        </ul>
        </div>

        <div class="mt-4">
            <p class="text-sm">Direktorat Jenderal Perlindungan</p>
            <p class="text-sm mt-2">Konsumen dan Tertib Niaga</p>
            <p class="text-sm mt-2">Kementrian Perdagangan RI</p>
            <p class="text-sm mt-2">Whatsapp 0853 1111 1010</p>
            <img class="w-32 h-auto mt-5" src="{{ asset('img/certified.png') }}" alt="flip">
        </div>
    </div>

    <div class="mt-10 sm:mx-0 mx-2 border-t border-gray-700 pt-6 text-center text-xs text-gray-500">
        <p>Flip is a money transfer platform that has been licensed by Bank Indoneia.</p>
        <p class="mt-2">&copy; 2024 PT Fliptech Lentera Inspirasi Pertiwi</p>
    </div>
</footer>
