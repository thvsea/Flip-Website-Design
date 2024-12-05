<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="pl-[30px] sm:pl-[120px] pt-3 flex whitespace-nowrap h-[7vh] bg-orange-500 bg-opacity-40">
    <div class="flex items-center">
        <a href="{{ route('home') }}" class="mb-2 text-sm font-semibold leading-6 text-gray-900 mr-2">Home</a>
        <p class="mb-2 text-sm font-semibold leading-6 text-gray-900 mr-2"> > @yield('title')</p>
    </div>
    </div>
</body>
</html>