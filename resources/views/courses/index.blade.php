<x-app-layout>
    <h1>My Courses  list</h1>
    @foreach ($courses as $course)
    <div>
        <h2>{{ $course->title }}</h2>
        <p>{{ $course->description }}</p>
        <!-- Дополнительная информация о курсе -->
    </div>
    @endforeach
</x-app-layout>