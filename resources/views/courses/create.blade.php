<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Создание курса') }}
        </h2>
    </x-slot>
    <div class="flex">
        <div class="w-1/2 mr-4">
            <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Название курса</label>
                    <input type="text" name="title" id="title" class="border border-gray-300 rounded-md p-2 w-full">
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Описание курса</label>
                    <textarea name="description" id="description" class="border border-gray-300 rounded-md p-2 w-full"></textarea>
                </div>

                <div class="mb-4">
                    <label for="material" class="block text-gray-700 text-sm font-bold mb-2">Материалы для курса</label>
                    <input type="file" name="material[]" id="material" class="border border-gray-300 rounded-md p-2 w-full" multiple>
                </div>

                <div class="mb-4">
                    <label for="course_image" class="block text-gray-700 text-sm font-bold mb-2">Картинка курса</label>
                    <input type="file" name="course_image" id="course_image" class="border border-gray-300 rounded-md p-2 w-full">
                </div>

                <div class="mb-4">
                    <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Дата начала курса</label>
                    <input type="date" name="start_date" id="start_date" class="border border-gray-300 rounded-md p-2 w-full">
                </div>

                <div class="mb-4">
                    <label for="is_paid" class="block text-gray-700 text-sm font-bold mb-2">Платный курс</label>
                    <input type="checkbox" name="is_paid" id="is_paid" class="border border-gray-300 rounded-md p-2">
                </div>

                <div class="mb-4">
                    <label for="is_published" class="block text-gray-700 text-sm font-bold mb-2">Опубликован</label>
                    <input type="checkbox" name="is_published" id="is_published" class="border border-gray-300 rounded-md p-2">
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Создать курс</button>
            </form>
        </div>

        <div class="w-1/2 ml-4">
            <div class="mb-4">
                <h3 class="text-lg font-bold mb-2">Тест</h3>
                @for ($i = 0; $i < 5; $i++)
                    <div class="mb-2">
                        <label for="question{{ $i }}" class="block text-gray-700 text-sm font-bold mb-1">Вопрос {{ $i+1 }}</label>
                        <input type="text" name="test_questions[{{ $i }}][question]" id="question{{ $i }}" class="border border-gray-300 rounded-md p-2 w-full">
                    </div>

                    <div class="mb-2">
                        <label for="options{{ $i }}" class="block text-gray-700 text-sm font-bold mb-1">Варианты ответов</label>
                        <input type="text" name="test_questions[{{ $i }}][options][]" id="options{{ $i }}" class="border border-gray-300 rounded-md p-2 w-full">
                        <input type="text" name="test_questions[{{ $i }}][options][]" id="options{{ $i }}" class="border border-gray-300 rounded-md p-2 w-full">
                    </div>

                    <div class="mb-2">
                        <label for="correct_option{{ $i }}" class="block text-gray-700 text-sm font-bold mb-1">Правильный вариант ответа</label>
                        <select name="test_questions[{{ $i }}][correct_option]" id="correct_option{{ $i }}" class="border border-gray-300 rounded-md p-2 w-full">
                            <option value="">Вариант 1</option>
                            <option value="1">Вариант 2</option>
                            <option value="2">Вариант 3</option>
                            <option value="3">Вариант 4</option>
                        </select>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</x-app-layout>