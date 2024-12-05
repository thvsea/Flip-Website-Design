<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <style>
        .hidden-checkbox {
            display: none;
        }

        .hidden-checkbox:checked ~ .dropdown-content {
            display: block;
        }

        .dropdown-content {
            display: none;
        }

        .mobile-dropdown-content {
            display: none;
        }

        .mobile-dropdown-content.show {
            display: flex;
        }

        html.dark body {
            background-color: #1a1a1a; 
            color: #ffffff; 
        }

        html.dark .bg-white {
            background-color: gray; 
        }

        html.dark .text-gray-900{
            color: #ffffff; 
        }

        html.dark .text-gray-700{
            color: #ffffff; 
        }

        html.dark .bg-orange-200{
            background-color: gray; 
        }

        html.dark .text-black{
            color: #ffffff; 
        }

        html.dark .text-gray-500{
            color: #ffffff; 
        }

        html.dark .bg-gray-100{
            background-color: lightgray;
        }

        html.dark .dropdown-content {
            background-color: #333; 
        }

        html.dark .mobile-dropdown-content {
            background-color: #333; 
        }

        html.light body {
            background-color: #ffffff; 
            color: #333; 
        }

        html.light .bg-white {
            background-color: #ffffff;
        }

        html.light .text-gray-900 {
            color: #333;
        }

        body {
          transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
      duration: 1200,
      offset: 200,
      easing: 'ease-in-out',
      once: true,
      mirror: true
    });

    const mobileMenuButton = document.querySelector('[data-mobile-menu-button]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    const closeMenuButton = document.querySelector('[data-close-menu-button]');

    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    closeMenuButton.addEventListener('click', () => {
      mobileMenu.classList.add('hidden');
    });

    const mobileDropdownButton = document.querySelector('#mobileDropdownToggle');
    const mobileDropdownMenu = document.querySelector('#mobileDropdownMenu');

    mobileDropdownButton.addEventListener('click', () => {
      mobileDropdownMenu.classList.toggle('show');
    });

    const themeToggleBtn = document.getElementById('theme-toggle');
    const moonIcon = document.querySelector('#moon-icon');
    const sunIcon = document.querySelector('#sun-icon');

    const currentTheme = localStorage.getItem('theme') || 'light';
    if (currentTheme === 'dark') {
      document.documentElement.classList.add('dark');
      document.documentElement.classList.remove('light');
      moonIcon.classList.remove('hidden');
      sunIcon.classList.add('hidden');
    } else {
      document.documentElement.classList.add('light');
      document.documentElement.classList.remove('dark');
      moonIcon.classList.add('hidden');
      sunIcon.classList.remove('hidden');
    }

    themeToggleBtn.addEventListener('click', function() {
      if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark');
        document.documentElement.classList.add('light');
        moonIcon.classList.add('hidden');
        sunIcon.classList.remove('hidden');
        localStorage.setItem('theme', 'light');
      } else {
        document.documentElement.classList.remove('light');
        document.documentElement.classList.add('dark');
        moonIcon.classList.remove('hidden');
        sunIcon.classList.add('hidden');
        localStorage.setItem('theme', 'dark');
      }
    });
  });
  
</script>

<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-12 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Logo_flip.png" alt="">
      </a>
    </div>
    <div class="flex lg:hidden items-center justify-end space-x-4">
      <button type="button" data-mobile-menu-button class="inline-flex items-center justify-center p-2.5 text-gray-700 space-x-60">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>

    <div class="hidden lg:flex lg:gap-x-12">
      <a href="{{ route('home') }}" class="text-sm font-semibold leading-6 text-gray-900 mr-20">Home</a>

      <div class="relative dropdown">
        <div class="mr-20 ml-9 relative inline-block text-left">
          <input type="checkbox" id="dropdownToggle" class="hidden-checkbox">
          <label for="dropdownToggle" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900 cursor-pointer">
            Product
            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </label>

          <div class="absolute left-0 top-full z-10 mt-3 w-64 max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5 dropdown-content">
            <div class="p-4">
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-900">
                <div class="flex-auto">
                  <a href="{{ route('sendmoney') }}" class="block font-semibold text-gray-900">Send Money</a>
                </div>
              </div>
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-900">
                <div class="flex-auto">
                  <a href="{{ route('ewallet') }}" class="block font-semibold text-gray-900">E-Wallet</a>
                </div>
              </div>
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-900">
                <div class="flex-auto">
                  <a href="{{ route('digitalproducts') }}" class="block font-semibold text-gray-900">Digital Products</a>
                </div>
              </div>
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-900">
                <div class="flex-auto">
                  <a href="{{ route('flipglobe') }}" class="block font-semibold text-gray-900">Flip Globe</a>
                </div>
              </div>
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-900">
                <div class="flex-auto">
                  <a href="{{ route('flipbusiness') }}" class="block font-semibold text-gray-900">Flip for Business</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <a href="{{ route('contactus') }}" class="text-sm font-semibold leading-6 text-gray-900 mr-20">Contact Us</a>
    </div>

        <button id="theme-toggle" type="button" class="text-gray-800 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none rounded-lg text-sm p-2.5">
      <svg id="sun-icon" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 6.166a.75.75 0 0 0-1.06-1.06l-1.591 1.59a.75.75 0 1 0 1.06 1.061l1.591-1.59ZM21.75 12a.75.75 0 0 1-.75.75h-2.25a.75.75 0 0 1 0-1.5H21a.75.75 0 0 1 .75.75ZM17.834 18.894a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 1 0-1.061 1.06l1.59 1.591ZM12 18a.75.75 0 0 1 .75.75V21a.75.75 0 0 1-1.5 0v-2.25A.75.75 0 0 1 12 18ZM7.758 17.303a.75.75 0 0 0-1.061-1.06l-1.591 1.59a.75.75 0 0 0 1.06 1.061l1.591-1.59ZM6 12a.75.75 0 0 1-.75.75H3a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 6 12ZM6.697 7.757a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 0 0-1.061 1.06l1.59 1.591Z"/>
      </svg>
      <svg id="moon-icon" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z" clip-rule="evenodd"/>
      </svg>
    </button>
  
  <div data-mobile-menu class="fixed inset-x-0 top-0 z-50 bg-white p-6 lg:hidden hidden">
    <div class="flex justify-end">
      <button type="button" data-close-menu-button class="text-gray-700">
        <span class="sr-only">Close menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <div class="flex flex-col space-y-4 mt-4">
      <a href="{{ route('home') }}" class="text-sm font-semibold leading-6 text-gray-900">Home</a>

      <div class="relative">
        <button id="mobileDropdownToggle" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900 w-full">
          Product
          <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>

        <div id="mobileDropdownMenu" class="mobile-dropdown-content flex-col space-y-4 mt-2">
          <a href="{{ route('sendmoney') }}" class="block text-gray-900">Send Money</a>
          <a href="{{ route('ewallet') }}" class="block text-gray-900">E-Wallet</a>
          <a href="{{ route('digitalproducts') }}" class="block text-gray-900">Digital Products</a>
          <a href="{{ route('flipglobe') }}" class="block text-gray-900">Flip Globe</a>
          <a href="{{ route('flipbusiness') }}" class="block text-gray-900">Flip for Business</a>
        </div>
      </div>

      <a href="{{ route('contactus') }}" class="text-sm font-semibold leading-6 text-gray-900">Contact Us</a>
    </div>
  </div>
</header>

@yield('content')
</body>
</html>
