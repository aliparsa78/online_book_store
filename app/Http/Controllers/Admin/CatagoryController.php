<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;

class CatagoryController extends Controller
{
    function index(){
        $catagory = Catagory::all();

        return view('Admin.catagory.index',compact('catagory'));
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
        // Fiel(image) Part
        if($req->file('image')){    
            $file = $req->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('category/',$filename);
            $catagory->image=$filename;
          }
          $catagory->save();
        return redirect('catagories')->with('status','Catagory Added Successfuly');
    }
    function edite_catagory($id){
        $catagory = Catagory::find($id);
        return view('admin.catagory.update',compact('catagory'));
    }

    function update_catagory(Request $req,$id){
        if(Auth::check()){
            $catagory = Catagory::find($id);
            $catagory->name = $req->name;
            $catagory->description = $req->description;
            $catagory->featured = $req->featured;
            $catagory->active = $req->active;
            // iamge part
            if($req->hasFile('new_image')){
                $path = "category/".$catagory->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $req->file('new_image');
                $exe = $file->getClientOriginalExtension();
                $filename = time().'.'.$exe;
                $file->move('category/',$filename);
                $catagory->image = $filename;
            }
            $catagory->update();
            return redirect('catagories')->with('status','Catagory Update Successfuly!');
        }
    }
}
