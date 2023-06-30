<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Редактирование новости') }}</h2>
    </x-slot>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 sm:px-20 border-b border-gray-200">
          <form method="POST" action="{{ route('news.update', $news->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-4 gap-4 mt-4">
              <label for="title" class="col-span-1 flex items-center justify-end font-bold text-gray-700">{{ __('Заголовок') }}</label>
              <div class="col-span-3 flex items-center">
                <input id="title" type="text" class="form-input rounded-md shadow-sm w-full @error('title') border border-red-300 @enderror" name="title" value="{{ old('title', $news->title) }}" required autofocus>
                @error('title')
                <span class="text-red-600 mx-2">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="grid grid-cols-4 gap-4 mt-4">
              <label for="summary" class="col-span-1 flex items-end justify-end font-bold text-gray-700">{{ __('Краткое описание') }}</label>
              <div class="col-span-3 flex items-center">
                <textarea id="summary-ckeditor" class="form-input rounded-md shadow-sm w-full @error('summary') border border-red-300 @enderror" name="summary" rows="3" required>{{ old('summary', $news->summary) }}</textarea>
                @error('summary')
                <span class="text-red-600 mx-2">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="grid grid-cols-4 gap-4 mt-4">
              <label for="content" class="col-span-1 flex items-end justify-end font-bold text-gray-700">{{ __('Текст новости') }}</label>
              <div class="col-span-3 flex items-center">
                <textarea id="content-ckeditor" class="form-input rounded-md shadow-sm w-full editor @error('content') border border-red-300 @enderror" name="content" rows="10" required>{{ old('content', $news->content) }}</textarea>
                @error('content')
                <span class="text-red-600 mx-2">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="grid grid-cols-4 gap-4 mt-4">
              <label for="image" class="col-span-1 flex items-end justify-end font-bold text-gray-700">{{ __('Изображение') }}</label>
              <div class="col-span-3 flex items-center">
                @if ($news->image_path)
                <div class="w-20 text-center">
                  <img src="{{ asset('storage/'.$news->image_path) }}" alt="Image" class="mx-auto my-2 h-20 object-fit-cover rounded-lg shadow-md">
                </div>
                @else
                <div class="w-20 text-center">
                  <img src="{{ asset('images/no-image.png') }}" alt="No image" class="mx-auto my-2 h-20 object-fit-cover rounded-lg shadow-md">
                </div>
                @endif
                <input id="image" type="file" class="form-input rounded-md shadow-sm w-full @error('image') border border-red-300 @enderror" name="image">
                @error('image')
                <span class="text-red-600 mx-2">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="grid grid-cols-4 gap-4 mt-4">
              <div class="col-span-4 flex justify-center">
                <button type="submit" class="px-6 py-3 bg-blue-600 rounded-md text-white font-bold">{{ __('Сохранить изменения') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
      CKEDITOR.replace('summary-ckeditor');
      CKEDITOR.replace('content-ckeditor');
    </script>
  </x-app-layout>