@section('title','Home | Flip')
@extends('base.header')
@section('content')

<style>
        .carousel {
            scroll-snap-type: x mandatory;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            display: flex;
        }
        .carousel::-webkit-scrollbar {
            display: none;
        }
        .carousel-item {
            scroll-snap-align: center;
            flex: none;
            width: 320px; 
            margin-right: 16px;
        }
        .carousel-container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: white;
            border-radius: 50%;
            padding: 8px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .carousel-button.left {
            left: 0;
        }
        .carousel-button.right {
            right: 0;
        }
</style>

<div class="relative w-full h-screen">
    <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative w-full h-full bg-gradient-to-br from-[#ff7f00] to-[#ffbb00] opacity-30">
    </div>
</div>

<div data-aos="fade-up" class="ml-12 sm:ml-[150px] mr-12 sm:mr-0 mt-[125px] h-[75vh]">
    <div class="text-5xl font-bold">
        <p>Free financial</p>
        <p>transactions, to anyone.</p>
    </div>

    <div class="text-gray-500 mt-5 text-sm font-bold">
        <p>Transfer from different banks, top up e-wallet, send money</p>
        <p id="bottom">abroad, and buy digital products. All with lower cost!</p>
    </div>

    <div class="mt-8 flex justify-between items-center bg-orange-500 p-5 rounded-lg text-white w-80">
        <div class="text">
            <h2 class="text-lg">Scan this QR to<br>download Flip app</h2>
            <p class="text-2xl">➔</p>
        </div>
        <img class="w-24" src="https://randomqr.com/assets/images/randomqr-256.png" alt="QR Code">
    </div>

    <div class="text-gray-500 opacity-80 mt-12 flex justify-between w-64 text-xs">
        <p class="mr-1">Flip is registered and supervised by</p>
        <img class="ml-2 w-27 h-6" src="https://flip.id/assets/images/bank-indonesia.png" alt="Bank Indonesia">
    </div>  

    <img data-aos="fade-up" src="{{ asset('img/hero-main-image.webp') }}" alt="Person Illustration" class="absolute -top-24 right-[50px] h-auto hidden lg:block">
</div>
    
<div class="relative h-screen">
    <div class="absolute inset-0 bg-gradient-to-br from-[#ffbb00] to-transparent opacity-30 blur-lg"></div>

    <div data-aos= "fade-up" class= "relative z-10 container2 text-center justify-center p-10 h-full">
        <div class="text-3xl font-bold">
            <p>Flip builds fair financial services for</p>
            <p>everyone.</p>
        </div>

        <button class="mt-4 mb-10 bg-orange-500 text-white font-bold py-3 px-6 rounded-full transition duration-300 hover:bg-orange-600">
            About Us
        </button>

        <div class="bg-gray-100 py-10">
            <div class="text-center mb-10">
                <p class="text-4xl font-bold">12+ Million People</p>
                <p class="text-lg text-gray-500">have saved money using Flip.</p>
                <p>You can slide the comments using your mousepad</p>
            </div>

            <div class="mb-10"></div>

            <div class="carousel-container max-w-5xl mx-auto">
                <div class="carousel">
                    @include('components.home1', [
                    'desc' => 'I have saved IDR110k since I used Flip 😁 Now I don\'t have to think twice whenever I need to do interbank transfer! Kudos for Flip team 👏',
                    'name' => 'Deafany'
                    ])

                    @include('components.home1', [
                    'desc' => 'Most of the time we don\'t think much when we spend for admin fee, but when we add it up, it can accumulate to millions of Rupiahs!',
                    'name' => 'Febian'
                    ])

                    @include('components.home1', [
                    'desc' => 'Awesome! This app really helps me whenever I have to transfer to different banks. Flip has something that others don\'t.',
                    'name' => 'Viktoria Mardhi'
                    ])

                    @include('components.home1', [
                    'desc' => 'I have saved IDR110k since I used Flip 😁 Now I don\'t have to think twice whenever I need to do interbank transfer! Kudos for Flip team 👏',
                    'name' => 'Deafany'
                    ])

                    @include('components.home1', [
                    'desc' => 'Most of the time we don\'t think much when we spend for admin fee, but when we add it up, it can accumulate to millions of Rupiahs!',
                    'name' => 'Febian'
                    ])

                    @include('components.home1', [
                    'desc' => 'Awesome! This app really helps me whenever I have to transfer to different banks. Flip has something that others don\'t.',
                    'name' => 'Viktoria Mardhi'
                    ])                                  
                </div>


                <div class="carousel-button left">
                    <span class="text-2xl">‹</span>
                </div>
                <div class="carousel-button right">
                    <span class="text-2xl">›</span>
                </div>
            </div>

            <div class="mt-10 flex justify-center space-x-10">
                <div class="text-center">
                    <p class="text-xl font-bold">Thousands of Companies & SMEs</p>
                    <p class="text-gray-500">have trusted Flip for Business.</p>
                </div>
                <div class="text-center">
                    <p class="text-xl font-bold">Trillions of Rupiahs</p>
                    <p class="text-gray-500">are handled every month.</p>
                </div>
            </div>
        </div>

    </div>
    <div class="relative isolate px-6 lg:px-8 h-screen">
    <div class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative left-1/2 aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ffbb77] to-[#ff9e9e] opacity-30 sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="container mx-auto h-full flex items-center justify-center">
        <div data-aos="fade-up" class="text-center relative z-20">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Send money to 100+ banks</h1>
            <p class="mt-6 text-lg leading-8 text-gray-700">Transfer & save more to 100+ banks in Indonesia!</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ route('sendmoney') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
            </div>
        </div>

        <div data-aos="fade-up" class="absolute bottom-0 left-0 right-0 flex justify-between items-end px-10 pb-10 sm:ml-0 ml-10">
            <img src="{{ asset('img/rear-phone.png') }}" alt="Rear Phone" 
                class="w-40 md:w-64 lg:w-96 transform -translate-x-32 z-10"> 
            <img src="{{ asset('img/front-phone.png') }}" alt="Front Phone" 
                class="w-40 md:w-64 lg:w-96 transform z-20">
        </div>
    </div>
</div>

<div class="relative isolate px-6 lg:px-8 h-screen">
    <div class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative left-1/2 aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff9c38] to-[#ff6666] opacity-30 sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="container mx-auto h-full flex flex-col items-center justify-center">
        <div data-aos="fade-up" class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">E-wallet top up</h1>
            <p class="mt-6 text-lg leading-8 text-gray-700">Digital wallet top-up becomes easier, you can top up multiple e-wallets at once.</p>
            <div class="mt-10">
                <a href="{{ route('ewallet') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
            </div>
        </div>

        <div data-aos="fade-up" class="mt-16 flex items-center justify-center gap-8">
            <img src="{{ asset('img/illust-ewallet.png') }}" alt="Phone with E-wallet" class="sm:ml-0 ml-6 w-40 sm:w-48 h-auto">

            <div class="sm:ml-0 -ml-6 flex flex-col space-y-4">
                @include('components.home2', [
                'source' => asset('img/gopay.png'),
                'alt' => 'Gopay'
                ])

                @include('components.home2', [
                'source' => asset('img/ovo.png'),
                'alt' => 'OVO'
                ])

                @include('components.home2', [
                'source' => asset('img/spay.png'),
                'alt' => 'ShopeePay'
                ])

                @include('components.home2', [
                'source' => asset('img/dana.png'),
                'alt' => 'DANA'
                ])

                @include('components.home2', [
                'source' => asset('img/linkaja.png'),
                'alt' => 'LinkAja'
                ])
            </div>
        </div>
    </div>
</div>

<div class="relative isolate px-6 lg:px-8 h-screen">
    <div class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative left-1/2 aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff9c38] to-[#ff6666] opacity-30 sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="container mx-auto h-full flex flex-col items-center justify-center space-y-8 sm:space-y-10">
        <div data-aos="flip-up" class="text-center">
            <h1 class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900">Buy digital products</h1>
            <p class="mt-4 text-base sm:text-lg leading-6 text-gray-700">Buy phone credits, data packages, and electricity tokens/bills at lower prices.</p>
            <div class="mt-8 flex items-center justify-center gap-x-4 sm:gap-x-6">
                <a href="{{ route('digitalproducts') }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
            </div>
        </div>

        <div data-aos="fade-up" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @include('components.home3', [
            'title' => 'Phone Credit',
            'source' => 'https://storage.googleapis.com/strapi-staging/media-library/Pulsa_4722c0e3d8/Pulsa_4722c0e3d8.svg',
            'alt' => 'Phone Credit',
            'desc' => 'Buy 100k phone credit with only IDR 96k. A great deal, right?'
            ])

            @include('components.home3', [
            'title' => 'Electricity',
            'source' => 'https://storage.googleapis.com/strapi-staging/media-library/Pulsa_4722c0e3d8/Pulsa_4722c0e3d8.svg',
            'alt' => 'Electricity',
            'desc' => 'Buy electricity tokens with only IDR500 additional fee.'
            ])

            @include('components.home3', [
            'title' => 'Data Plans',
            'source' => 'https://storage.googleapis.com/strapi-staging/media-library/Pulsa_4722c0e3d8/Pulsa_4722c0e3d8.svg',
            'alt' => 'Data Plans',
            'desc' => 'Buy electricity tokens with only IDR500 additional fee.'
            ])
        </div>
    </div>

    <img data-aos="fade-up" src="{{ asset('img/illust pulsa.png') }}" alt="Person Illustration" class="absolute top-20 left-[20px] w-48 h-auto hidden xl:block">
    <img data-aos="fade-up" src="{{ asset('img/illust internet.png') }}" alt="Person Illustration" class="absolute top-20 right-[20px] w-48 h-auto hidden xl:block">
</div>

    <div class="relative isolate px-6 lg:px-8 h-screen">
    <div class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative left-1/2 aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff7dd6] to-[#ff9442] opacity-30 sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="container mx-auto h-full flex items-center justify-center">
    <div class="relative w-500px h-500px flex items-center justify-center">
        <div class="absolute inset-0 bg-cover bg-center opacity-40 rounded-lg" style="background-image: url('{{ asset('img/globeglobe.webp') }}'); background-position: left center;"></div>
        
        <div class="relative bg-cover rounded-lg p-20">
            <div data-aos="fade-up" class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Send money abroad</h1>
                <p class="mt-6 text-lg leading-8 text-gray-700">Transfer money from Indonesia to 55+ countries swiftly and securely.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ route('flipglobe') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative isolate px-6 lg:px-8 w-full mx-0 h-screen">
    <div class="absolute inset-x-0 top-0 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative left-1/2 aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff9c38] to-[#ff6666] opacity-30 sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="container mx-0 h-full flex flex-col items-center justify-center">
        <div data-aos="fade-up" class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Manage company financials</h1>
            <p class="mt-6 text-lg leading-8 text-gray-700">With Flip for Business, manage your company finances easily.</p>
            <div class="mt-10">
                <a href="{{ route('flipbusiness') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
            </div>
        </div>
        
        <div data-aos="fade-up" class="mt-16 flex items-center justify-center gap-8">
            <img src="{{ asset('img/computer.svg') }}" alt="main" class="h-auto">
        </div>
    </div>
</div>

<footer class="bg-black text-gray-400 py-10 -mx-[24px] sm:-mx-16">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
        
        <div>
        <img src="{{ asset('img/fliplogo.svg') }}" alt="flip">
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

    <div class="mt-10 border-t border-gray-700 pt-6 text-center text-xs text-gray-500">
        <p>Flip is a money transfer platform that has been licensed by Bank Indonesia.</p>
        <p class="mt-2">&copy; 2024 PT Fliptech Lentera Inspirasi Pertiwi</p>
    </div>
</footer>

@endsection