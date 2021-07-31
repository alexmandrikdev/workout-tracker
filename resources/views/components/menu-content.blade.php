<div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
    <div class="flex-shrink-0 flex items-center px-4">
        <h1 class="text-white text-xl">{{ config('app.name', 'Laravel') }}</h1>
    </div>

    <x-menu-nav />
</div>

<div class="flex-shrink-0 flex bg-gray-700 p-4">
    <div class="flex-shrink-0 block">
        <div class="flex items-center">
            <div class="text-base md:text-sm font-medium text-white">
                {{ auth()->user()->name }}
            </div>
        </div>
    </div>
</div>
