<?php
namespace App\Http\Controllers;

use App\Models\Resources\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\NewPostRequests;

use Illuminate\Support\Facades\Gate;

use App\Http\Requests\UpdatePostRequests;



class PostController extends Controller {

    public function indexPosts(){
        $posts = Post::all();

        if(Gate::allows('isUser')){
            return view('post.showposts')->with('posts', $posts);
        
        }else{
            return redirect()->route('admin');
        }
    }

    public function showPost($postId){
        $posts = Post::where('postId', $postId)->orderBy('created_at','asc')->get();
        return view('post.showpost')->with('posts', $posts);
    }

    public function createPost($blogId){

        return view('post.createpost')->with('blogId', $blogId);
    }
    
    public function storePost(NewPostRequests $request, $blogId){

        $autore = auth()->user()->username;

        $post = new Post;
        $post->title = $request->input('title');
        $post->blogId = $blogId;
        $post->username_post_create = $autore;
        $post->headline = $request->input('headline');
        $post->contenuto_1 = $request->input('contenuto_1');
        $post->contenuto_2 = $request->input('contenuto_2');
        $post->subtitle_1 = $request->input('subtitle_1');
        $post->subtitle_2 = $request->input('subtitle_2');
        $post->fill($request->validated());
        $post->save();
        
        return redirect()->route('notify', [$blogId]);

        
    }

    
    public function editPost($postId){
        $post = Post::where('postId', $postId)->get();
        return view('post.editpost')->with('post', $post);
    }

    public function updatePost(UpdatePostRequests $request, $postId){

        $post = Post::where('postId', $postId)
       ->update(['title' => $request->input('title'), 'headline' => $request->input('headline'),
       'contenuto_1' => $request->input('contenuto_1'), 'contenuto_2' => $request->input('contenuto_2'),
       'subtitle_1' => $request->input('subtitle_1'), 'subtitle_2' => $request->input('subtitle_2')]);
       
        return view('end');

    }

    public function deletePost($postId){

        Post::where('postId', $postId)->delete();

        if (Gate::allows('isUser')){
            return redirect()->action('PostController@indexPosts');
        } elseif (Gate::allows('isStaff')){
            return redirect()->action('StaffController@showBlogs');
        } else {
            return view('end');
            //return redirect()->route('admin');
        }
    }

}
