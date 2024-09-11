<x-layout>

    <section>
        <h1>TO-DO APP</h1>

        <form
        action=" {{route('tasks.update', $task->id)}}"
        method="POST"
        >
        @csrf
        @method('PUT')
        <div>
            <label>Title</label>
            <input
            type="text"
            name="title"
            id="title"
            >
        </div>
        <div>
            <label>Description</label>
            <input
            type="text"
            name="description"
            id="description"
            >
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">Save</button>

        </form>
    </section>
</x-layout>
