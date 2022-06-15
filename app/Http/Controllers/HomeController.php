<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Menu;
use App\Models\Adresse;
use App\Models\Plat;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $users = user::all();
        //$Ingredient = Ingredient::all();
        $menu = Menu::all();
        $plats = Plat::all();
       // dd($menu);
        return view('home',['users'=>$users,'plats'=>$plats,'menus'=>$menu]);
    }
}
