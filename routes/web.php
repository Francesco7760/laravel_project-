<?php

use Illuminate\Support\Facades\Route;



        // home page
Route::get('/', 'GuestController@indexHome')
        ->name('home');

        // home page utente admin

Route::get('/admin', 'AdminController@indexAdmin')
        ->name('admin')->middleware('can:isAdmin');

        // home page utente user

Route::get('/user', 'UserController@index')
        ->name('user')->middleware('can:isUser');

      // home page utente staff

Route::get('/staff', 'StaffController@index')
        ->name('staff')->middleware('can:isStaff');


        // Rotte per l'autenticazione

Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

        // Rotte per la registrazione

Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@register');


 
// rotte legale ad 'user'

/* ############################################################################## */

Route::get('/user/mypost', 'UserController@myPost')
        ->name('user.mypost')->middleware('can:isUser');

Route::get('/user/updateaccount', 'UserController@editAccount')
        ->name('edit.account')->middleware('can:isUser');

Route::put('/user/updateaccount', 'UserController@updateAccount')
        ->name('update.account')->middleware('can:isUser');      
        
Route::get('/user/mypost/showpost/{postId}', 'PostController@showPost')
        ->name('show.mypost')->middleware('can:isUser');
        
Route::get('/user/post/showpost/{postId}/update', 'PostController@editPost')
        ->name('edit.post')->middleware('can:isUser');  

Route::get('/user/followers' , 'FollowerController@indexFollower') 
        ->name('user.followers')->middleware('can:isUser');

Route::get('/user/blog/{blogId}', 'UserController@indexBlog')        
        ->name('user.blog')->middleware('can:isUser');

Route::get('/user/blog/{blogId}/createpost', 'PostController@createPost')
        ->name('create.post')->middleware('can:isUser');

Route::get('/user/blog/showpost/{postId}', 'PostController@showPost')
        ->name('show.post')->middleware('can:isUser');

Route::delete('/home/user/blog/{blogId}/delete', 'UserController@deleteBlog')
        ->name('delete.blog.user')->middleware('can:isUser');

Route::delete('/users/follower/{followerId}/delete', 'FollowerController@deleteFollower')
        ->name('delete.follower')->middleware('can:isUser');

Route::get('/user/createblog', 'UserController@createBlog')
        ->name('create.blog')->middleware('can:isUser');

Route::post('/user/storeblog', 'UserController@storeBlog')
        ->name('store.blog');         

        // rotte follower

Route::delete('/users/follower/{followerId}/delete', 'FollowerController@deleteFollower')
        ->name('delete.follower');

Route::put('/user/addfollower/{blogId}/{sender}/{requestId}' , 'FollowerController@createFollower')
        ->name('create.follower');

Route::post('/user/storefollower/{usernamefollower}' , 'FollowerController@storeFollower')
        ->name('store.follower');


Route::delete('/admin/blog/{blogId}/delete', 'UserController@deleteBlog')
        ->name('delete.blog.admin');


        // rotte per CRUD post

Route::post('/home/createpost/{blogId}', 'PostController@storePost')
       ->name('create.post.store');

Route::delete('/home/post/{postId}', 'PostController@deletePost')
     ->name('post.delete'); 

        // rotte edit post
        

        // rotte update post

Route::put('/post/{postId}/update', 'PostController@updatePost')
   ->name('update.post');




        
        
// rotte legate al utente staffstaff

/* ################################################################################### */

Route::get('/staff/showblogs' , 'StaffController@showBlogs')
        ->name('show.blogs')->middleware('can:isStaff');

Route::get('/staff/showblog/{blogId}', 'StaffController@showBlog')
        ->name('show.blog')->middleware('can:isStaff');

Route::get('/staff/blog/{blogId}/createpost', 'PostController@createPost')
        ->name('create.post.staff')->middleware('can:isStaff');

Route::delete('/staff/showblog/{blogId}/delete', 'StaffController@deleteBlog')
        ->name('delete.blog.staff')->middleware('can:isStaff');

