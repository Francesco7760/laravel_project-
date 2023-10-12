<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Resources\Blog;
use App\Models\Resources\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function indexHome() {
        return view('home');
       
    }

    public function showUserInfo($id , $username){

        $user = User::where('id', $id)->get();
        $blog = Blog::where('username_user_create', $username)->get();
        
        $follower = Follower::where('blogId',$id)->where('follower', Auth::user()->username)->get();

        if(!empty($follower)){
            $seguito = 0;
        } else {
            $seguito = 1;
        } 

        return view('guest.userinfo')->with('users', $user)->with('blog', $blog)->with('seguito', $seguito);
        
    }
}