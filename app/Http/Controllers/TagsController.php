<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;


class TagsController extends Controller
{
    public function posts($slug) {
        $tag = Tag::with('posts')->where('slug', 'LIKE', $slug)->first();
        return view('tags.show', compact('tag'));
    }

}
