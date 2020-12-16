<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contest;

class FrontendController extends Controller
{

    public function welcome()
    {
        return     view('welcome');
    }
    public function faq()
    {
        return view('faq');
    }


    public function software(){
        return view('software');
    }
    public function robotics(){
        return view('robotics');
    }

    public function ai(){

        return view('ai');
        
    }

  

}

