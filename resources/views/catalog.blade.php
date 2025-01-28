<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/default.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BukuBaca') }} - Catalog</title>

    <style>
        .clip-path-triangle {
            clip-path: polygon(0 0, 100% 0, 0 100%);
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-top />
    <section class="px-6">
        <x-card-group class="mt-7" title="Lagi Diskon!">
            @for ($i = 0; $i < 5; $i++)
                <div class="flex-none relative w-28 aspect-[88/128] bg-redMain rounded-lg overflow-hidden">
                    <div class="absolute top-0 left-0 w-1/2 h-1/2 bg-yellow-400 clip-path-triangle p-2">
                        <span class="text-black font-bold text-sm">23%</span>
                    </div>
                </div>
            @endfor
        </x-card-group>
        <x-card-group class="mt-14" title="Sedang Trending">
            @for ($i = 0; $i < 5; $i++)
                <div class="flex-none w-28 aspect-[88/128] bg-redMain rounded-lg"></div>
            @endfor
        </x-card-group>
        <x-card-group class="mt-14" title="Kisah Menarik">
            @for ($i = 0; $i < 5; $i++)
                <div class="flex-none w-28 aspect-[88/128] bg-redMain rounded-lg"></div>
            @endfor
        </x-card-group>
    </section>
    <x-bottom class="mt-14" />
</body>

</html>
