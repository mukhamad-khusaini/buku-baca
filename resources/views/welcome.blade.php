<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/default.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BukuBaca') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-top />
    <main class="px-6">
        <section>
            <form action="/" class="flex flex-row justify-between">
                <input
                    class="w-[75%] || inline-block || italic placeholder:text-redMain placeholder:opacity-50 || outline-none border-none rounded-md || bg-greyLight"
                    type="text" name="search" id="search" placeholder="Temukan inspirasimu disini!">
                <button class="w-[20%] || flex justify-center items-center || rounded-md || bg-greyLight">
                    <img class="w-4 || inline-block " src="/img/search-icon.png" alt="search">
                </button>
            </form>
        </section>
        <x-card-group class="mt-7" title="Terbaik untukmu!">
            @foreach ($books as $book)
                <div class="flex-none w-28 aspect-[88/128] bg-redMain rounded-lg"></div>
            @endforeach
        </x-card-group>
        <x-card-group class="mt-16" title="Ambil dari genre">
            @foreach ($categories as $category)
                <x-card-tag label="{{ $category->name }}" />
            @endforeach
        </x-card-group>
        <section class="grid grid-cols-2 gap-4 justify-center items-stretch || mt-7">
            @foreach ($books as $book)
                <x-card-book price="{{ $book->price }}" title="{{ $book->title }}" author="{{ $book->author }}" />
            @endforeach
        </section>
    </main>
    <x-bottom />
</body>

</html>
