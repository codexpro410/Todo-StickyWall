@extends('layout.layout')
<main class="flex">
    @include('components.side')
    <form action="{{ route('tasks.update', $task) }}" method="POST" class="flex flex-col gap-6 m-10 p-2 w-full min-h-[90vh] bg-gray-200 rounded-l-lg">
           @csrf
           @method('PUT')
           <h1 class="text-5xl font-bold text-center">Edit Task</h1>
           <label for="title">Title of the Task</label>
           {{-- @foreach ($errors->all() as $error)
            <p class="text-red-500">{{$error}}</p>  
           @endforeach --}}
           <input value="{{ old('title',$task->title) }}" type="text" id="title" name="title">
           @error('title')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
            <label for="description">Description</label>
            <textarea value="{{ old('description', $task->description) }}" id="description" name="description" cols="30" rows="10"></textarea>
            @error('description')
                 <p class="text-red-600">{{ $message }}</p>
             @enderror
             
             <label for="tag">Tag</label>
             <input value="{{ old('tag',$task->tag) }}" type="text" id="tag" name="tag">
             @error('tag')
                  <p class="text-red-600">{{ $message }}</p>
              @enderror
              
              <label for="priority">Priority</label>
              <input value="{{ old('priority',$task->priority) }}" type="text" id="priority" name="priority">
              @error('priority')
                   <p class="text-red-600">{{ $message }}</p>
               @enderror
       <button type="submit">Update Task</button>
       </form>
</main>

