<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BukuBaca') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen flex flex-col">
    <div class="bg-redMain p-12 rounded-t-lg">
        <div class="flex justify-center items-center">
            <div class="relative">
                <div class="w-24 h-24 bg-yellow-400 rounded-full flex items-center justify-center || overflow-hidden">
                    <img src="/img/profile.jpeg" alt="Profile Icon" class="object-cover">
                </div>
                <div class="absolute bottom-0 right-0 bg-white p-1 rounded-full">
                    <img src="/img/edit-pen.png" alt="Edit Icon" class="w-4 h-4">
                </div>
            </div>
        </div>
        <h2 class="text-white text-center text-2xl font-semibold mt-4">Patric Peterson</h2>
    </div>
    <div
        class="w-[20rem] || bg-white p-6 rounded-b-lg shadow-lg || rounded-2xl || absolute top-52 left-1/2 transform -translate-x-1/2">
        <ul class="space-y-5">
            <li class="flex items-center justify-between py-2 border-b">
                <div class="flex items-center">
                    <img src="/img/edit-pen.png" alt="Edit Profile Icon" class="w-6 h-6 mr-2">
                    <span>Edit Nama Profil</span>
                </div>
                <img src="/img/arrow-right.png" alt="Arrow Icon" class="w-4">
            </li>
            <li class="flex items-center justify-between py-2 border-b">
                <div class="flex items-center">
                    <img src="/img/order.png" alt="Book Purchased Icon" class="w-6 h-6 mr-2">
                    <span>Buku di Beli</span>
                </div>
                <img src="/img/arrow-right.png" alt="Arrow Icon" class="w-4">
            </li>
            <li class="flex items-center justify-between py-2 border-b">
                <div class="flex items-center">
                    <img src="/img/cart-grey.png" alt="Cart Icon" class="w-6 h-6 mr-2">
                    <span>Buku di Keranjang</span>
                </div>
                <img src="/img/arrow-right.png" alt="Arrow Icon" class="w-4">
            </li>
            <li class="flex items-center justify-between py-2 border-b">
                <div class="flex items-center">
                    <img src="/img/password-icon.png" alt="Change Password Icon" class="w-6 h-6 mr-2">
                    <span>Ubah Kata Sandi</span>
                </div>
                <img src="/img/arrow-right.png" alt="Arrow Icon" class="w-4">
            </li>
            <li class="flex items-center justify-between py-2">
                <div class="flex items-center">
                    <img src="/img/logout.png" alt="Logout Icon" class="w-6 h-6 mr-2">
                    <span class="text-redMain">Keluar</span>
                </div>
                <img src="/img/arrow-right.png" alt="Arrow Icon" class="w-4">
            </li>
        </ul>
    </div>
    <x-bottom class="mt-auto" />
</body>

</html>
