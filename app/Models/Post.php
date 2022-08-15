<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{
    public static function find($id)
    {
        if (!file_exists($path = \resource_path("posts/{$id}.html"))) {
            throw new ModelNotFoundException();
        }

        return \cache()->remember("posts.{$id}", 1200, fn() => \file_get_contents($path));
        // return file_get_contents($path);
    }
}
