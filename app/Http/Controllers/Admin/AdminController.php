<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    function index(){
        if(Auth::check()){
        return view('admin.index');
        }
    }
}
