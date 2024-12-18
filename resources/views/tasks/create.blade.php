@extends('layout.layout')
<main class="flex">
    @include('components.side')
    <form action="{{ route('tasks.store') }}" method="POST" class="flex flex-col gap-6 m-10 p-2 w-full min-h-[90vh] bg-gray-200 rounded-l-lg">
           @csrf
           <h1 class="text-5xl font-bold text-center">New Task</h1>
           <label for="title">Title of the Task</label>
           <input type="text" id="title" name="title">
           @error('title')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
           <label for="description">Description</label>
           <textarea id="description" name="description" cols="30" rows="10"></textarea>
           @error('description')
                 <p class="text-red-600">{{ $message }}</p>
             @enderror
           <label for="tag">Tag</label>
           <input type="text" id="tag" name="tag">
           @error('tag')
           <p class="text-red-600">{{ $message }}</p>
       @enderror
           <label for="priority">Priority</label>
           <input type="text" id="priority" name="priority">
           @error('priority')
                   <p class="text-red-600">{{ $message }}</p>
               @enderror
       <button type="submit">Create Task</button>
       </form>
</main>

