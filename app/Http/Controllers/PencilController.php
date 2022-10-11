<?php

namespace App\Http\Controllers;

//use App\User;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use Auth;

class PencilController extends Controller
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
        $ur = Auth::user();


        $arts  = DB::table('art')
            ->where('id','>','1')
            ->paginate(6);


        return view('pencil', compact('arts',));
    }
}
