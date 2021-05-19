<x-slot name="header">
    <div class="text-xl font-semibold">News</div>
</x-slot>

<div class="max-w-4xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    @forelse ($news as $n)
    <div class="bg-white shadow-xl rounded-md overflow-hidden mb-10">
        {{-- Card Header --}}
        <div class="flex items-center justify-between p-3">
            <div class="flex items-center">
                <span class="w-7 h-7 rounded-full bg-gray-300"></span>
                <span class="ml-2 font-semibold">{{ $n->user->name }}</span>
            </div>

            <button class="flex items-center">
                <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                <span class="w-2 h-2 rounded-full bg-gray-300 ml-1"></span>
                <span class="w-2 h-2 rounded-full bg-gray-300 ml-1"></span>
            </button>
        </div>

        {{-- Thumbnail --}}
        <img class="w-full h-1/6 object-cover" src="{{ asset("images/{$n->thumbnail}") }}" alt="berita 10">

        {{-- Action Button --}}
        <div class="flex items-center p-3">
            <div class="flex items-center">
                <button class="w-5 h-5 rounded-full bg-gray-300"></button>
                <span class="font-semibold ml-1">1.2k</span>
            </div>
            <div class="flex items-center ml-2">
                <button class="w-5 h-5 rounded-full bg-gray-300"></button>
                <span class="font-semibold ml-1">600</span>
            </div>
            <div class="flex items-center ml-2">
                <button class="w-5 h-5 rounded-full bg-gray-300"></button>
                <span class="font-semibold ml-1">28</span>
            </div>
        </div>

        {{-- Content --}}
        <div class="p-4">
            <h1 class="text-lg font-bold mb-2">{{ $n->title }}</h1>
            <p class="leading-6">{{ $n->description }}</p>
        </div>

        {{-- Card Footer --}}
        <div class="flex items-center justify-end p-3 bg-gray-100">
            <span class="text-sm text-gray-500">{{ $n->created_at->diffForHumans() }}</span>
        </div>
    </div>
    @empty
    <div class="bg-yellow-200 text-yellow-500 rounded-md p-5">No News data found.</div>
    @endforelse
</div>