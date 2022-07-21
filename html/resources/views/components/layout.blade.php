@props(['title' => 'Todo'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="/css/app.css" rel="stylesheet">
    <title>{{$title}}</title>
</head>
<body class="p-10">
    <header>
        <h1 class="text-lg font-bold mb-4">todo list</h1>
    </header>
    <main>
        {{$slot}}
    </main>
</body>
</html>