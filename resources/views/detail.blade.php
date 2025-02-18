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
    <section class="grid grid-cols-5 gap-5 || bg-gray-800 p-4">
        <div class="w-full || relative || col-span-2">
            <div
                class="w-28 h aspect-[11/16] || overflow-hidden || absolute -bottom-1/3 left-1/2 -translate-x-1/2 || rounded-md || bg-redMain">
                <img class="h-full || object-cover" src="/{{ $book->image_url }}" alt="cover">
            </div>
        </div>
        <div class="flex flex-col items-start || relative || col-span-3">
            <h2 class="text-white text-lg font-bold || mt-7">{{ $book->title }}</h2>
            <p class="text-gray-400">By {{ $book->author }}</p>
            <div class="flex justify-center items-center my-2">
                <span class="text-yellow-400">
                    @for ($i = 0; $i < 5; $i++)
                        @if ($i < $book->avarageStar())
                            <span class="text-yellow-400">★</span>
                        @else
                            <span class="text-greyLight">★</span>
                        @endif
                    @endfor
                </span>
                <span class="text-white ml-2">{{ $book->avarageStar() }}</span>
            </div>
            <p class="text-white text-xl font-semibold || mb-7">Rp {{ $book->price }}</p>
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
    </section>
    <section class="mt-20 px-6 || flex flex-col items-start gap-2">
        <h2 class="font-ibm text-xl text-redMain font-bold">Sinopsis</h2>
        <p class="font-ibm text-sm text-greyMain font-bold">
            @for ($i = 0; $i < count($book->categories); $i++)
                @if ($i == count($book->categories) - 1)
                    {{ $book->categories[$i]->name }}
                @else
                    {{ $book->categories[$i]->name }} |
                @endif
            @endfor
        </p>
        <p class="font-ibm text-sm text-greyMain">{{ $book->description }}</p>
    </section>
    <section class="mt-10 px-6">
        <x-card-group title="Buku Sejenis">
            @foreach ($otherBooks as $book)
                <div class="flex-none w-28 aspect-[88/128] bg-redMain rounded-lg || overflow-hidden">
                    <img class="h-full || object-cover" src="/{{ $book->image_url }}" alt="cover">
                </div>
            @endforeach
        </x-card-group>
    </section>
    <section class="px-6 mt-10">
        <div class="flex flex-col justify-center items-center gap-2">
            <h2 class="text-xl text-greyMain font-ibm">Penilaian Anda</h2>
            <div class="w-auto || flex justify-center items-center || border-2 border-greyLight rounded-full px-4 py-0">
                <p id="sss" class="text-4xl text-greyLight">
                    @for ($i = 0; $i < 5; $i++)
                        <span id="userRating-{{ $i }}">
                            ★
                        </span>
                    @endfor
                </p>
            </div>
        </div>
        <div class="mt-10">
            <h2 class="text-lg text-redMain font-ibm font-bold">Ratings</h2>
            <div class="p-4 bg-white rounded-lg shadow-md || flex flex-col space-y-4">
                @foreach ($book->ratings as $sing)
                    <x-single-rating user="{{ $sing->user->name }}" date="{{ $sing->created_at }}"
                        value="{{ $sing->value }}" />
                @endforeach
            </div>
        </div>
    </section>
    <x-bottom class="mt-10" />

    <script>
        let ratUnit = [];
        for (let i = 0; i < 5; i++) {
            ratUnit.push(document.querySelector(`#userRating-${i}`));
        }


        for (let i = 0; i < ratUnit.length; i++) {
            ratUnit[i].addEventListener("mouseover", () => {
                for (let x = 0; x <= i; x++) {
                    ratUnit[x].style.color = "yellow";
                }
                for (let x = 4; x > i; x--) {
                    ratUnit[x].style.color = "";
                }
            });
        }
    </script>
</body>

</html>
