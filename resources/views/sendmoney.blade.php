@section('title', 'Send Money | Flip')
@extends('base.header')
@section('content')

@include('base.headproducts')

<div class="relative w-full h-[90vh] sm:h-[120vh] md:h-[110vh] lg:h-[90vh]">
    <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative w-full h-full bg-gradient-to-br from-[#ff7f00] to-[#ffbb00] opacity-30"></div>
    </div>

    <div data-aos="fade-up" class="container mx-auto px-4 py-10 flex flex-col lg:flex-row justify-between items-start">
        <div class="mt-20 ml-16 lg:w-1/2">
            <h1 class="mt-20 mb-5 text-6xl font-bold text-black">Send Money</h1>
            <p class="mt-2 text-orange-500">Send money to more than 100 banks in</p>
            <p class="mt-2 text-orange-500">Indonesia without admin fee.</p>

            <div class="mt-6 flex space-x-4 sm:mb-0 mb-5">
                <button class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow">App Store</button>
                <button class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow">Play Store</button>
            </div>
        </div>

        <div class="mt-20 lg:w-1/2 pl-[24px] sm:pl-0 pt-52 sm:pt-0 flex flex-col items-center lg:items-end">
            <h2 class="text-4xl font-bold text-orange-500">Start using Flip</h2>
            <p class="text-lg text-black mt-2">#MoreThanThat</p>

            <div class="mt-8 flex space-x-6">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <p class="text-4xl font-bold">5.0</p>
                    <p class="text-lg">App Store</p>
                    <div class="flex mt-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/541/541415.png" alt="star" class="h-6">
                        <img src="https://cdn-icons-png.flaticon.com/512/541/541415.png" alt="star" class="h-6">
                        <img src="https://cdn-icons-png.flaticon.com/512/541/541415.png" alt="star" class="h-6">
                        <img src="https://cdn-icons-png.flaticon.com/512/541/541415.png" alt="star" class="h-6">
                        <img src="https://cdn-icons-png.flaticon.com/512/541/541415.png" alt="star" class="h-6">
                    </div>
                    <button class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-lg shadow">App Store</button>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6">
                    <p class="text-4xl font-bold">5.0</p>
                    <p class="text-lg">Play Store</p>
                    <div class="flex mt-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/541/541415.png" alt="star" class="h-6">
                        <img src="https://cdn-icons-png.flaticon.com/512/541/541415.png" alt="star" class="h-6">
                        <img src="https://cdn-icons-png.flaticon.com/512/541/541415.png" alt="star" class="h-6">
                        <img src="https://cdn-icons-png.flaticon.com/512/541/541415.png" alt="star" class="h-6">
                        <img src="https://cdn-icons-png.flaticon.com/512/541/541415.png" alt="star" class="h-6">
                    </div>
                    <button class="mt-4 bg-orange-500 text-white px-4 py-2 rounded-lg shadow">Play Store</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative w-full sm:mt-0 mt-32 h-[800px] sm:h-[120vh] md:h-[110vh] lg:h-[90vh]">
    <div class="absolute inset-x-0 top-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative left-1/2 aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff9c38] to-[#ff6666] opacity-30 sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>

    <div class="container pt-64 sm:pt-10 mx-auto px-4">
        <div class="flex flex-col lg:flex-row justify-center items-center bg-orange-200 p-6 rounded-lg shadow-lg">
            <div class="w-full lg:w-1/2 mb-6 lg:mb-0">
                <h2 class="text-xl lg:text-2xl font-bold mb-4 text-left">How to Send Money via Flip</h2>
                <p class="text-gray-700 mb-4 text-left">
                    Have you downloaded the Flip application and want to start a transaction?
                    Watch the video below for the tutorial.
                </p>
                <p class="text-gray-700 text-left">
                    Are you still having trouble sending money?
                    <a href="#" class="text-blue-500 hover:underline">Click here</a> for more information.
                </p>
            </div>

            <div class="w-full lg:w-1/2">
                <div class="aspect-video">
                    <iframe class="w-full h-full rounded-lg" 
                        src="https://www.youtube.com/embed/sMdzJ4EXM8I" title="Cara Transfer Pertama Kali Pakai Flip" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@include('base.footer')
@endsection
