<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = User::latest()->paginate();
        return view('users.index', ['users'=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            "name" => 'required|string',
            "email" => 'required|email',
            "password" => 'required|string|max:20'
        ]);    
        
        User::create($validated);   
        
        toastr()->success('El usuario fue creado exitosamente!', 'Notificación');
        return redirect(route('users.index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        $validated = $request->validate([
            "name" => 'required|string',
            "email" => 'required',
            "password" => 'required|string|max:20',
            "user_type" => 'string'
        ]);  

        $user->update($validated);
        toastr()->success('El usuario fue editado exitosamente!', 'Notificación');
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        toastr()->success('El usuario fue eliminado exitosamente!', 'Notificación');
        return redirect(route('users.index'));
    }
}
