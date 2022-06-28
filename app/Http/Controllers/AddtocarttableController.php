<?php

namespace App\Http\Controllers;
use App\Models\Addtocarttable;
use Illuminate\Http\Request;

class AddtocarttableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $addtocarttables = Addtocarttable::all();

        return response()->json($addtocarttables); 
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
       $addtocarttable = new Addtocarttable();
      
       $addtocarttable->dish_id = $request->dish_id ;
       $addtocarttable->cart_id = $request->cart_id ;
       $addtocarttable->quantity = $request->quantity ;
      

      $addtocarttable->save();
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
       $addtocarttable = Addtocarttable::find($id);
      
       $addtocarttable->dish_id = $request->dish_id ;
       $addtocarttable->cart_id = $request->cart_id ;
       $addtocarttable->quantity = $request->quantity ;

       $addtocarttable->save();
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
         $addtocarttable = Addtocarttable::find($id) ;  
         $addtocarttable->delete();

       // On retourne la réponse JSON
         return response()->json();
    }
}
