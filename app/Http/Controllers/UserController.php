<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //




    function showProfile($id){

        $userinfo  = DB::table('users')->where('users.id','=',$id)
         //   ->join('',)
  //       ->join('userpics', 'userpics.user_id' , '=' , 'users.id' )
  //          ->select('users.*', 'userpics.pic')
  //          ->groupBy('users.name')
        ->get();

        $userpics = DB::table('userpics')->where('user_id','=',$id)
            ->get();

//$string = $id;
        return   view('userprofileview', compact('userinfo','userpics'));

    }






}
