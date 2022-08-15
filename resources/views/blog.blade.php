<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $_ENV['APP_NAME'] }} Blog</title>
</head>

<body class="bg-zinc-800 text-white">
    @include('layouts.navbar')
    <h1 class="text-center display-1">Hello, Blog</h1>
</body>

</html>
