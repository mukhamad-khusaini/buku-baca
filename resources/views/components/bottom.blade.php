<footer
    {{ $attributes->merge(['class' => 'flex flex-col gap-6 justify-start items-center || bg-greyLight bg-opacity-[60%] || mt-6 pt-6']) }}>
    <div>
        <img class="w-[12rem]" src="/img/bukubaca-logo.png" alt="BukuBaca">
    </div>
    <div class="flex flex-col gap-1 justify-center items-center">
        <a class="inline-block text-greyMain text-sm" href="#">Shopping Cart</a>
        <a class="inline-block text-greyMain text-sm" href="/catalog">Catalog</a>
        <a class="inline-block text-greyMain text-sm" href="#">Profile Account</a>
    </div>
    <div class="w-full bg-redMain py-1">
        <p class="text-white text-center text-sm font-ibm">&copy; Copyright 2025 by BukuBaca</p>
    </div>
</footer>
