{{-- <header class="flex flex-row gap-4 || px-6 py-7">
    <div class="basis-3/4 || flex flex-col justify-center items-start gap-2">
        <div class="w-[3.438rem] aspect-square || rounded-[50%] || overflow-hidden">
            <img class="object-cover object-center" src="/img/profile.jpeg" alt="profile pic">
        </div>
        <h4 class="text-[1.5048rem] font-ibm font-[600] text-redMain">Hello Kowalski!</h4>
    </div>
    <div class="basis-1/4 || flex justify-end items-start">
        <img class="w-6" src="/img/cart.png" alt="cart">
    </div>
</header> --}}
<header class="flex flex-row gap-4 || px-6 py-7">
    @auth
        <div class="basis-3/4 || flex flex-col justify-center items-start gap-2">
            <div class="w-[3.438rem] aspect-square || rounded-[50%] || overflow-hidden">
                <img class="object-cover object-center" src="{{ Auth::user()->profile_picture_url }}" alt="profile pic">
            </div>
            <h4 class="text-[1.5048rem] font-ibm font-[600] text-redMain">Hello {{ Auth::user()->name }}!</h4>
        </div>
        <div class="basis-1/4 || flex justify-end items-start">
            <img class="w-6" src="/img/cart.png" alt="cart">
        </div>
    @else
        <div class="flex space-x-4">
            <a href="{{ route('login') }}"
                class="inline-block || border-2 border-redMain text-redMain py-2 px-4 rounded">Login</a>
            <a href="{{ route('register') }}" class="inline-block || bg-redMain text-white py-2 px-4 rounded">Sign In</a>
        </div>
    @endauth
</header>
