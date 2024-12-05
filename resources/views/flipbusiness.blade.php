@section('title','Flip Busines | Flip')
@extends('base.header')
@section('content')

@include('base.headproducts')

<div class="relative w-full sm:h-screen h-[70vh]">
    <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative w-full h-full bg-gradient-to-br from-[#ff7f00] to-[#ffbb00] opacity-30"></div>
    </div>

    <div class="container mx-auto px-4 py-10 flex flex-col lg:flex-row justify-between items-start">
        <div class="mt-20 lg:mt-40 ml-16 sm:mr-0 lg:ml-20 sm:ml-0 lg:w-1/2">
            <h1 class="mt-2 text-black text-5xl font-bold mr-6">All-in-one solution</h1>
            <h1 class=" text-black text-5xl font-bold">for your business</h1>
            <h1 class=" mb-5 text-black text-5xl font-bold">transaction needs</h1>
            <p class="mt-2 text-gray-700 mr-20">Manage your business transactions fast, easy, and secured in Flip for Business.</p>
            <p class=" text-gray-700 mr-20">Access via web dashboard or API at your convenient.</p>

            <div class="mt-6 flex space-x-4">
                <button class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow">Register</button>
                <a href="{{ route('flipbusiness') }}" class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow">Contact Us</a>
            </div>

            <img data-aos="fade-up" src="{{ asset('img/orang.webp') }}" alt="Person" class="absolute hidden lg:block lg:-mt-[500px] left-[600px] w-7/12">
        </div>
    </div>
</div>

<div class="relative isolate px-6 lg:px-8 py-10 h-auto lg:h-screen">
    <div class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative left-1/2 aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff9c38] to-[#ff6666] opacity-30 sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="container mx-auto py-10">
        <h2 data-aos="fade-up" class="text-center text-gray-700 text-lg font-semibold mb-8">
            Flip for Business dipercaya oleh 800+ perusahaan dan pelaku usaha
        </h2>
        <div data-aos="fade-up" class="grid grid-cols-2 md:grid-cols-4 gap-4 items-center justify-center">
            @include('components.flipbus1', [
            'source' => asset('img/tiket.png'),
            'alt' => 'tiket'
            ])

            @include('components.flipbus1', [
            'source' => asset('img/ruang.png'),
            'alt' => 'ruang'
            ])

            @include('components.flipbus1', [
            'source' => asset('img/toko.png'),
            'alt' => 'toko'
            ])

            @include('components.flipbus1', [
            'source' => asset('img/grab.png'),
            'alt' => 'grab'
            ])

            @include('components.flipbus1', [
            'source' => asset('img/kita.png'),
            'alt' => 'kita'
            ])

            @include('components.flipbus1', [
            'source' => asset('img/luar.png'),
            'alt' => 'luar'
            ])

            @include('components.flipbus1', [
            'source' => asset('img/pay.png'),
            'alt' => 'pay'
            ])

            @include('components.flipbus1', [
            'source' => asset('img/indo.png'),
            'alt' => 'indo'
            ])
        </div>
    </div>

    <div data-aos="fade-down" class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center mt-10">
            @include('components.flipbus2', [
            'source' => asset('img/jam.png'),
            'alt' => 'Icon 1',
            'desc' => 'Teknologi otomasi dan proses real time untuk setiap transaksi'
            ])

            @include('components.flipbus2', [
            'source' => asset('img/jam2.png'),
            'alt' => 'Icon 2',
            'desc' => 'Akses mudah via dashboard atau integrasi API'
            ])

            @include('components.flipbus2', [
            'source' => asset('img/jam3.png'),
            'alt' => 'Icon 3',
            'desc' => 'Verifikasi otomatis untuk cegah kesalahan transfer'
            ])

            @include('components.flipbus2', [
            'source' => asset('img/jam4.png'),
            'alt' => 'Icon 4',
            'desc' => 'Aman dan terlisensi oleh Bank Indonesia'
            ])
    </div>
</div>

@include('base.footer')
@endsection
