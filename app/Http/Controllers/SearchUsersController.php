<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SearchUsersRequests;


class SearchUsersController extends Controller

{
  public function indexSearchUsers()
  {    
      return view('searchuser.searchusers');
  }
  
  public function procesSearchUsers(SearchUsersRequests $request)
  {
      $name = $request->input('name');
      $surname = $request->input('surname');
      $username = $request->input('username');

      $users = User::where('username','like','%' . $username . '%')
      ->where('name', 'like', '%' . $name . '%')
      ->where('surname', 'like', '%' . $surname . '%')
      ->where('role','user')->orderBy('username', 'asc')
      ->get();

      /* Do something with data */

      return view('searchuser.usershowcontact')->with('users', $users);
  }
}