<?php
namespace App\Http\Controllers;

use App\Models\Resources\Allert;
use App\Models\Resources\Post;
use App\Models\Resources\Blog;
use App\Models\Resources\Follower;
use App\User;
use Carbon\Carbon;

use App\Http\Requests\NewAllertRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AllertController extends Controller{
    
   public function createAllertBlock($blogId){

    return view('allert.createallertblock')->with('blogId', $blogId);

   }

   public function createAllertUnlock($blogId){

    return view('allert.createallertunlock')->with('blogId', $blogId);

   }

    public function storeAllert(NewAllertRequests $request, $blogId){
        
        $allert = new Allert;
        $allert->blogId = $blogId;
        $allert->cause = $request->input('cause');
        $allert->fill($request->validated());
        $allert->save();
        
    if (Gate::allows('isAdmin')){
        return redirect()->route('admin');
    } else {
        return redirect()->route('staff');
    } 
    
    }

    public function setreadAllert($allertId){

        $notification = Allert::where('allertId', $allertId)
        ->update(['read' => 1]);

        return redirect()->action('UserController@index');
    }
}