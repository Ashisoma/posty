<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct(){

        // should not be able to register after they have logged in 
        // edit the route service provider
        $this->middleware(['guest']);

    }
    //
    public function index()
    {
        return view('auth.login');
        
    }

    public function store(Request $request  )
    {
        // dd('ok');

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('email','password'), $request->remember)){ 
            return back()->with('status', 'Invalid login details');
        }
        return redirect()->route('dashboard');
    }
}
