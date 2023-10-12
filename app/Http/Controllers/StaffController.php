<?php 
namespace App\Http\Controllers;

use App\Http\Controllers;
use App\User;
use App\Models\Resources\Blog;
use App\Models\Resources\Post;

use Illuminate\Support\Facades\DB;

 class StaffController extends Controller{

    public function index(){
        return view('staff.staff');
    }
     
    public function showBlogs(){
            $blogs = Blog::all();
            return view('staff.showblogs')->with('blogs', $blogs);
     }

    public function showBlog($blogId){
       
        $post = Post::where('blogId', $blogId)->paginate();
        $blog = Blog::where('blogId', $blogId)->get();

        return view('staff.showblog')->with('blog', $blog)->with('post', $post);
    }

    public function deleteBlog($blogId){

        $blog = Blog::where('blogId', $blogId)->delete();
       
        return redirect()->action('StaffController@showBlogs');
    }

    public function blockBlog($blogId){

    $blog = Blog::where('blogId', $blogId)->update(['block'=> 1]);
    
    return redirect()->route('create.allert.block', $blogId);
    }

    public function unlockBlog($blogId){

        $blog = Blog::where('blogId', $blogId)->update(['block'=> 0]);
        
        return redirect()->route('create.allert.unlock', $blogId);
        }

 }