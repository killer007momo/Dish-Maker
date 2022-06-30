<?php

namespace App\Http\Controllers;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dish = Dish::all();
        return response()->json($dish);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dish  =  Dish::create($request->all());
         return response()->json(null,202);
        /*
        $dish = new Dish();
        $dish->description = $request->description ;
        $dish->options =  $request->options ;
        $dish->name = $request->name ;
        $dish->price =  $request->price ;
        $dish->ondemand  = $request->ondemand ;
        $dish->labels = $request->labels ;
        $dish->deliverytimestamp =  $request->deliverytimestamp ;
        $dish->holiday_id = $request->holiday_id ;
        $dish->user_id =  $request->user_id ;
       

        $dish->save();
       // On crée un nouvel utilisateur
        return response()->json();
        dd($dish);
       // On retourne les informations du nouvel utilisateur en JSON

       */
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
        $dish =  Dish::find($id);
        $dish->update($request->all());
        return response()->json(null,202);
        /*
        $dish = Dish::find($id);

        $dish->description = $request->description ;
        $dish->options =  $request->options ;
        $dish->name = $request->name ;
        $dish->price =  $request->price ;
        $dish->ondemand  = $request->ondemand ;
        $dish->labels = $request->labels ;
        $dish->deliverytimestamp =  $request->deliverytimestamp ;
        $dish->holiday_id = $request->holiday_id ;
        $dish->user_id =  $request->user_id ;
       

        $dish->save();
        return response()->json();
    */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $dish = Dish::find($id) ;  
         $dish->delete();

        // On retourne la réponse JSON
       return response()->json();
    }
}
