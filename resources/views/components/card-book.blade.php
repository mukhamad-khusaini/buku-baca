@props(['price', 'title', 'author'])

<div class="w-full p-4 rounded-md bg-redMain bg-opacity-[12%]">
    <div class="w-full h-44 p-2 || flex flex-col justify-end items-center || rounded-md || bg-redMain">
        <h4 class="p-1 || rounded-md || text-white bg-black bg-opacity-5">Rp {{ $price }}</h4>
    </div>
    <h4 class="font-bold text-greyMain font-ibm my-3 ">{{ $title }}</h4>
    <p class="text-sm text-redMain || mt-auto">{{ $author }}</p>
    <div class="rating || flex">
        <span class="star || text-yellow-500">★</span>
        <span class="star || text-yellow-500">★</span>
        <span class="star || text-yellow-500">★</span>
        <span class="star || text-yellow-500">★</span>
        <span class="star || text-yellow-500">★</span>
    </div>
</div>
