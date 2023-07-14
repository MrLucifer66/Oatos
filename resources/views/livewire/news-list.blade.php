<div>
    <ul class="flex mb-2">
        <li class="-mb-px mr-1">
            <a class="tab inline-block rounded-t py-2 px-4 text-blue-900 font-semibold" href="#federal-news">Федеральные новости</a>
        </li>
        <li class="-mb-px mr-1">
            <a class="tab inline-block py-2 px-4 text-blue-900 hover:text-blue-800 font-semibold" href="#regional-news">Региональные новости</a>
        </li>
    </ul>
    <div class="p-2">
        <div class="tab-content h-50 overflow-y-auto" id="federal-news">
            @foreach ($news->where('region', 'federation')->take(5) as $item)
                <div class="mb-2">
                    <a href="{{ route('welcome.news.show', ['id' => $item->id]) }}">{{ $item->title }}</a>
                </div>
            @endforeach
        </div>
        <div class="hidden tab-content h-72 overflow-y-auto" id="regional-news">
            @foreach ($news->where('region', '!=', 'federation')->take(5) as $item)
                <div class="mb-2">
                    <a href="{{ route('welcome.news.show', ['id' => $item->id]) }}">{{ $item->title }}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const target = this.getAttribute('href');

                // Скрыть все содержимое вкладок
                tabContents.forEach(tabContent => {
                    tabContent.classList.add('hidden');
                });

                // Показать выбранное содержимое вкладки
                document.querySelector(target).classList.remove('hidden');
            });
        });
    });
</script>