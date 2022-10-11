<?php

namespace App\Http\Controllers;

//use App\User;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use Auth;

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
        $ur = Auth::user();

     //   dd($ur);

        $uare=  DB::table('users')
            ->where('id','=',$ur->id)
            ->get();

        $users = DB::table('users')
            ->where('id','>','1')
            ->paginate(8);

$mypics = DB::table('userpics')
           ->where('user_id',$ur->id)
           ->get();


        return view('home', compact('users', 'uare','mypics'));
    }
}
