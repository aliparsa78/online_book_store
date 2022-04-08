<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    function index(){
        if(Auth::check()){
            $user = User::all();
        return view('admin.Users.index',compact('user'));
        }
    }
}
