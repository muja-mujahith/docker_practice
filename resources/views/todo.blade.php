<!DOCTYPE html>
<html>
<head>
    <title>Todo App</title>
</head>
<body>

<h2>Todo List</h2>

<form action="/add" method="POST">
    @csrf
    <input type="text" name="task" placeholder="Enter task">
    <button type="submit">Add</button>
</form>

<ul>
@foreach($todos as $todo)
    <li>{{ $todo->task }}</li>
@endforeach
</ul>

</body>
</html>