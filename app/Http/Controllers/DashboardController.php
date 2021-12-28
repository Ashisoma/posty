<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function __construct(){
        //would redirect user to the page they requested after they have logged in
        $this->middleware(['auth']);
    }

    public function index()
    {

        // check user signed in
        //dd(auth()->user());

        return view('dashboard');
    }
}
