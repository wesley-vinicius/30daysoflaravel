<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository 
{
    protected $post;

    function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getAll()
    {
        return $this->post->all();
    }
}
