<?php

namespace App\Http\Controllers;

use App\User;

use App\Models\Resources\Blog;
use App\Models\Resources\Follower;
use App\Models\Resources\Post;
use App\Models\Resources\Allert;
use App\Models\Resources\Notifications;
use App\Models\Resources\Requests;

use Carbon\Carbon;

use App\Http\Requests\UpdateAccountRequests;
use App\Http\Requests\UpdateNameAccountRequests;
use App\Http\Requests\UpdateSurameAccountRequests;
use App\Http\Requests\UpdateUsernameAccountRequests;
use App\Http\Requests\UpdateEmailAccountRequests;
use App\Http\Requests\NewBlogRequests;



use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller{
    
    // - modificare profilo personale (edit e update)

    public function index() {
        
        $follower = Follower::join('blog','follower.blogId','=','blog.blogId')
        ->where('follower', Auth::user()->username)->get();

        $blogs = Blog::where('username_user_create', Auth::user()->username)
        ->where('block', 0)->get();
        
       $notification = Notifications::join('blog', 'notifications.blogId', '=', 'blog.blogId')
        ->where('recipient', Auth::user()->username)->where('read', 0)
        ->orderBy('notifications.created_at','asc')->get(); 

        $request = Requests::join('blog', 'requests.blogId','=','blog.blogId')
        ->where('username_user_create', Auth::user()->username)->where('read', 0)
        ->orderBy('requests.created_at','asc')->get();

        $allert = Allert::join('blog','blog.blogId','=', 'allert.blogId')
        ->where('blog.username_user_create', Auth::user()->username)
        ->where('read', 0)
        ->get();

        return view('user.user')->with('blogs', $blogs)
        ->with('follower', $follower)
        ->with('notifications', $notification)
        ->with('request', $request)
        ->with('allert', $allert);
    }

    public function editAccount(){
         
        $user = User::where('username', Auth::user()->username)->get();
        return view('user.editAccount')->with('user', $user);

    }
   
    public function updateAccount(UpdateAccountRequests $request){

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }

        $user = User::where('username', Auth::user()->username)
       ->update(['name' => $request->input('name'), 
       'surname' => $request->input('surname'), 
       'email' => $request->input('email'), 
       'username' => $request->input('username'), 
       'image' => $imageName]);

       if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/users';
            $image->move($destinationPath, $imageName);
        };  
        return redirect()->action('UserController@index');

    }

   
    // creare, modificare, eliminare BLOG

    public function indexBlog($blogId){

        $posts = Post::where('blogId', $blogId)->paginate(5);
        $blogs = Blog::where('blogId', $blogId)->get();

        return view('user.showblog')->with('posts', $posts)->with('blogs', $blogs);
    }

    public function createBlog()
    {
        return view('user.createblog');
    }

    public function storeBlog(NewBlogRequests $request)
    {   
        $autore = auth()->user()->username;

        $blog = new Blog;
        $blog->title_blog = $request->input('title');
        $blog->username_user_create = $autore;
        $blog->tag_1 = $request->input('tag_1');
        $blog->tag_2 = $request->input('tag_2');
        $blog->tag_3 = $request->input('tag_3');
        $blog->desc = $request->input('desc');
        $blog->fill($request->validated());
        $blog->save();

        return redirect()->route('create.post', [$blog]); 
      
        }

    public function deleteBlog($blogId){
    
        Blog::where('blogId', $blogId)->delete();

        return redirect()->route('user');
    
    }

    public function myPost(){
        // join tra post e blog
        $myposts = DB::table('post')
            ->join('blog','post.blogId','=','blog.blogId')
            ->where('username_post_create', Auth::user()->username)
            ->orderBy('post.created_at','asc')->paginate();
        return view('user.showmypost')->with('myposts', $myposts);
    }

}