<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class AdminController extends Controller
{
    function index(){
        if(Auth::check()){
            $user = User::all();
        return view('admin.index',compact('user'));
        }
    }
    function user(){
        $user = User::all();
        return view('admin.Users.index',compact('user'));
    }
    function change_password($id){
        $user = User::find($id);
        return view('admin.Users.change-password',compact('user'));
    }
    function update_password(Request $req,$id){
        $user = User::find($id);
        $current_password = $req->input('current_password');
        if(Hash::check($current_password,$user->password)){
            $new_password = $req->input('new_password');
            $confirm_password = $req->input('confirm_password');
            if($new_password == $confirm_password){
                $user->password = Hash::make($confirm_password);
                $user->update();
                return redirect('user');
            }else{
                return "Password Not Matched";
            }
        }else{
            return "Current password is wrong! ";
        }
    }

    function edite_user($id){
        $user = User::find($id);
        return view('admin.Users.edite_user',compact('user'));
    }
    function update_user(Request $req,$id){
        $user = User::find($id);
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->role_as = $req->input('role_as');
        $user->update();
        return redirect('user')->with('status','User updated successfuly');
    }
    function delete_user($id){
        if(Auth::check()){
            $user = User::find($id);
            $user->delete();
            return redirect('/user')->with('status','User Deleted Successfuly');
        }
    }
    
}
