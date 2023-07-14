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
                <div class="question-container">
                    <div class="mb-2">
                        <label for="question0" class="block text-gray-700 text-sm font-bold mb-2">Вопрос</label>
                        <input type="text" name="test_questions[0][question]" id="question0" class="border border-gray-300 rounded-md p-2 w-full">
                    </div>
        
                    <div class="mb-2 options-container">
                        <label for="options1" class="block text-gray-700 text-sm font-bold mb-2">Варианты ответов</label>
                        <div class="options-wrapper">
                          <div class="option-wrapper">
                            <input type="text" name="test_questions[1][options][]" class="border border-gray-300 rounded-md p-2 w-full">
                            <button type="button" class="remove-option-btn">-</button>
                          </div>
                          <button type="button" class="add-option-btn">+</button>
                        </div>
                      </div>
                      
                      <div class="mb-2">
                        <label for="correct_option0" class="block text-gray-700 text-sm font-bold mb-2">Правильный вариант ответа</label>
                        <select name="test_questions[0][correct_option]" class="border border-gray-300 rounded-md p-2 w-full">
                          <!-- options will be dynamically populated here -->
                        </select>
                      </div>
        
                <button type="button" id="add-question-btn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Добавить вопрос
                </button>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            let questionCount = 1;

            function updateCorrectAnswerOptions() {
            const optionCount = $(".options-container").length;
            const correctAnswerSelects = $("select[name*='correct_answer']");

            correctAnswerSelects.empty();

            for (let i = 1; i <= optionCount; i++) {
                const option = $("<option>").val(i).text(i);
                correctAnswerSelects.append(option);
            }
            }

            $("#add-question-btn").click(function () {
            const firstQuestionContainer = $(".question-container").first();
            const clonedContainer = firstQuestionContainer.clone();

            // Clear existing options
            clonedContainer.find(".options-container").empty();
            
            // Add the "+" button to the cloned container
            clonedContainer.find(".add-option-btn").show();

            // Update the names of input and select elements
            clonedContainer.find("input, select").each(function () {
                const name = $(this).attr("name");
                const newName = name.replace("test_questions[0]", `test_questions[${questionCount}]`);
                $(this).attr("name", newName);
            });

            // Append the cloned container after the last question container
            clonedContainer.insertAfter($(".question-container").last());

            // Update options in the correct answer dropdown
            updateCorrectAnswerOptions();

            questionCount++;
            });

            function addOptionField(optionsContainer) {
            const optionField = optionsContainer.find(".option-field").first();
            const clonedOptionField = optionField.clone();

            // Remove existing values from the cloned option field
            clonedOptionField.val('');

            // Update the names of input and select elements
            clonedOptionField.find("input, select").each(function () {
                const name = $(this).attr("name");
                const newName = name.replace("[0]", `[${questionCount}]`);
                $(this).attr("name", newName);
            });

            optionsContainer.append(clonedOptionField);

            updateCorrectAnswerOptions();
            }

            $(document).on("click", ".add-option-btn", function () {
            const optionsContainer = $(this).closest(".question-container").find(".options-container");
            addOptionField(optionsContainer);
            });

            $(document).on("click", ".remove-option-btn", function () {
            const optionField = $(this).closest(".option-field");
            optionField.remove();

            updateCorrectAnswerOptions();
            });

            $(document).on("input", "input[name*='test_questions']", function () {
            updateCorrectAnswerOptions();
            });
        </script>
    </div>
</x-app-layout>