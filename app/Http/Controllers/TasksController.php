<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use \App\Http\Requests\StorePostRequest;
use Illuminate\Contracts\Session\Session;

class TasksController extends Controller
{
    public function login()
    {
        return view('task.login');
    }

    public function registration()
    {
        return view('task.registration');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
        ]);
        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;
        $res = $user->save();
        if ($res){
            return back()->with('success', 'You are registered now.');
        }else {
            return back()->with('fail', 'Registration failed.');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);
        $user = User::where('email','=',$request->email)->first();
        if ($user){
            return redirect('index');
        }else {
            return back()->with('fail', 'You are not registered.');
        }
    }

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
        $validated = $request->validate([
            'task' => 'required|min:5',
        ]);
                
        $input = $request->all();
        if(!isset($request->done))
        $input['done'] = false;
        else $input['done'] = true;
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
        if(!isset($request->done))
        $input['done'] = false;
        else $input['done'] = true;
        $task->update($input);
        return redirect('task')->with('flash_message', 'Task Updated!');  
    }
  
    public function destroy($id)
    {
        Task::destroy($id);
        return redirect('task')->with('flash_message', 'Task deleted!');  
    }
}