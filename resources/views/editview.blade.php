<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Item</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/todo.css')}}">
</head>
<body>
<div class="editContainer container">
    <h1 style="border-bottom: 1px solid #dee2e6;">Edit Item : {{ $todoItem->id }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="todoItemView">
        <form method="post" action="{{ route('editItem', $todoItem->id) }}">
            {{ csrf_field() }}
            {{ Form::text('name', $todoItem->name) }}
            <label for="is_complete"></label>
            {{ Form::checkbox('is_complete', 'yes', $todoItem->is_complete) }}
            {{ Form::submit('Save')}}
        </form>
        <a href="{{url('/')}}">Back</a>
    </div>
</div>
</body>
</html>
