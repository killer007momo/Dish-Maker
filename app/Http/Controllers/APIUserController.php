<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class APIUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

   
        return response()->json($users);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|max:100',
        'email' => 'required|email|unique:users',
        'phone' => 'required|phone|unique:users',
        'password' => 'required|min:8'
    ]);

    // On crée un nouvel utilisateur
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'password' => bcrypt($request->password)
    ]);

    // On retourne les informations du nouvel utilisateur en JSON
    return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
       return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
         // La validation de données
    $this->validate($request, [
        'name' => 'required|max:100',
        'email' => 'required|email',
        'phone' => 'required|phone',
        'password' => 'required|min:8'
    ]);

    // On modifie les informations de l'utilisateur
    $user->update([
        "name" => $request->name,
        "email" => $request->email,
         "phone" => $request->phone ,
        "password" => bcrypt($request->password)
    ]);

    // On retourne la réponse JSON
    return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
         // On supprime l'utilisateur
    $user->delete();

    // On retourne la réponse JSON
    return response()->json();
    }
}
