@section('title','Flip Globe | Flip')
@extends('base.header')
@section('content')

@include('base.headproducts')

<div class="relative w-full h-screen">
    <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
        <div class="relative w-full h-full bg-gradient-to-br from-[#ff7f00] to-[#ffbb00] opacity-30">
        </div>
</div>
    <div class="container mx-auto px-4 py-10 flex flex-col lg:flex-row justify-between items-start">
    
        <div class="mt-40 sm:ml-20 ml-10 sm:mr-0 mr-4 lg:w-1/2">
            <h1 class="mt-2 mb-5 text-6xl font-bold text-black">Flip Globe</h1>
            <p class="mt-2 text-gray-700">Need to send money overseas? With Flip Globe,</p>
            <p class="mt-2 text-gray-700">international transfers can be done more efficiently, </p>
            <p class="mt-2 text-gray-700">securely, and with lower fee.</p>


            <div class="mt-6 flex space-x-4">
                <button class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow">App Store</button>
                <button class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow">Play Store</button>
            </div>

            <div class="flex mt-5 text-sm">
                <p>Safe and licensed from Bank Indonesia</p>
                <img class="-ml-60 mt-10 sm:mt-0 sm:ml-5 w-20 sm:mb-0 mb-12" src="https://flip.id/assets/images/bank-indonesia.png" alt="bank-indo">
            </div> 
        </div>


        <div class="lg:w-1/2 mt-10 lg:mt-0 bg-white shadow rounded-lg p-8">
            <form>
                <div class="relative mt-2">
                    <select class="block appearance-none w-full bg-gray-100 border border-gray-300 rounded-lg py-3 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="MYR">Malaysia (MYR)</option>
                        <option value="IDR">Indonesia (IDR)</option>
                        <option value="SGD">Singapore (SGD)</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/></svg>
                    </div>
                </div>

                <label class="block mt-6 text-gray-700 font-semibold">Fill Amount of Money to Send</label>
                <div class="flex flex-col mt-2 space-y-4">
    <div class="relative w-full">
        <input type="text" placeholder="Input amount in IDR" class="block w-full bg-gray-100 border border-gray-300 rounded-lg py-3 px-4 focus:outline-none focus:bg-white focus:border-gray-500" />
        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                <span class="text-gray-500">IDR</span>
            </div>
        </div>
            <div class="relative w-full">
                <input type="text" placeholder="Input amount in MYR" class="block w-full bg-gray-100 border border-gray-300 rounded-lg py-3 px-4 focus:outline-none focus:bg-white focus:border-gray-500" />
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                <span class="text-gray-500">MYR</span>
            </div>
            </div>
        </div>

                <div class="mt-6 text-gray-700 flex justify-between">
                    <p>Current Rate</p>
                    <p class="font-semibold text-xl text-right">1 MYR = 3,576.83 IDR</p>
                </div>

                <div class="mt-4 p-4 bg-gray-100 rounded-lg text-gray-600">
                    <p>+ Transfer fee via Flip: <span class="font-semibold">0 IDR</span></p>
                </div>

                <p class="mt-6 text-sm text-gray-500">
                    All send money transactions to Malaysia will be processed in <span class="font-semibold">real time</span>.
                </p>

                <div class="mt-4 bg-gray-100 p-4 rounded-lg text-sm text-gray-600">
                    <p>
                        <i class="fas fa-info-circle"></i> The displayed exchange rate is exchange rate at <span class="font-semibold">21:53 UTC+7</span>.
                        Exchange rate may change at any time.
                    </p>
                </div>

                <div class="mt-6 sm:text-lg text-sm font-semibold text-gray-700 flex items-center justify-between">
                    <p>Total You Have to Pay: <span class="sm:text-xl text-sm">0 IDR</span></p>

                    <button class="bg-gray-400 text-white py-3 px-6 rounded-lg hover:bg-gray-500" disabled>Continue</button>
                </div>
            </form>
        </div>
    </div>


@include('base.footer')
@endsection