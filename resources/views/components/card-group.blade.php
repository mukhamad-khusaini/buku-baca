@props(['title'])

<section {{ $attributes->merge() }}>
    <div>
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-redMain font-bold">{{ $title }}</h2>
            <a href="#" class="text-greyMain">View all</a>
        </div>
        <div class="overflow-scroll scrollbar-hide">
            <div class="w-auto flex space-x-4 overflow-x-auto scrollbar-hide">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>
