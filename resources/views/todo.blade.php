<html>
    <head></head>
    <body>
        <h1>todo list</h1>
        @foreach ($todos as $todo)
        <p>{{ $todo['id'] }} - {{ $todo['task'] }}</p>
        <form action="/todo/{{$todo['id']}}" method="POST">
            @csrf
            @method('DELETE')
            <button>delete</button>
        </form>
        <hr>
        @endforeach
        <form action="/todo" method="POST">
            @csrf
            <input type="text" name="task">
            <input type="submit" name="todo">
        </form>
    </body>
</html>