<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;

class CatagoryController extends Controller
{
    function index(){

        return view('Admin.catagory.index');
    }
    function add_catagory(){
        return view('Admin.catagory.add-catagory');
    }

    function insert_catagory(Request $req){
        $catagory = new Catagory();
        $catagory->name = $req->input('name');
        $catagory->description = $req->input('description');
        $catagory->featured = $req->input('featured');
        $catagory->active = $req->input('active');
        $catagory->save();
        return redirect('/catagory')->with('status','Catagory Added Successfuly');

    }
}
