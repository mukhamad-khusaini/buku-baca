@props(['price', 'title', 'author'])

<div
    class="card-container || relative flex flex-col items-center bg-red-500 p-4 rounded-lg shadow-md w-[45%] sm:w-[45%] m-2">
    <div class="price-tag || absolute top-0 left-0 bg-white text-black p-2 rounded-br-lg">
        Rp {{ $price }}
    </div>
    <div class="image-placeholder || bg-red-500 w-full h-32 mb-4 rounded-lg overflow-hidden">
        <img class="inline-block object-cover object-center" src="/img/profile.jpeg" alt="book">
    </div>
    <div class="book-title || text-lg font-semibold mb-1 text-white">{{ $title }}</div>
    <div class="author-name || text-sm text-gray-200 mb-2">{{ $author }}</div>
    <div class="rating || flex">
        <span class="star || text-yellow-500">★</span>
        <span class="star || text-yellow-500">★</span>
        <span class="star || text-yellow-500">★</span>
        <span class="star || text-yellow-500">★</span>
        <span class="star || text-yellow-500">★</span>
    </div>
</div>
