<?php

namespace App\Http\Controllers;

//use App\User;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class RecipeController extends Controller
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

$dinner = DB::table('recipes')
    ->get();

        return view('recipe.index', compact('dinner'));
    }

    public function showRecipe($fid){
        $gethisdinner = DB::table('recipe')
            ->join('ingredients', 'ingredients.recipe_id','=','recipe.recipe_id')
            //       ->join('userpics', 'userpics.user_id' , '=' , 'users.id' )
            //          ->select('users.*', 'userpics.pic')

            ->where('recipe.recipe_id','=',$fid)
            ->get();
        return view('recipe.show', compact('gethisdinner'));
    }

}
