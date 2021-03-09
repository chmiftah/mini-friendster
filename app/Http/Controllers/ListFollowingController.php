<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ListFollowingController extends Controller
{
    //
    public function index()
     {      $user=User::where('hash', auth()->user()->hash)->orWhere('username', auth()->user()->username)->firstOrFail();

         $follows= $user->follows()->get();
        // $follows= $user->followers()->get();
     //   dd($user);
     return view('follows.list',compact('follows'));
    }
}
