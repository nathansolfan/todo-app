<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>

    <section>
        <h1>TO-DO APP</h1>

        <form
        action=" {{route('tasks.store')}}"
        method="POST"
        >
        @csrf
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

</body>
</html>
