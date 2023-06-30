<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if ($query)
            <p>Результаты поиска по запросу "{{ $query }}"</p>
        @endif

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            @forelse ($news as $n)
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-800"><a href="{{ route('news.show', $n->id) }}">{{ $n->title }}</a></h1>
                    <p class="text-gray-600 text-base mt-2">{{ $n->created_at->format('d.m.Y H:i') }}</p>
                </div>
            @empty
                <p>Нет результатов поиска.</p>
            @endforelse
        </div>
    </div>
</x-app-layout>