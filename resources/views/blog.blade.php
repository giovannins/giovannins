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
    <?php foreach($posts as $post) : ?>
    <div class="lg:mx-80 md:mx-40 mx-20 my-8">
        <article class="">
            <h1 class="md:text-4xl text-3xl">
                <a href="/blog/<?= $post->id ?>" class="text-blue-400 hover:text-blue-800">
                    {{ $post->title }}
                </a>
            </h1>
            <div class="text-lg p-4">
                {{ $post->excerpt }}
            </div>
            <div class="flex flex-row-reverse">
                <span>{{ $post->date }}</span>
            </div>
        </article>
    </div>
    <hr class="lg:mx-80 md:mx-40 mx-20 opacity-20">
    <?php endforeach ?>
</body>

</html>
