<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Resources\Blog;
use App\Models\Resources\Post;
use App\Models\Resources\Follower;


use Illuminate\Http\Controllers\Requests;
use App\Http\Requests\NewUserRequest;
use App\Http\Requests\UpdateUserRequest;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
    public function indexAdmin() {
        
        return view('admin.admin');
       
    }

    public function showUser(){
         
        $users = User::paginate(5);
        return view('admin.showuser')->with('users', $users); 
    }

    public function createUser(){

        return view('admin.createuser');
    }

    public function storeUser(NewUserRequest $request){

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }
        $user = new User;
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make('password');
        $user->role = 'staff';
        $user->image = $imageName;
        $user->fill($request->validated());

        $user->save();

  

            if (!is_null($imageName)) {
                $destinationPath = public_path() . '/images/users';
                $image->move($destinationPath, $imageName);
            };    

        return redirect()->action('AdminController@indexAdmin');
    }

    public function editUser($username){
        
        $user = User::where('username', $username)->get();
        
        return view('admin.edituser')->with('user', $user); 
    }

    public function updateUser(UpdateUserRequest $request, $username){
        $user = User::where('username', $username)
       ->update(['name' => $request->input('name'), 
                'surname' => $request->input('surname'), 
                'email' => $request->input('email'), 
                'username' => $request->input('username')]);

        return view('end');
    }

    public function deleteUser($username){

        User::where('username', $username)->delete();

        return redirect()->action('AdminController@showUser');
    }

 

    public function showBlogs(){
        $blogs = Blog::all();
        return view('admin.showblogsadmin')->with('blogs', $blogs);
    }

    public function showBlog($blogId){
       
        $follower = Follower::where('blogId', $blogId)->paginate();
        $blog = Blog::where('blogId', $blogId)->paginate();
        $post = Post::where('blogId', $blogId)->orderBy('updated_at', 'asc')->paginate();

        return view('admin.showblogadmin')
        ->with('follower', $follower)
        ->with('blog', $blog)
        ->with('posts', $post);
    }

    
    // info 

    public function info(){

        $n_blog = DB::table('blog')->count();

        $n_post = DB::table('post')->count();

        $n_follower = DB::table('follower')->count();

        $avg_post = $n_post / $n_blog ;
        $avg_follower = $n_follower / $n_blog ;

        return view('admin.info')->with('n_blog', $n_blog)->with('n_post', $n_post)->
        with('avg_post', $avg_post)->with('avg_follower', $avg_follower);
    } 


}
