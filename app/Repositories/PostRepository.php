<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
     public function paginate($limit = 10)
    {
        return Post::orderBy('created_at', 'desc')->paginate($limit);
    }
    public function find($id)
    {
        return Post::findOrFail($id);
    }

    public function create(array $data)
    {
        return Post::create($data);
    }

    public function update($id, array $data)
    {
        $post = $this->find($id);
        $post->update($data);
        return $post;
    }

    public function delete($id)
    {
        $post = $this->find($id);
        return $post->delete();
    }
}

