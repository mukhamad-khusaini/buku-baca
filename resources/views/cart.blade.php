<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/default.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BukuBaca') }} - Your Cart</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen || flex flex-col">
    <section class="p-4" onchange="allItems()">
        <div class="flex items-center justify-between mb-4">
            <a href="#" class="text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </a>
            <h1 class="text-xl font-semibold">Keranjang Belanja</h1>
            <div class="flex items-center">
                <input onchange="allItemChecked()" type="checkbox" id="select-all"
                    class="form-checkbox h-5 w-5 text-redMain || rounded-md">
                <label for="select-all" class="ml-2 text-sm text-gray-600">Pilih Semua</label>
            </div>
        </div>
        <div class="space-y-4">
            @for ($i = 0; $i < 4; $i++)
                <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
                    <div class="flex items-center">
                        <div class="w-16 h-20 bg-redMain || rounded-md"></div>
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold text-redMain">Wraith of Nations</h2>
                            <p class="text-sm text-gray-600">Education | Economic | Politic</p>
                            <p class="text-lg font-semibold">Rp 34.000</p>
                        </div>
                    </div>
                    <input onchange="((e)=>disableAllChecked(e))(this)" type="checkbox"
                        class="bookItem || form-checkbox h-5 w-5 text-redMain || rounded-md">
                </div>
            @endfor
        </div>
    </section>

    <div class="bg-gray-300 p-4 rounded-lg || mt-auto">
        <div class="flex justify-between items-center mb-2">
            <span class="text-gray-700 font-semibold">Jumlah Item</span>
            <span id="bookQty" class="text-gray-700 font-semibold">0</span>
        </div>
        <div class="flex justify-between items-center mb-4">
            <span class="text-gray-700 font-semibold">Total</span>
            <span class="text-gray-700 font-semibold">Rp 136.000</span>
        </div>
        <button class="bg-redMain text-white py-2 px-4 rounded-lg w-full">Checkout</button>
    </div>
    <x-bottom class="mt-0" />


    <script>
        function allItemChecked() {
            const selectAll = document.getElementById("select-all");
            const bookItem = document.querySelectorAll(".bookItem");
            if (selectAll.checked) {
                bookItem.forEach(i => {
                    i.checked = true
                });
            } else {
                bookItem.forEach(i => {
                    i.checked = false
                });
            }
        }

        function disableAllChecked(e) {
            const selectAll = document.getElementById("select-all");
            if (!e.checked) {
                selectAll.checked = false;
            }
        }

        function allItems() {
            let qty = 0;
            const bookItem = document.querySelectorAll(".bookItem");
            const bookQty = document.getElementById("bookQty");
            bookItem.forEach(i => {
                if (i.checked) {
                    qty++;
                }
            })

            bookQty.innerText = qty
        }
    </script>
</body>

</html>
