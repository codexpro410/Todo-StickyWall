@props(['task','bgClass' => 'bg-yellow-200'])
<div class="p-4 cursor-pointer rounded-lg min-h-[300] hover:bg-opacity-70 {{ $bgClass }}  ">
    <h1 class="text-3xl font-bold">{{ $task->title }}</h1>    
    <ul class="flex flex-col gap-3">
        <li>Item 1</li>
        {{-- <li>
            <x-icon icon="FaBeer" class="text-4xl text-black h-10 w-10" />
        </li> --}}
        <li>Item 2</li>
        <li>Item 3</li>
        <li>Item 4</li>
    </ul>
    <div class="flex gap-5 mt-5 ">
        <a href='{{ route('tasks.edit', $task->id)}}' class='h-fit p-2 bg-green-300 rounded-lg'>Edit</a>
        <form action="{{ route('tasks.destroy', $task->id)}}" method="POST" class="flex gap-3 flex-grow">
            @csrf
            @method('delete')
            <button class='p-2 bg-slate-100 text-red-500 font-bold rounded-lg'>Delete</button>
        </form>
    </div>
 
</div>
