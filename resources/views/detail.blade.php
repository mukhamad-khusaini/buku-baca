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
    <div class="grid grid-cols-5 gap-5 || bg-gray-800 p-4">
        <div class="w-full || relative || col-span-2">
            <div
                class="w-28 h aspect-[11/16] || absolute -bottom-1/3 left-1/2 -translate-x-1/2 || rounded-md || bg-redMain">
            </div>
        </div>
        <div class="flex flex-col items-start || relative || col-span-3">
            <h2 class="text-white text-lg font-bold || mt-7">Something +Matter</h2>
            <p class="text-gray-400">By Nyoman Ikure</p>
            <div class="flex justify-center items-center my-2">
                <span class="text-yellow-400">
                    @for ($i = 0; $i < 5; $i++)
                        ★
                    @endfor
                </span>
                <span class="text-white ml-2">5.0</span>
            </div>
            <p class="text-white text-xl font-semibold || mb-7">Rp 34.000</p>
            <button class="absolute -bottom-9 || bg-redMain text-white py-2 px-4 rounded-full">Beli
                Sekarang</button>
            <button class="absolute -bottom-10 right-2 || bg-redMain text-white p-3 rounded-full mt-4" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5H19m-2 8a2 2 0 100 4 2 2 0 000-4zm-8 0a2 2 0 100 4 2 2 0 000-4z" />
                </svg>
            </button>
        </div>
    </div>
</body>

</html>
