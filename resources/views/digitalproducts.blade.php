@section('title', 'Digital Products | Flip')
@extends('base.header')
@section('content')

@include('base.headproducts')

<div class="relative w-full min-h-screen">
    <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative w-full h-full bg-gradient-to-br from-[#c16000] to-[#ffce46] opacity-40"></div>
    </div>

    <section class="ml-16 sm:ml-48 mr-16 sm:mr-0 pt-48 h-[80vh]">
    <div class="text-black text-5xl font-bold">
        <p>Digital Products</p>
    </div>

    <div class="text-orange-500 mt-5 text-lg">
        <p>Need to buy phone credits, data packages,</p>
        <p>electricity tokens, pay electricity bills, </p>
        <p>water bills and BPJS? Now, you can buy it</p>
        <p>with lower cost on Flip!</p>
    </div>

    <div class="mt-6 flex space-x-4">
        <button class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow">App Store</button>
        <button class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow">Play Store</button>
    </div>

        <img data-aos="fade-up" src="{{ asset('img/illust.png') }}" alt="Person Illustration" class="absolute -mt-80 right-[175px] h-auto hidden lg:block">
    </section>


    <section class="ml-16 mr-16 sm:ml-32 sm:mr-32 mt-10 px-4 sm:px-6 lg:px-8 mb-5">
        <p class="text-4xl font-bold text-center mb-5">Features</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @include('components.digprod', [
                'source' => 'https://storage.googleapis.com/strapi-staging/media-library/Pulsa_4722c0e3d8/Pulsa_4722c0e3d8.svg',
                'alt' => 'Phone Credit',
                'titleprod' => 'Phone Credit',
                'desc' => 'Top up daily, weekly, or monthly phone credits from various providers.'
                ])
            
                @include('components.digprod', [
                'source' => 'https://storage.googleapis.com/strapi-staging/media-library/Paket_Data_1_98dfb4e444/Paket_Data_1_98dfb4e444.svg',
                'alt' => 'Mobile Data',
                'titleprod' => 'Mobile Data',
                'desc' => 'Enjoy internet packages at agent prices and various bonuses.'
                ])

                @include('components.digprod', [
                'source' => 'https://storage.googleapis.com/strapi-staging/media-library/Listrik_0233ced0fd/Listrik_0233ced0fd.svg',
                'alt' => 'Electricity',
                'titleprod' => 'Electricity',
                'desc' => 'Pay electricity bills easily, be it postpaid or prepaid electricity tokens.'
                ])
                
                @include('components.digprod', [
                'source' => 'https://storage.googleapis.com/flip-prod-mktg-strapi/media-library/PDAM_icon_200601a044/PDAM_icon_200601a044.svg',
                'alt' => 'Water Bill',
                'titleprod' => 'Water Bill',
                'desc' => 'Pay water bill effortlessly at the best price.'
                ])
        </div>
    </section>

    <section class="mr-16 ml-16 relative isolate px-6 lg:px-8 py-16">
        <p class="text-4xl font-bold text-center mb-5">Services</p>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @include('components.digprod2', [
            'source' => asset('img/mobile.svg'),
            'alt' => 'Mobile Phone Credit',
            'titleprod2' => 'Mobile Phone Credit',
            'desc2' => 'You can top up credit for the following providers with prices starting at IDR 1,000.',
            'srcpro' => asset('img/pro3.svg'), 
            'provider' => 'Provider 1'
            ])
            
            @include('components.digprod2', [
            'source' => asset('img/data.svg'), 
            'alt' => 'Mobile Data Packages',
            'titleprod2' => 'Mobile Phone Packages',
            'desc2' => 'We can’t live without the internet, can we? Buy your data packages at agent prices using Flip.',
            'srcpro' => asset('img/pro2.svg'),  
            'provider' => 'Provider 1'
            ])

            @include('components.digprod2', [
            'source' => asset('img/electricity.svg'),  
            'alt' => 'Pay Electricity Bill',
            'titleprod2' => 'Pay Electricity Bill',
            'desc2' => 'Prepaid or postpaid? Worry not. You can still pay using Flip for both options, with cheaper price guaranteed.',
            'srcpro' => asset('img/pro1.svg'),  
            'provider' => 'Provider 1'
            ])
        </div>
    </section>
</div>


@include('base.footer')
@endsection