Route::put('/staff/showblog/{blogId}/block', 'StaffController@blockBlog')
      ->name('block.blog.staff');

//Route::put('/staff/showblog/{blogId}/unlock', 'StaffController@unlockBlog')
  //      ->name('unlock.blog.staff');

Route::get('/staff/blog/showpost/{postId}', 'PostController@showPost')
        ->name('show.post.staff')->middleware('can:isStaff');

Route::get('/staff/post/showpost/{postId}/update', 'PostController@editPost')
        ->name('edit.post.staff')->middleware('can:isStaff'); 

// rotte legate al utente admin

/* ################################################################################### */

Route::get('/admin/users', 'AdminController@showUser')
        ->name('show.users')->middleware('can:isAdmin');

Route::get('/admin/showblogs' , 'AdminController@showBlogs')
        ->name('show.blogs.admin')->middleware('can:isAdmin');

Route::get('/admin/showblog/{blogId}', 'AdminController@showBlog')
        ->name('show.blog.admin')->middleware('can:isAdmin');

Route::put('/admin/showblog/{blogId}/unlock', 'StaffController@unlockBlog')
        ->name('unlock.blog.admin')->middleware('can:isAdmin');

Route::get('/admin/blog/{blogId}/createpost', 'PostController@createPost')
        ->name('create.post.admin')->middleware('can:isAdmin');

Route::get('/admin/post/showpost/{postId}/update', 'PostController@editPost')
        ->name('edit.post.admin')->middleware('can:isAdmin'); 

Route::get('/admin/blog/showpost/{postId}', 'PostController@showPost')
        ->name('show.post.admin')->middleware('can:isAdmin');

Route::get('/admin/createuser', 'AdminController@createUser')
        ->name('create.user')->middleware('can:isAdmin');

Route::post('/admin/storeuser', 'AdminController@storeUser')
        ->name('store.user')->middleware('can:isAdmin');

Route::get('/admin/user/{username}/edit', 'AdminController@editUser')
        ->name('edit.user')->middleware('can:isAdmin');

Route::put('/admin/user/{username}/update', 'AdminController@updateUser')
        ->name('update.user')->middleware('can:isAdmin');

Route::delete('/admin/user/{username}/delete','AdminController@deleteUser')
        ->name('delete.user')->middleware('can:isAdmin');

Route::get('/admin/info', 'AdminController@info')
        ->name('info')->middleware('can:isAdmin');

Route::get('/createpost/{blogId}/notify', 'NotificationController@createNotifications')
        ->name('notify');

Route::put('/user/{notifyId}/delete', 'NotificationController@setreadNotifications')
        ->name('read_notify');        





// rotte 'search'

/* ################################################################ */

Route::get('/search', 'SearchUsersController@indexSearchUsers')
        ->name('search.users.index');

Route::put('/search', 'SearchUsersController@procesSearchUsers')
        ->name('search.users.proces');

Route::get('/search/{id}/{username}', 'GuestController@showUserInfo')
        ->name('show.user.info');

Route::get('/user/search/user/sendrequest/{blogId}', 'RequestsController@sendRequests')
        ->name('send.request');

Route::put('/user/user/deleterequest/{requestId}', 'RequestsController@deleteRequests')
        ->name('delete.request');


// avvisi 

/* ################################################################### */

Route::get('/create/allert/block/{blogId}', 'AllertController@createAllertblock')
        ->name('create.allert.block');

Route::get('/create/allert/unlock/{blogId}', 'AllertController@createAllertunlock')
        ->name('create.allert.unlock');

Route::post('/create/allert/{blogId}', 'AllertController@storeAllert')
        ->name('create.allert.store');

Route::put('/{allertId}/delete','AllertController@setreadAllert')
        ->name('read_allert');

Route::get('/register/createblog', 'UserController@createBlog')
        ->name('create.blog.guest');