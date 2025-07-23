<div class="flex h-screen bg-gray-200">
    <div class="sidebar bg-blue-500 text-white w-64 min-h-screen fixed transition-all duration-300 ease-in-out">
        @include('layouts.sidebar')
    </div>
    <div class="flex flex-1 flex-col overflow-hidden ml-64">
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-4">
            <div title="{{ isset($title) ? $title : '' }}" subtitle="{{ isset($subtitle) ? $subtitle : "" }}"></div>
            {{ $slot }}
        </main>
    </div>
</div>
