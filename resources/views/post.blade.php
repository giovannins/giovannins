@extends('layout')
@section('content')
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
@endsection