<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    public function profile(){
        return view('profile', array('user' => Auth::user()));
    }
    public function update(Request $request){
        $user = Auth::user();
        $user->contact = $request->contact;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save(); 
        return view('profile', array('user' => Auth::user()));
    }
}