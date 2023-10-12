<?php
namespace App\Http\Controllers;

use App\Models\Resources\Notifications;
use App\Models\Resources\Post;
use App\Models\Resources\Blog;
use App\Models\Resources\Follower;
use App\User;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class NotificationController extends Controller{
    
   

    public function createNotifications($blogId){
        
        $sender = auth()->user()->username;
       
        $notify = DB::table('follower')->join('blog', 'follower.blogId', '=', 'blog.blogId')
        ->where('blog.blogId', $blogId)->get();

            foreach($notify as $not){
                $notification = new Notifications;
                $notification->recipient = $not->follower;
                $notification->sender = Auth::user()->username;
                $notification->blogId = $not->blogId;
                $notification->created_at = carbon::now();
                $notification->updated_at = carbon::now();
                $notification->save();

            }
        
        $blog = DB::table('blog')->where('blogId', $blogId)->get();
            
            foreach($blog as $b){
                $notification = new Notifications;
                $notification->recipient = $b->username_user_create;
                $notification->sender = Auth::user()->username;
                $notification->blogId = $b->blogId;
                $notification->created_at = carbon::now();
                $notification->updated_at = carbon::now();
                $notification->save();
            }

    if (Gate::allows('isUser')){
        //return redirect()->action('UserController@index');
        return view('end');
    } elseif (Gate::allows('isStaff')){
        //return redirect()->route('staff');
        return view('end');
    } else {
        //return redirect()->route('admin');
        return view('end');
    }
    }

    public function setreadNotifications($notificationId){

        $notification = Notifications::where('notifyId', $notificationId)
        ->update(['read' => 1]);

        return redirect()->action('UserController@index');
    }
}