<x-app-layout>  
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новости') }}
            </h2>
            <a href="{{ route('news.create') }}"
                class="flex items-center justify-center w-10 h-10 bg-blue-600 rounded-full hover:bg-blue-700 ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="w-6 h-6 text-white">
                    <path fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </x-slot>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($news as $item)
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                  <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-3xl font-bold mb-4">{{ $item->title }}</h2>
                    <div class="flex mb-4 items-center">

                    </div>
                    <div class="prose max-w-full">{{ $item->content }}</div>
                    <div class="my-6">
                      <img src="src="{{ $item->image_path }}" alt="{{ $item->title }}" class="w-full max-w-4xl mx-auto">
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
