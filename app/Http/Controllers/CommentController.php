<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            "post_id"=>"required",
            "message"=>"string|max:200",  
        ]);

        $request->user()->comments()->create($validated);
        
        return redirect(route('comments.index',$request->post_id));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        $post = $comment->post_id;

        return view('posts.show',['post'=> $post, 'comments' => Comment::where('post_id',$comment->post_id)->with('user')->latest()->get(),'state'=>'Hola', 'chirp'=>$comment] );
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $this->authorize('update', $comment);

        $post_id = $comment->post_id;
 
        $validated = $request->validate([
            'post_id' => 'string',
            'message' => 'required|string|max:255',
        ]);
 
        $comment->update($validated);
        toastr()->success('El comentario fue editado correctamente!', 'Notificación');
        return redirect(route('comments.index',$post_id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $post_id = $comment->post_id;

        $this->authorize('delete', $comment);

        $comment->delete();
        
        toastr()->success('El comentario fue eliminado correctamente!', 'Notificación');
        return redirect(route('comments.index',$post_id));
        
    }
}
