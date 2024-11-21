<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ ($user->name) }}
    @foreach ($user->roles as $role)
        <h2>{{ $role->name }}</h2>
        <h3>{{ $role->pivot->added_by }}</h3>
    @endforeach
</body>
</html>
