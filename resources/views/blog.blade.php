@extends('layout')
@section('content')
    <?php foreach($posts as $post) : ?>
    <div class="lg:mx-48 md:mx-24 mx-12 my-8">
        <article class="">
            <h1 class="md:text-4xl text-3xl">
                <a href="/blog/<?= $post->id ?>" class="text-blue-400 hover:text-blue-800 transition">
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
    <hr class="lg:mx-48 md:mx-24 mx-12 opacity-20">
    <?php endforeach ?>
@endsection