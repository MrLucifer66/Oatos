<x-app-layout> 
    <div class="container mx-auto px-4 py-8"> 
        <h1 class="text-3xl font-bold mb-4">Tasks</h1> 
        <a href="{{ route('tasks.create') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Create Task</a> 
        @if (session('success')) <div class="bg-green-100 border-green-400 text-green-700 px-4 py-3 mb-4 rounded" role="alert"> {{ session('success') }} </div> 
        @endif 
        <table class="table table-auto w-full"> 
            <thead> 
                <tr> 
                    <th class="py-2">Title</th> <th class="py-2">Description</th> 
                    <th class="py-2">User</th> <th class="py-2">Action</th> 
                </tr> 
            </thead> 
            <tbody> 
                @foreach($tasks as $task) <tr> <td class="py-2">{{ $task->title }}</td> 
                    <td class="py-2">{{ $task->description }}</td> 
                    <td class="py-2">{{ $task->user->name }}</td> 
                    <td class="py-2"> <a href="{{ route('tasks.edit', $task) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block">Edit</a> 
                        <form action="{{route('tasks.destroy', $task)}}" method="POST" style="display: inline-block;"> @csrf @method('DELETE') 
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded inline-block" onclick="return confirm('Are you sure?')">Delete</button> 
                    </form> 
                </td> 
            </tr> 
            @endforeach 
        </tbody> 
    </table> 
</div> 
</x-app-layout>