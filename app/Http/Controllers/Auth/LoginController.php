<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
    }


    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){              
        //valid
        $this->validate($request, [
            'email'=> 'required|email',
            'password'=> 'required',
        ]);
        // signin
        if(!auth()->attempt($request->only('email','password'))){
            return back()->with('status', 'invalid lpgin details');
        }
        
        // redirect
        return redirect()->route('dashboard');

    }
}
