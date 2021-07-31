<div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
    <div class="flex-shrink-0 flex items-center px-4">
        <h1 class="text-white text-xl">{{ config('app.name', 'Laravel') }}</h1>
    </div>

    <x-menu-nav />
</div>

<div class="flex-shrink-0 flex bg-gray-700 p-4">
    <div class="relative inline-block text-left" x-data="{ isProfileDropdownOpen: false }">
        <button type="button" class="flex-shrink-0 block" @click="isProfileDropdownOpen = !isProfileDropdownOpen">
            <div class="flex items-center">
                <div class="text-base md:text-sm font-medium text-white">
                    {{ auth()->user()->name }}
                </div>
            </div>
        </button>

        <div class="origin-bottom-left absolute left-0 bottom-10 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none"
            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
            x-show="isProfileDropdownOpen" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95">
            <div @click.away="isProfileDropdownOpen = false">
                <div class="py-1" role="none">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button type="submit" class="text-gray-700 group flex items-center px-4 py-2 text-sm"
                            role="menuitem" tabindex="-1" id="menu-item-0">
                            {{-- Heroicon name: solid/pencil-alt --}}
                            <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
