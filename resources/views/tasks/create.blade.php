<x-app-layout>
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Создание задачи') }}</h2> 
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter task title" required>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Задача</label>
                <textarea class="form-control" id="description" name="description" placeholder="Enter task description" required></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            @include('tasks.finduser')
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>
    </div>
    </div>
</x-app-layout>