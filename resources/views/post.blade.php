@extends('layout')
@section('content')
    <div class="mt-2">
        <div class="lg:mx-40 md:mx-20 mx-4 my-8">
            <article class="">
                <h1 class="md:text-4xl text-3xl">
                    {{ $post->title }}
                </h1>
                <div class="text-lg p-4 text-justify leading-relaxed">
                    <?= $post->body ?>
                </div>
                <div class="flex flex-row-reverse md:text-xs text-sm ">
                    <span>{{ $post->date }}</span>
                </div>
            </article>
            <a href="/blog" class="text-blue-400 hover:text-blue-600 transition">Go back</a>
        </div>
    </div>
@endsection