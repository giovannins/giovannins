<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{

    public $id, $title, $excerpt, $date, $body;

    public function __construct($id, $title, $excerpt, $date, $body)
    {
        $this->id = $id;
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }

    public static function find($id)
    {
        return static::all()->firstWhere('id', $id);
    }

    public static function all()
    {
        return collect(File::files(resource_path('posts')))->map(function ($file) {
            $document = YamlFrontMatter::parseFile($file);
    
            return new Post(
                $document->id,
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body()
            );
        })->reverse();
    }
}
