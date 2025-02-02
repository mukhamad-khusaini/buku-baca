@props(['user', 'profile' => '/img/profile.jpeg', 'date'])

<div class="flex items-center space-x-4 || border-b pb-4">
    <div class="flex-shrink-0 || w-12 h-12 rounded-full bg-gray-200 || overflow-hidden">
        <!-- Avatar Placeholder -->
        <img class="object-cover" src="{{ $profile }}" alt="profile">
    </div>
    <div class="flex-1 || flex flex-col">
        <span class="font-semibold text-gray-800 || text-lg">{{ $user }}</span>
        <span class="text-gray-500 || text-sm">{{ $date }}</span>
    </div>
    <div class="flex-shrink-0 || flex items-center">
        @for ($i = 0; $i < 5; $i++)
            <svg class="w-5 h-5 text-yellow-500 || fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.18c.969 0 1.371 1.24.588 1.81l-3.392 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.392-2.46a1 1 0 00-1.175 0l-3.392 2.46c-.784.57-1.838-.197-1.539-1.118l1.287-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.18a1 1 0 00.95-.69l1.286-3.97z" />
            </svg>
        @endfor
    </div>
</div>
