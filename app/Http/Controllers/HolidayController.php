<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Models/Holiday;


class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $holidays = Holiday::all();
       
       // dd($users);
        return response()->json($holidays);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $holiday = new Holiday();

        $holiday->nom = $request->nom ;
        $holiday->description = $request->description ;
        $holiday->datedebut = $request->datedebut ;
        $holiday->datefin =  $request->datefin ;
        $holiday->menu_id =  $request->menu_id ;

        $holiday->save();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
          $holiday = new Hdoliday();
        $holiday->description = $request->description ;
        $holiday->name =  $request->name ;
        $holiday->datedebut = $request->datedebut ;
        $holiday->datedefin =  $request->datedefin ;
        $holiday->menu_id = 1 ;
     

        $holiday->save();
       
        dd($holiday);
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
        $holiday =  Hdoliday::find($id);
        $holiday->description = $request->description ;
        $holiday->name =  $request->name ;
        $holiday->datedebut = $request->datedebut ;
        $holiday->datedefin =  $request->datedefin ;
        $holiday->menu_id = 1 ;
     

        $holiday->save();
       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           // On supprime l'utilisateur
       $holiday = holiday::find($id) ;  
       $holiday->delete();

        // On retourne la réponse JSON
       return response()->json();
    }
}
