<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Catagory;

use Auth;
class BooksController extends Controller
{
    function index(){
        return view('Admin.Books.index');
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
        return redirect('/')->with('sataus','Book Added Successfuly');
    }
}
