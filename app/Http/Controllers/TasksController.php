<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view ('task.index')->with('tasks', $tasks);
    }
    
    public function create()
    {
        return view('task.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Task::create($input);
        return redirect('task')->with('flash_message', 'Task Addedd!');  
    }
    
    public function show($id)
    {
        $task = Task::find($id);
        return view('task.show')->with('tasks', $task);
    }
    
    public function edit($id)
    {
        $task = Task::find($id);
        return view('task.edit')->with('tasks', $task);
    }
  
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $input = $request->all();
        $task->update($input);
        return redirect('task')->with('flash_message', 'Task Updated!');  
    }
  
    public function destroy($id)
    {
        Task::destroy($id);
        return redirect('task')->with('flash_message', 'Task deleted!');  
    }
}