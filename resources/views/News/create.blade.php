<x-app-layout> 
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Добавление новости') }}</h2> 
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 sm:px-20 border-b border-gray-200">
                <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                    @csrf
    
                    <div class="grid grid-cols-4 gap-4">
                        <label for="title" class="col-span-1 flex items-center justify-end font-bold text-gray-700">{{ __('Заголовок') }}</label>
                        <div class="col-span-3 flex items-center">
                            <input id="title" type="text" class="form-input rounded-md shadow-sm w-full @error('title') border border-red-300 @enderror" name="title" value="{{ old('title') }}" required autofocus>
                            @error('title')
                                <span class="text-red-600 px-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="grid grid-cols-4 gap-4 mt-4">
                        <label for="summary" class="col-span-1 flex items-end justify-end font-bold text-gray-700">{{ __('Краткое описание') }}</label>
                        <div class="col-span-3 flex items-center">
                            <textarea id="summary-ckeditor" class="form-input rounded-md shadow-sm w-full @error('summary') border border-red-300 @enderror" name="summary" rows="3" required>{{ old('summary') }}</textarea>
                            @error('summary')
                                <span class="text-red-600 px-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="grid grid-cols-4 gap-4 mt-4">
                        <label for="content" class="col-span-1 flex items-end justify-end font-bold text-gray-700">{{ __('Текст новости') }}</label>
                        <div class="col-span-3 flex items-center">
                            <textarea id="content-ckeditor" class="form-input rounded-md shadow-sm w-full editor @error('content') border border-red-300 @enderror" name="content" rows="10" required>{{ old('content') }}</textarea>
                            @error('content')
                                <span class="text-red-600 px-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="grid grid-cols-4 gap-4 mt-4">
                        <label for="image" class="col-span-1 flex items-end justify-end font-bold text-gray-700">{{ __('Изображение') }}</label>
                        <div class="col-span-3 flex items-center">
                            <input id="image" type="file" class="form-input rounded-md shadow-sm w-full @error('image') border border-red-300 @enderror" name="image">
                            @error('image')
                                <span class="text-red-600 px-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="grid grid-cols-4 gap-4 mt-4">
                        <label for="tags" class="col-span-1 flex items-end justify-end font-bold text-gray-700">{{ __('Теги') }}</label>
                        <div class="col-span-3 flex items-center">
                            <div id="tags-container" class="flex flex-wrap bg-gray-200 rounded-md p-2">
                            </div>
                            <input id="tags-input" type="text" class="form-input rounded-md shadow-sm ml-2" name="tags[]"  multiple>
                            <input id="hidden-tags" type="hidden" name="hidden-tags">
                        </div>
                    </div>
                    
                    <script>
                        const tagsContainer = document.getElementById("tags-container");
                        const input = document.getElementById("tags-input");
                        const hiddenTags = document.getElementById("hidden-tags");
                        const tags = [];
                        
                        input.addEventListener("keydown", function(event) {
                            if (event.key === "Enter" || event.key === ",") {
                                event.preventDefault();
                                
                                const value = input.value.trim();
                                
                                if (value !== "") {
                                    tags.push(value);
                                    
                                    const tag = document.createElement("div");
                                    tag.classList.add("flex", "items-center", "bg-blue-500", "text-white", "text-sm", "rounded", "p-1", "mr-2", "mb-2");
                                    tag.innerHTML = `
                                        <span class="mr-1">${value}</span>
                                        <button class="text-white font-bold text-sm focus:outline-none">×</button>
                                    `;
                                    
                                    tagsContainer.appendChild(tag);
                                    
                                    input.value = "";
                                    
                                    hiddenTags.value = JSON.stringify(tags);
                                }
                            }
                        });
                        
                        tagsContainer.addEventListener("click", function(event) {
                            if (event.target.tagName === "BUTTON") {
                                const tagValue = event.target.previousElementSibling.innerText;
                                const index = tags.indexOf(tagValue);
                                
                                if (index !== -1) {
                                    tags.splice(index, 1);
                                }
                                
                                event.target.closest("div").remove();
                                
                                hiddenTags.value = JSON.stringify(tags);
                            }
                        });
                    </script>
    
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Сохранить') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
        CKEDITOR.replace( 'content-ckeditor' );
    </script>
    </x-app-layout>