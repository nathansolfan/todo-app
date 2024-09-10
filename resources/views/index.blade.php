<x-layout>
    <div class="max-w-4xl mx-auto p-6 bg-white">

    <h1 class="text-gray-600 mb-4 font-bold text-4xl">The tasks:</h1>
    <a href="{{route('tasks.create')}}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded mb-6 inline-block">Create Task</a>
    @foreach ($tasks as $task)
    <div class="mt-6 space-y-4">
    <div class="p-4 flex justify-between items-center">
        <p class="text-lg font-semibold"> {{ $task->title }} </p>
        <a href="{{ route('tasks.show', $task->id)}}" class="text-blue-500 ">View Tasks</a>
    </div>
    </div>
    @endforeach
    </div>
</x-layout>
