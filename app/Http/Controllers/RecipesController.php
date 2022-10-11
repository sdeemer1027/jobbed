<?php

namespace App\Http\Controllers;

use App\Models\recipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function show(recipes $fid)
    {
        $gethisdinner = DB::table('recipes')
            ->join('ingredients', 'ingredients.recipe_id','=','recipes.recipe_id')
            //       ->join('userpics', 'userpics.user_id' , '=' , 'users.id' )
            //          ->select('users.*', 'userpics.pic')

            ->where('recipes.recipe_id','=',$fid)
            ->get();
        return view('recipe.show', compact('gethisdinner'));
    }

/*
public function showRecipe($fid){
        $gethisdinner = DB::table('recipes')
            ->join('ingredients', 'ingredients.recipe_id','=','recipes.recipe_id')
            //       ->join('userpics', 'userpics.user_id' , '=' , 'users.id' )
            //          ->select('users.*', 'userpics.pic')

            ->where('recipes.recipe_id','=',$fid)
            ->get();
        return view('recipe.show', compact('gethisdinner'));
    }

*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function edit(recipes $recipes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recipes $recipes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function destroy(recipes $recipes)
    {
        //
    }
}
