<?php

namespace App\Http\Controllers ;

use App\Models\Deliverychoices ;

use Illuminate\Http\Request ;

class DeliverychoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliverychoices = Deliverychoices::all();
        return response()->json($deliverychoices);
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
       
        $deliverychoice = new Deliverychoices();

        $deliverychoice->dish_id = $request->dish_id ;
        $deliverychoice->picturepath =  $request->picturepath ;

        $deliverychoice->save();
       // On crée un nouvel utilisateur
        return response()->json();
       // dd($deliverychoice);
       // On retourne les informations du nouvel utilisateur en JSON
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
         $deliverychoice = Deliverychoices::find($id);

        $deliverychoice->dish_id = $request->dish_id ;
        $deliverychoice->picturepath =  $request->picturepath ;

        $deliverychoice->save();
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
         $deliverychoice = Deliverychoices::find($id) ;  
         $deliverychoice->delete();

         // On retourne la réponse JSON
         return response()->json();
    }
}
