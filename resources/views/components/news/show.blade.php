<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-800">{{ $news->title }}</h1>
                <p class="text-gray-600 text-base mt-2">{{ $news->created_at->format('d.m.Y H:i') }}</p>
            </div>
            <div class="mt-6">
                <img src="{{ $news->image_path }}" alt="{{ $news->title }}" class="w-full mb-6">
                <p class="text-gray-800 text-xl leading-8">{{ $news->content }}</p>
            </div>
        </div>
    </div>
</x-app-layout>