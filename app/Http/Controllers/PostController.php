<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Section;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.posts', ['posts'=>$posts] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $sections = Section::all();
        return view('posts.create', ['sections'=>$sections]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            "id" => 'required|numeric',
            "title" => 'required|string',
            "image" => 'required|string',
            "description" => 'required|string',
        ]);   

        Post::create($validated);
        toastr()->success('El post se a creado con éxito!', 'Notificación');
        return redirect(route('sections.index',$request->id));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        $sections = Post::find($id)->sections;

        return view('posts.show',['posts'=>$post, 'sections'=>$sections,'comments' => Comment::where('post_id',$id)->with('user')->latest()->get(),'state'=>'Insertable'] );
    }
    /**
     * Vista a los posts creados de la empresa
     */
    public function viewPosts(): View
    {
        $posts = Post::latest()->paginate(5);
        return view('posts.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::find($id);
        return view('posts.edit', ['posts'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        $validated = $request->validate([
            "id" => 'required|numeric',
            "title" => 'required|string',
            "image" => 'required|string',
            "description" => 'required|string',
        ]);   

        $post->update($validated);
        
        return redirect(route('sections.index',$request->id));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post):RedirectResponse
    {        
        $post->delete();
        toastr()->success('El post se elimino de forma correcta!', 'Notificación');
        return redirect(route('ListPost'));
    }
}
