@extends('layout.layout')
<main class="flex">
    @include('components.side')
    <form action="{{ route('tasks.update', $task) }}" method="POST" class="flex flex-col gap-6 m-10 p-2 w-full min-h-[90vh] bg-gray-200 rounded-l-lg">
           @csrf
           @method('PUT')
           <h1 class="text-5xl font-bold text-center">Edit Task</h1>
           <label for="title">Title of the Task</label>
           <input value="{{ old('title',$task->title) }}" type="text" id="title" name="title">
           
           <label for="description">Description</label>
           <textarea value="{{ old('description', $task->description) }}" id="description" name="description" cols="30" rows="10"></textarea>
           
           <label for="tag">Tag</label>
           <input value="{{ old('tag',$task->tag) }}" type="text" id="tag" name="tag">
           
           <label for="priority">Priority</label>
           <input value="{{ old('priority',$task->priority) }}" type="text" id="priority" name="priority">
       <button type="submit">Update Task</button>
       </form>
</main>

