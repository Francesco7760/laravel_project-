<?php 
namespace App\Http\Controllers;

use App\Models\Resources\Follower;
use App\Models\Resources\Requests;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\NewFollowerRequests;

class FollowerController extends Controller{
    
    public function indexFollower(){

        $follower =DB::table('follower')->join('blog','follower.blogId','=','blog.blogId')
        ->where('username_user_create', Auth::user()->username)->get();
        $blog = DB::table('blog')->where('username_user_create', Auth::user()->username)->get();
        return view('showfollower')->with('follower', $follower)->with('blog', $blog);
    }

    public function deleteFollower($followerId){

        Follower::where('followerId', $followerId)->delete();
        return redirect()->action('FollowerController@indexFollower');
    }

    public function createFollower($blogId, $sender, $requestId){

        $prove = Follower::where('blogId', $blogId)->where('follower', $sender)->get();

    if (is_null($prove)) {

        $follower = new follower;
        $follower->blogId = $blogId;
        $follower->follower = $sender; 
        $follower->created_at = carbon::now(); 
        $follower->updated_at = carbon::now();
        $follower->save();

        }

        $requets = DB::table('requests')
        ->where('requestId',$requestId )->update(['read' => 1]);

        return redirect()->action('UserController@index');

    }

  
}