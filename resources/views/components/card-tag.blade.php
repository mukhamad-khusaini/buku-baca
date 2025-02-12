@props(['label', 'icon'])

<div class="flex flex-col items-center">
    <div class="w-20 aspect-square bg-redMain rounded-lg || overflow-hidden">
        <img src="{{ $icon }}" alt="icon" class="object-cover">
    </div>
    <p class="mt-2 text-center text-greyMain">{{ $label }}</p>
</div>
