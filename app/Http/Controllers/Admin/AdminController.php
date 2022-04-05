<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Moles;

class AdminController extends Controller
{
    function add_catagory(){
        return view('Admin.catagory.index');
    }
}
