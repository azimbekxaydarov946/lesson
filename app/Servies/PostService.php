<?php

namespace App\Servies;

use App\Fields\TextField;
use App\Models\Post;

class PostService extends Servies
{
    protected $modelClass = Post::class;

    public function getFields()
    {
        return [
            TextField::make('name'),
            TextField::make('slug'),
            TextField::make('image')
         ];
    }
}
