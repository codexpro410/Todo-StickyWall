<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    // $tasks = Task::all('title');
    // $tasks = Task::pluck('title');
    $colors = ['bg-yellow-200', 'bg-sky-200', 'bg-red-200', 'bg-orange-200'];
    $tasks = Task::select('id','title')->paginate(10);
    $tasks->getCollection()->transform(function ($task, $index) use ($colors) {
        $task->bgClass = $colors[$index % count($colors)];
        return $task;
    });

    // return view('welcome', ['tasks' => $tasks]); // Explicitly pass $tasks
    return view('welcome', compact('tasks'));
});

Route::resource('tasks', TaskController::class);
