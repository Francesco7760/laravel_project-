<?php
namespace App\Http\Controllers;

use App\Models\Resources\Notifications;
use App\Models\Resources\Post;
use App\Models\Resources\Blog;
use App\Models\Resources\Follower;
use App\Models\Resources\Requests;
use App\Users;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RequestsController extends Controller{
    
   

    public function sendRequests($blogId){

        $req = new Requests;
        $req->sender = Auth::user()->username;
        $req->blogId = $blogId;
        $req->created_at = Carbon::now();
        $req->updated_at =Carbon::now();
        $req->save();

        return view('end');
        //return redirect()->action('UserController@index');
    }

    public function deleteRequests($requestId){

        $requets = DB::table('requests')
        ->where('requestId',$requestId )->update(['read' => 1]);

        return redirect()->action('UserController@index');
    }
}