<!DOCTYPE html>
<html>
<head></head>
<body>
<h1>TO DO LIST!</h1>

<ul>


@foreach ($tasks as $task)

    <li>
   <a href="/tasks/{{$task->id}}">

   	{{$task->title}}

    </li>

@endforeach

</ul>

</body>
</html>
