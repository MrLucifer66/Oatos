<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        $user = $this->findUser($request->user_id);

        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->user()->associate($user);
        $task->save();

        return redirect()->route('tasks.index')
            ->with('success', 'Task created successfully');
    }

    public function edit(Task $task)
    {
        $users = User::all();
        return view('tasks.edit', compact('task', 'users'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        $user = $this->findUser($request->user_id);

        $task->title = $request->title;
        $task->description = $request->description;
        $task->user()->associate($user);
        $task->save();

        return redirect()->route('tasks.index')
            ->with('success', 'Task updated successfully');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully');
    }

    public function findUser(Request $request) 
    { 
        $search = $request->get('search'); 
        $users = User::where('name', 'like', '%'.$search.'%')->get(); 
        return response()->json($users); 
    } 
}


