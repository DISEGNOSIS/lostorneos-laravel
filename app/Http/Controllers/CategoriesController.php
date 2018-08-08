<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;


class CategoriesController extends Controller
{
    public function show($slug) {
        $category = Category::with('posts')->where('slug', 'LIKE', $slug)->first();
        return view('categories.show', compact('category'));
    }

}
