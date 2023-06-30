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
  
    <div class="container mx-auto px-4 max-w-full">
      <div class="flex flex-wrap -mx-4">
        @foreach($news as $post)
        <div class="w-full md:w-1/2 px-4 mb-4 inline-block">
          <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
              <div class="md:flex-shrink-0">
                <img class="h-48 w-full object-cover md:w-48" src="{{ asset('storage/news/' . $post->image) }}" alt="{{ $post->title }}">
              </div>
              <div class="p-2">
                <h3 class="text-xl font-bold text-gray-900 "><a href="{{ route('news.show', $post->id) }}" class="hover:text-gray-600">{{ mb_strlen($post->title) > 90 ? mb_substr($post->title, 0, 100).'...' : $post->title }}</a></h3>
                <div class="text-wrapper @if(mb_strlen($post->summary) > 100) text-small @endif">
                  <p class="text-gray-500 mt-2 text-sm">{{ mb_strlen($post->summary) > 100 ? mb_substr($post->summary, 0, 100).'...' : $post->summary }}</p>
                </div>
                <div class="mt-1 flex justify-end items-center">
                  <a href="{{ route('news.edit', $post->id) }}" class="text-gray-500 hover:text-green-500 text-xl mr-4">
                    &#9998;
                  </a>
                  <form class="delete-form" method="POST" action="{{ route('news.destroy', $post->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="text-gray-500 hover:text-red-500 text-xl font-bold" data-toggle="modal" data-target="#confirm-delete">
                        &#10005;
                    </button>
                </form>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{ $news->links() }}
    </div>
  </x-app-layout>