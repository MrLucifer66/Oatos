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
                <form method="POST" action="{{ route('news.destroy', $post->id) }}">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="button" class="text-gray-500 hover:text-red-500 text-xl font-bold" data-toggle="modal" data-target="#confirm-delete">
                    &#10005;
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>