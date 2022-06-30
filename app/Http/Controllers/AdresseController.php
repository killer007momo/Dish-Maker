<?php

namespace App\Http\Controllers;

use App\Models\Adresse;

use Illuminate\Http\Request;

class AdresseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $adresse = Adresse::all();

        return response()->json($adresse);
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
          $adresse  =  Adresse::create($request->all());
          return response()->json(null,202);
        /*
       $adresse = new Adresse();

       $adresse->adresse1 = $request->adresse1 ;
       $adresse->adresse2 = $request->s ;
       $adresse->country = $request->country ;
       $adresse->postalcode = $request->postalcode ;
       $adresse->city = $request->city ;

      $adresse->save();
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
        $adresse =  Adresse::find($id);
        $adresse->update($request->all());
         return response()->json(null,202);
        /*
       $adresse =  Adresse::find($id);
       $adresse->adresse1 = $request->adresse1 ;
       $adresse->adresse2 = $request->adresse2 ;
       $adresse->country = $request->country ;
       $adresse->postalcode = $request->postalcode ;
       $adresse->city = $request->city ;

      $adresse->save();
      return response()->json($adresse);
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
         $adresse = Adresse::find($id) ;  
         $adresse->delete();

        // On retourne la réponse JSON
         return response()->json();
    }
}
