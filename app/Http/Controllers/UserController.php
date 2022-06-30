<?php


namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Plat;
use App\Models\Menu;
use App\Models\Ingredient;

use App\Models\Adresse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
   
    public function index()
   
    {

        $users = User::all();
       
       // dd($users);
        return response()->json($users);
       
    }

      public function index_id($id)
    
    {

        $users = User::find($id);
       
       // dd($users);
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
         $user  =  User::create($request->all());
          return response()->json(null,202);
        /*
        $user = new User();
        $user->name = $request->name ;
        $user->email =  $request->email ;
        $user->phone = $request->phone ;
        $user->sexe =  $request->sexe ;
        $user->hassignedhiscgu  = $request->hassignedhiscgu ;
        $user->adresse_id = 1 ;
        $user->password =  bcrypt($request->password) ;

        $user->save();
       // On crée un nouvel utilisateur
        dd($user);
       // On retourne les informations du nouvel utilisateur en JSON
        *
        
        */

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
    public function update(Request $request,$id)
   
    {
         // La validation de données
        $user = User::find($id) ;
        $user->update($request->all());
        // On modifie les informations de l'utilisateur
       /* $user->name = $request->name ;
        $user->email =  $request->email ;
        $user->phone = $request->phone ;
        $user->sexe =  $request->sexe ;
        $user->hassignedhiscgu  = $request->hassignedhiscgu ;
        $user->password =  bcrypt($request->password) ;

        $user->save();
        */
        // On retourne la réponse JSON
        return response()->json(null,202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
         // On supprime l'utilisateur
       $user = User::find($id) ;  
       $user->delete();
     //  dd($id);
        // On retourne la réponse JSON
       return response(null,204);

    }
}
