<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/default.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BukuBaca') }} - Checkout</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col">
    <section class="bg-gray-100 flex flex-col items-center">
        <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-md mb-4">
            <div class="flex items-center justify-start gap-9 || mb-4">
                <a href="/cart" class="text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </a>
                <h2 class="text-2xl font-semibold">Checkout</h2>
            </div>
            <div class="space-y-4">
                @for ($i = 0; $i < 4; $i++)
                    <div class="flex justify-between items-center gap-6 || bg-gray-200 p-4 rounded-lg">
                        <div class="flex items-center space-x-4">
                            <div class="flex-none w-12 aspect-[9/13] bg-redMain rounded-lg"></div>
                            <div>
                                <h3 class="text-md font-semibold">Wraith of Nation on a Pierce Down Town</h3>
                                <p class="text-sm text-gray-600">Bestseller | Romance | Public</p>
                            </div>
                        </div>
                        <span class="text-sm text-center font-semibold">Rp 134.000</span>
                    </div>
                @endfor
            </div>
            <div class="mt-6">
                <label for="coupon" class="block text-sm font-medium text-gray-700">Klaim Kupon Diskon</label>
                <div class="flex mt-1">
                    <input type="text" id="coupon"
                        class="flex-1 block w-full rounded-l-md border-gray-300 focus:border-redMain focus:ring-redMain sm:text-sm"
                        placeholder="Masukkan kode diskon">
                    <button class="bg-redMain text-white px-4 py-2 rounded-r-md">Klaim</button>
                </div>
            </div>
            <div class="mt-6 bg-gray-100 p-4 rounded-lg">
                <h3 class="text-lg font-semibold mb-2">Checkout</h3>
                <div class="flex justify-between text-sm">
                    <span>Subtotal Keranjang belanja:</span>
                    <span>Rp 136.000</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span>Diskon kupon:</span>
                    <span>Rp 0</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span>Pajak (2%):</span>
                    <span>Rp 2.720</span>
                </div>
                <div class="flex justify-between text-lg font-semibold mt-2">
                    <span>Total belanja:</span>
                    <span>Rp 138.720</span>
                </div>
            </div>
            <button class="mt-6 w-full bg-redMain text-white py-2 rounded-lg">Bayar Sekarang</button>
        </div>
    </section>
    <x-bottom class="mt-auto" />
</body>

</html>
