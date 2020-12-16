<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Contest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cotests=Contest::where('status',1)->get();
        return view('home')->with('contests',
            $cotests
        );
    }
    


    public function apply()
    {
        return view('apply');
    
    }

 
}
