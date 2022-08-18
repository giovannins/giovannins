<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $post->title }} - {{ $_ENV['APP_NAME'] }} Post </title>
</head>

<body class="bg-zinc-800 text-white">
    @include('layouts.navbar')
    <div class="mt-2">
        <div class="lg:mx-80 md:mx-40 mx-20 my-8">
            <article class="">
                <h1 class="md:text-4xl text-3xl">
                    {{ $post->title }}
                </h1>
                <div class="text-lg p-4">
                    <?= $post->body ?>
                </div>
                <div class="flex flex-row-reverse md:text-xs text-sm ">
                    <span>{{ $post->date }}</span>
                </div>
            </article>
            <a href="/blog" class="text-blue-400 hover:text-blue-800">Go back</a>
        </div>
    </div>
</body>

</html>
