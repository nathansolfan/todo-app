<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p> {{ $task->title}} </p>
<p> {{ $task->description}}</p>
<a href=" {{route('tasks.edit', $task->id)}} ">Edit me</a>


</body>
</html>
