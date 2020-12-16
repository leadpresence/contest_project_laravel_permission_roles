<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	// public function __construct()
	// {
	//     $this->middleware('auth:admin');
	// }


    public function profile()
    {
    	return view('admin.admin_profile');
    }
    public function edit()
    {
    	return view('admin.admin_edit');
    }


    public function showapplication()
    {
    	return view('admin.applications');
    }
    public function showSingleApplication()
    {
    	return view('admin.single_applications');
    }
    
    
}
