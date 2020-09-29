<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function user(){
      $users = User::all();
      return view('admin.user', ['users' => $users]);
    }
}
