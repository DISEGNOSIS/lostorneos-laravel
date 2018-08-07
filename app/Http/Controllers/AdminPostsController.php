<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;
use App\Post;
use App\Category;
use Carbon\Carbon;


class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $posts = Post::with('category', 'user')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate(request(), [
            'title' => 'required|string|min:3|max:255',
            'content' => 'required|string|min:20',
            'category' => 'required|string',
            'image' => 'image',
        ]);
            
        $post = new Post();
        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->content = $request->content;
        $post->user_id = \Auth::user()->id;
        
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $request->file('image')->extension();
            $newName = uniqid() . "." . $extension;
            $image->storeAs('public/img/posts', $newName);
            $post->image = $newName;
        }
        
        if($request->active) {
            $post->active = 1;
            $post->published_at = Carbon::now();
        } else {
            $post->active = 0;
            $post->published_at = '';
        }
        
        if($post->save()) {
            \Flash::success("La Noticia $post->title se ha creado con éxito.");
            return redirect()->route('admin.posts');
        } else {
            \Flash::error("La Noticia no se ha podido guardar. Por favor intentalo nuevamente.");
            return back();
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) {
        return view('admin.posts.show', compact('post'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'title' => 'required|string|min:3|max:255',
            'content' => 'required|string|min:20',
            'category' => 'required|string',
        ]);
            
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->content = $request->content;
        $post->user_id = \Auth::user()->id;
        
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $request->file('image')->extension();
            $newName = uniqid() . "." . $extension;
            $image->storeAs('public/img/posts', $newName);
            $old = $post->image;
            $post->image = $newName;
            Storage::delete($old);
        }
        
        if($request->active) {
            $post->active = 1;
            $post->published_at = Carbon::now();
        } else {
            $post->active = 0;
        }
        
        if($post->save()) {
            \Flash::success("La Noticia $post->title se ha actualizado con éxito.");
            return redirect()->route('admin.posts');
        } else {
            \Flash::error("La Noticia no se ha podido guardar. Por favor intentalo nuevamente.");
            return back();
        }
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return back();
    }

    public function search(Request $request) {
        $query = $request->input('query');
        $posts = Post::with('category', 'user')->where('title', 'LIKE', '%'. $query .'%')->orderBy('created_at', 'desc')->paginate(15);
        return $posts;
    }

    public function active($id) {
        $post = Post::findOrFail($id);
        if($post->active) {
            $post->active = 0;
            $post->save();
        } else {
            $post->active = 1;
            $post->published_at = Carbon::now();
            $post->save();
        }
        $posts = Post::with('category', 'user')->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.posts.index', compact('posts'));
    }
}
