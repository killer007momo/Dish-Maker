<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Plat;
use App\Models\Menu;
use App\Models\Ingredient;

use App\Models\Adresse;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plat = Plat::all();
       
        return response()->json($plat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plat = new Plat();
        $plat->menu_id = $request->menu_id ;
        $plat->user_id = $request->user_id ;
        $user->save();
         return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $plat =  Plat::find($id);
        $plat->menu_id = $request->menu_id ;
        $plat->user_id = $request->user_id ;
        $user->save();
        
         return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plat = Plat::find($id) ;  
        $plat->delete();

        // On retourne la réponse JSON
        return response()->json();
    }
}
