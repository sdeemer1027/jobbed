<?php

namespace App\Http\Controllers;

//use App\Models\recipes;
use App\Models\weathers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        

//dd($request);







return view('weather.index', compact('request'));







/*
$dinner = DB::table('recipes')
    ->get();

        return view('recipe.index', compact('dinner'));
        */
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

   
   

   
}
