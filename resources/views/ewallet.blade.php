@section('title','E-Wallet | Flip')
@extends('base.header')
@section('content')

@include('base.headproducts')


<div class="relative w-full h-[80vh] sm:h-[120vh] md:h-[110vh] lg:h-[90vh]">
    <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative w-full h-full bg-gradient-to-br from-[#ff7f00] to-[#ffbb00] opacity-30"></div>
    </div>

    <div data-aos="fade-up" class="container mx-auto px-4 py-10 flex flex-col lg:flex-row justify-between items-start">
        <div class="mt-20 ml-8 sm:ml-20 lg:w-1/2">
            <h1 class="mt-20 mb-5 text-6xl font-bold text-black">Top Up e-Wallet</h1>
            <p class="mt-2 text-orange-500">Top up your favorite e-Wallet more efficiently</p>
            <p class="mt-2 text-orange-500">and easily using Flip. Whichever wallet you</p>
            <p class="mt-2 text-orange-500">use, you can save more with Flip!</p>

            <div class="mt-6 flex space-x-4">
                <button class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow">App Store</button>
                <button class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow">Play Store</button>
            </div>

            <img data-aos="fade-up" src="{{ asset('img/orang.webp') }}" alt="Person" class="hidden lg:block absolute lg:-mt-96 left-4 sm:left-[600px] w-7/12">
    </div>
</div>
</div>

<div class="relative w-full min-h-screen">
    <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative w-full h-full bg-gradient-to-br from-[#ff3636] to-[#ff6200] opacity-40"></div>
    </div>

    <div class="text-center justify-center p-10 h-full">
        <div class="text-black text-2xl sm:text-4xl font-bold text-center">
            <p>Top Up e-Wallet</p>
        </div>

        <div class="text-center text-lg sm:text-xl font-bold mt-4">
            <p>You can now top up your e-Wallet without having to worry about hidden fees.</p>
        </div>

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 sm:-mt-24 mt-1">
            <div class="mx-auto max-w-2xl sm:max-w-none py-16 sm:py-24 lg:py-32">
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                    @include('components.ewallet1', [
                    'source' => 'https://static.vecteezy.com/system/resources/thumbnails/028/766/371/small_2x/gopay-payment-icon-symbol-free-png.png',
                    'alt' => 'Image 1'
                    ])
                    
                    @include('components.ewallet1', [
                    'source' => 'https://i.pinimg.com/originals/f5/8c/a3/f58ca3528b238877e9855fcac1daa328.jpg',
                    'alt' => 'Image 2'
                    ])

                    @include('components.ewallet1', [
                    'source' => 'https://play-lh.googleusercontent.com/LigDC5z3XrRr9ApFsJ6G-Kztmnr9hYdSlK0OC960XFFXTUyb9Zo8mtfr-yYNLWMmfg',
                    'alt' => 'Image 3'
                    ])
                    
                    @include('components.ewallet1', [
                    'source' => 'https://static.vecteezy.com/system/resources/previews/028/766/368/original/ovo-ewallet-payment-icon-symbol-free-png.png',
                    'alt' => 'Image 4'
                    ])
                    
                    @include('components.ewallet1', [
                    'source' => asset('img/linkkk.png'),
                    'alt' => 'Image 5'
                    ])
                </div>
            </div>
        </div>
    </div>
</div>


<div class="relative w-full min-h-screen">
    <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative w-full h-full bg-gradient-to-br from-[#ffea2d] to-[#ff6200] opacity-40"></div>
    </div>

    <div class="text-black text-2xl sm:text-4xl font-bold text-center pt-10 mt-20 px-16 sm:px-6">
        <p>Why should you top up your e-Wallet using Flip?</p>
    </div>

    <div class="w-full px-16 sm:px-6 lg:px-8 mx-auto mt-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="group relative">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-3xl bg-white group-hover:opacity-75">
                        <img src="https://storage.googleapis.com/strapi-staging/media-library/il_Transaksi_ke_Banyak_ewallet_1896cae268/il_Transaksi_ke_Banyak_ewallet_1896cae268.svg" alt="Multiple e-Wallet" class="h-full w-full object-cover">
                    </div>
                    <h3 class="mt-3 text-lg font-bold mb-2">
                        <a href="#" class="text-black-500">One Transaction to Multiple e-Wallet</a>
                    </h3>
                    <p class="text-base text-gray-500 mb-5">Top up to multiple e-Wallets with just one transaction.</p>
                </div>

                <div class="group relative">
                    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-3xl bg-white group-hover:opacity-75">
                        <img src="https://storage.googleapis.com/strapi-staging/media-library/il_bebas_biaya_ede1d9364e/il_bebas_biaya_ede1d9364e.svg" alt="Cost Efficient" class="h-full w-full object-cover object-center">
                    </div>
                    <h3 class="mt-3 text-lg font-bold mb-2">
                        <a href="#" class="text-black-500">More Cost-Efficient</a>
                    </h3>
                    <p class="text-base text-gray-500 mb-5">Top up your favorite e-Wallet with more efficient costs.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('base.footer')
@endsection
