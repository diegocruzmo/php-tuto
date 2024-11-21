<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Users list:</h2>
    <ul>
        @foreach ($users as $user)
        @if ($user->age > 18)
            <li>{{ $user->name }}. Age: {{ $user->age }}</li>
        @endif
        @endforeach
    </ul>
</body>
</html>
