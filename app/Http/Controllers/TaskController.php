<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    //     $tasks = Task::all();
    //     return view('tasks.index', compact('tasks'));

    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        // $validate = $request->validate([
        //     'title' =>'required|min:3|max:255',
        //     'description' => 'required|min:3|max:255',
        //     'tag'=>'required|min:3|max:255',
        //     // 'completed' => 'required',
        //     'priority' => 'required|min:3|max:255'
        // ]);

        // Task::create($validate);
        Task::create($request->validated());
        return redirect('/')->with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $taskController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
        // $task->update($request->all());

        // $task->update($request->validate([
        //     'title' => ['required', 'min:3' ,'max:255', 'unique:tasks'],
        //     'description' => 'required',
        //     'tag'=>'required',
        //     // 'completed' => 'required',   
        //     'priority' => 'required',
        // ]));
        $task->update($request->validated());
        return redirect('/')->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
        // dd($task);
        $task->delete();
        return redirect('/')->with('success', 'Task deleted successfully!');
    }
}
