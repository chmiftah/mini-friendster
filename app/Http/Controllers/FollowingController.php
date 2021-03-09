<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class FollowingController extends Controller
{
    //
    public function index($identifier, $follow)
    {
        $user=User::where('hash', $identifier)->orWhere('username', $identifier)->firstOrFail();
        if($follow == "following")
        {
            $follows = $user->follows()->get();
        }else{
            $follows = $user->followers()->get();
        }
        return view('follows.index',compact('follows','follow'));
    }
}
