<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Catagory;
use Auth;
use File;
class BooksController extends Controller
{
    function index(){
        $book = Books::all();
        $catagory = Catagory::all();
        return view('Admin.Books.index',compact('book','catagory'));
    }

    function add_book(){
        if(Auth::check()){
            $catagory = Catagory::all();
            return view('admin.Books.add',compact('catagory'));
        }
    }
    function insert(Request $req){
        $book = new Books();
        $book->name = $req->input('name');
        $book->writer = $req->input('writer');
        $book->catagory_id = $req->input('cat_id');
        $book->qty = $req->input('qty');
        $book->original_price = $req->input('original_price');
        $book->selling_price = $req->input('selling_price');
        // image
        if($req->file('image')){
            $file = $req->file('image');
            $exe = $file->getClientOriginalExtension();
            $filename = time().'.'.$exe;
            $file->move('Books',$filename);
            $book->image = $filename;
        }
        $book->description = $req->input('description');
        $book->status = $req->input('status');
        $book->tax = $req->input('tax');
        $book->save();
        return redirect('/book')->with('sataus','Book Added Successfuly');
    }
    function edite(Request $req,$id){
        $book = Books::find($id);
        $catagory = Catagory::all();
        return view('admin.Books.edite',compact('catagory','book'));
    }
    function update(Request $req,$id){
        $book = Books::find($id);
        $book->name = $req->input('name');
        $book->writer = $req->input('writer');
        $book->catagory_id = $req->input('cat_id');
        $book->qty = $req->input('qty');
        $book->original_price = $req->input('original_price');
        $book->selling_price = $req->input('selling_price');
        $book->description = $req->input('description');
        $book->status = $req->input('status');
        $book->tax = $req->input('tax');
        if($req->hasFile('new_image')){
            $path = "Books/".$book->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $req->file('new_image');
            $exe = $file->getClientOriginalExtension();
            $filename = time().'.'.$exe;
            $file->move('Books/',$filename);
            $book->image = $filename;
        }
        $book->update();
        return redirect('/book')->with('sataus','Book Added Successfuly');
        
    }
}
