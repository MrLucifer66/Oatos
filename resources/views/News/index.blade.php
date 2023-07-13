<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Новость') }}
      </h2>
  </x-slot>

  <div class="container mx-auto px-4 max-w-full">
      <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
          <div class="md:flex">
            @foreach($news as $item)
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    @if($item->image)
                        <img class="h-48 w-full object-cover md:w-48"
                            src="{{ asset('storage/news/' . $item->image) }}"
                            alt="{{ $item->title }}">
                    @endif
                </div>
                  <div class="p-2">
                      <h3 class="text-xl font-bold text-gray-900">{{ $item->title }}</h3>
                      @if(!is_null($item->published_at))
                        <p class="text-gray-500 mt-2 text-sm">{{ $item->published_at->format('d.m.Y') }}</p>
                      @endif
                      <p class="text-gray-700 mt-2">{{ $item->content }}</p>
                      @if(!empty($item->region))
                        <p class="text-gray-500 mt-2">Регион: {{ $item->region }}</p>
                      @endif
                      @if($item->tags && $item->tags->count() > 0)
                        <p class="text-gray-500 mt-2">Теги:
                          @foreach($item->tags as $tag)
                            <a href="#">{{ $tag->name }}</a>@if($loop->last)@else, @endif
                          @endforeach
                        </p>
                      @endif
                  </div>
              </div>
            @endforeach
          </div>
      </div>
  </div>
</x-app-layout>