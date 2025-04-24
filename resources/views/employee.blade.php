<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> tasks </h1>
    <ul>
       @foreach ($allEmployees as $e)
            {{ $e->name }}
       @endforeach
    </ul>
</body>
</html>