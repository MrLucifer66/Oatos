<x-app-layout> 
    <h1>Edit Proposed News</h1>

    <form method="POST" action="{{ route('proposed-news.update', $proposedNews->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $proposedNews->title }}">
        </div>

        <div>
            <label for="content">Content:</label>
            <textarea name="content" id="content">{{ $proposedNews->content }}</textarea>
        </div>

        <div>
            <label for="summary">Summary:</label>
            <textarea name="summary" id="summary">{{ $proposedNews->summary }}</textarea>
        </div>

        <div>
            <label for="img">Image:</label>
            <input type="text" name="img" id="img" value="{{ $proposedNews->img }}">
        </div>

        <div>
            <button type="submit">Save Changes</button>
        </div>
    </form>
</x-app-layout> 