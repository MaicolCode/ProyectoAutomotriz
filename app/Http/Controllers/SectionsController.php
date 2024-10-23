<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Section;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {      
        $sections = Section::where('post_id',$id)->get();
        $post=Post::findOrFail($id);
        return view('posts.sections',['sections'=>$sections,'post'=>$post]);     
    }

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
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            "post_id" => 'required',
            "subtitle" => 'required',
            "content" => 'required',
            "images" => 'required',
        ]);

        Section::create($validated);

        toastr()->success('La sección se creo exitosamente!', 'Notificación');
        
        return redirect(route('sections.index',$request->post_id));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sections = Section::find($id);
        return view('posts.editsect', ['sections'=>$sections]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $section)
    {
        $validated = $request->validate([
            "post_id" => 'required',
            "subtitle" => 'required',
            "content" => 'required',
            "images" => 'required',
        ]);

        $section->update($validated);
        toastr()->info('La sección se edito exitosamente!', 'Notificación');        
        return redirect(route('sections.index',$request->post_id));  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section):RedirectResponse
    {   
        $post = $section->post_id;
        
        $section->delete();
        toastr()->success('La sección se elimino exitosamente!', 'Notificación');
        return redirect(route('sections.index',$post));
    }
}
