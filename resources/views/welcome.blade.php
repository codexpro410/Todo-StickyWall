
@extends('layout.layout')
<main class="flex">
    @include('components.side')
    <article class="flex flex-col gap-6 m-10 p-2 w-full h-full bg-gray-200 rounded-l-lg">
        <h1 class="text-5xl font-bold">Sticky Wall</h1>
        <div class="grid grid-cols-3 gap-3">
            {{-- @php
                $colors = ['bg-yellow-200', 'bg-sky-200', 'bg-red-200', 'bg-orange-200'];
            @endphp --}}
          @foreach ($tasks as $task)
            {{-- <x-card :task="$task" bgClass="{{ $colors[array_rand($colors)] }}"/> --}}
            <x-card :task="$task" :bgClass="$task->bgClass" />
            @endforeach
            <a href="{{ route('tasks.create') }}" class="bg-gray-100 hover:bg-gray-50 hover:text-gray-500 cursor-pointer transition-all duration-150 text-5xl flex justify-center items-center rounded-lg min-h-[300]">+</a>
            
        </div>
    </article>
</main>
<p>{{$tasks->links()}}</p>
