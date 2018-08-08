<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;


class TagsController extends Controller
{
    public function posts($slug) {
        $category = Category::with('posts')->where('slug', 'LIKE', $slug)->first();
        return view('categories.show', compact('category'));
    }

}
