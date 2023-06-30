<x-app-layout> 
    <div class="flex justify-between mb-4"> 
        <h1 class="text-2xl font-bold">Рекомендовано к публикации</h1> 

        </div> 
        <div class="overflow-x-auto"> 
            <table class="min-w-full border-collapse border-gray-300 shadow-sm rounded-lg"> 
                <thead> 
                    <tr> 
                        <th class="px-6 py-4 text-left bg-gray-200 border-b border-gray-300">Название</th> 
                        <th class="px-6 py-4 text-left bg-gray-200 border-b border-gray-300">Краткое содержание</th> 
                        <th class="px-6 py-4 text-left bg-gray-200 border-b border-gray-300">Статья</th>
                        <th class="px-6 py-4 text-left bg-gray-200 border-b border-gray-300">Регион</th> 
                        <th class="px-6 py-4 text-left bg-gray-200 border-b border-gray-300">Действие</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    @foreach($proposedNews as $news) 
                    <tr> 
                        <td class="px-6 py-4 border-b border-gray-300 cursor-pointer" onclick="window.location.href ='{{ route('proposed-news.show', $news->id) }}'">{{ $news->title }}</td> 
                        <td class="px-6 py-4 border-b border-gray-300 cursor-pointer" onclick="window.location.href ='{{ route('proposed-news.show', $news->id) }}'">{{ strlen($news->summary) > 100 ? substr($news->summary, 0, 100) . '...' : $news->summary }}</td>
                        <td class="px-6 py-4 border-b border-gray-300 cursor-pointer" onclick="window.location.href ='{{ route('proposed-news.show', $news->id) }}'">{{ strlen($news->content) > 100 ? substr($news->content, 0, 100) . '...' : $news->summary }}</td> 
                        <td class="px-6 py-4 border-b border-gray-300 cursor-pointer" onclick="window.location.href ='{{ route('proposed-news.show', $news->id) }}'">{{ $news->region }}</td>
                        <td class="px-6 py-4 border-b border-gray-300 text-sm flex items-center w-full"> 
                            <div class="mr-4"> <a href="{{ route('proposed-news.show', $news->id) }}" class="text-blue-500 hover:text-blue-700">Посмотреть</a> 
                                <form method="POST" action="{{ route('proposed-news.publish', $news->id) }}" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Отправить</button>
                                </form>
                            </div> 
                            
                            @if($news->published_at) <div class="mr-4"> 
                                <a href="{{ route('news.edit', $news->id) }}" class="text-red-500 hover:text-red-700 focus:outline-none"> Редактировать </a>
                                <a method="POST" action="{{ route('proposed-news.publish', $proposedNews->id) }}" class="d-inline"> отправить </a>
                                 
                        </div> 
                        @endif 
                        <form method="POST" action="{{ route('proposed-news.destroy', $news->id) }}"> 
                            @csrf 
                            @method('DELETE') 
                            <button type="submit" class="text-red-500 hover:text-red-700 focus:outline-none"> Удалить </button> 
                        </form>
                    </td> 
                </tr> 
                @endforeach 
            </tbody>
                    </table> 
                </div> 
            </x-app-layout>