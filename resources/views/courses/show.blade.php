<x-app-layout> 
<h1>{{ $course->title }}</h1>
<p>{{ $course->description }}</p>

<h3>Материалы</h3>
<a href="{{ Storage::url($course->material) }}">Скачать материал</a>

<h3>Тест</h3>
@foreach ($course->test_questions as $question)
    <h4>{{ $question['question'] }}</h4>
    <ul>
        @foreach ($question['options'] as $key => $option)
            <li>
                <input type="radio" name="answer{{ $loop->parent->index }}" value="{{ $key }}">
                <label>{{ $option }}</label>
            </li>
        @endforeach
    </ul>
@endforeach
</x-app-layout> 