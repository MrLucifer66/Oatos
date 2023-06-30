<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Предпросмотр новости') }}</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 sm:px-20 border-b border-gray-200">
            <h2 class="font-bold text-2xl mb-4">{{ $news->title }}</h2>
            <p class="text-lg mb-4">{!! $news->summary !!}</p>
            <div class="prose max-w-none">
              {!! $news->content !!}
            </div>
            <div class="grid grid-cols-2 gap-4 mt-4">
              <div class="col-span-1">
                <a href="{{ route('news.edit', $news->id) }}" class="px-6 py-3 bg-gray-200 rounded-md text-gray-700 font-bold">{{ __('Редактировать') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </x-app-layout>