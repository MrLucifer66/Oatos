<x-app-layout> <h1>Добавление новости</h1> <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data"> @csrf

    <div class="form-group row">
        <label for="published_at" class="col-md-4 col-form-label text-md-right">Дата и время публикации</label>

        <div class="col-md-6">
            <input id="published_at" type="datetime-local" class="form-control{{ $errors->has('published_at') ? ' is-invalid' : '' }}" name="published_at" value="{{ old('published_at') }}" required>

            @if ($errors->has('published_at'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('published_at') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label text-md-right">Заголовок</label>

        <div class="col-md-6">
            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

            @if ($errors->has('title'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="summary" class="col-md-4 col-form-label text-md-right">Краткое описание</label>
      
        <div class="col-md-6">
          <textarea class="form-control{{ $errors->has('summary') ? ' is-invalid' : '' }}" name="summary" rows="3" required>{{ old('summary') }}</textarea>
      
          @if ($errors->has('summary'))
          <span class="invalid-feedback">
            <strong>{{ $errors->first('summary') }}</strong>
          </span>
          @endif
        </div>
      </div>

    <div class="form-group row">
        <label for="content" class="col-md-4 col-form-label text-md-right">Текст новости</label>

        <div class="col-md-6">
            <textarea class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" rows="10" required>{{ old('content') }}</textarea>

            @if ($errors->has('content'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('content') }}</strong>
                </span>
            @endif
        </div>
    </div>
    

    <div class="form-group row">
        <label for="image" class="col-md-4 col-form-label text-md-right">Изображение</label>
        <div class="col-md-6">
            <div class="relative border-2 border-dashed border-gray-400 rounded-lg p-4 bg-white">
                <input type="file" id="image" name="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                <div class="text-center">
                    <div class="flex flex-col items-center justify-center">
                        <i class="fad fa-cloud-upload fa-4x text-gray-400"></i>
                        <p class="mt-1 text-gray-600">Перетащите изображение сюда или <span class="underline cursor-pointer">выберите его</span></p>
                    </div>
                    @if ($errors->has('image'))
                        <div class="mt-2 text-red-600">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Добавить новость
            </button>
        </div>
    </div>
</form>
</x-app-layout>