<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full flex sm:max-w-md mt-6 bg-white shadow-md overflow-hidden sm:rounded-t-lg">
        <a class="px-6 py-4 flex-1 {{ !request()->routeIs('login') ? 'bg-gray-50' : 'font-semibold' }}"
            href="{{ route('login') }}">Login</a>

        <a class="px-6 py-4 flex-1 {{ !request()->routeIs('register') ? 'bg-gray-50' : 'font-semibold' }}"
            href="{{ route('register') }}">Register</a>
    </div>

    <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-b-lg">
        {{ $slot }}
    </div>
</div>
