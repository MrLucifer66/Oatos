<x-app-layout>
<div>
    <h2>News List</h2>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($newsList as $news)
            <tr>
                <td>{{ $news->title }}</td>
                <td>{{ $news->content }}</td>
                <td>
                    <a href="{{ route('news.edit', $news->id) }}">Edit</a>
                    <form action="{{ route('news.destroy', $news->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>