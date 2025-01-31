<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/default.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BukuBaca') }} - Detail</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="grid grid-cols-2 || bg-gray-800 p-4 rounded-lg text-center">
        <div class="w-[80%] h-full bg-redMain"></div>
        <div class="flex flex-col items-start">
            <div class="bg-red-400 h-40 w-24 mx-auto mb-4"></div>
            <h2 class="text-white text-lg font-bold">Something Matter</h2>
            <p class="text-gray-400">By Nyoman Ikure</p>
            <div class="flex justify-center items-center my-2">
                <span class="text-yellow-500">
                    @for ($i = 0; $i < 5; $i++)
                        ★
                    @endfor
                </span>
                <span class="text-white ml-2">5.0</span>
            </div>
            <p class="text-white text-xl font-semibold">Rp 34.000</p>
            <button class="bg-red-500 text-white py-2 px-4 rounded-full mt-4">Beli Sekarang</button>
            {{-- <button class="bg-red-500 text-white p-3 rounded-full mt-4" type="button">
                shop now
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5H19m-2 8a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z" />
                </svg>
            </button> --}}
        </div>
    </div>
</body>

</html>
