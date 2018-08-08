<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;

class PostsTableSync extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        $tags = Tag::all();
        foreach($posts as $post) {
            dd($post);
            $post->tags()->sync([rand(1, $tags)]);
        }

    }
}
