<?php

namespace App\Http\Controllers\Admin;


use App\Model\admin\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()


    {
        $roles= Role::all();

        return view('admin.role.show',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request.[
            'name'=>'required|max:55|unique:roles'
        ]);

        $role=new Role;
        $role->name=$request->name;
        $role->save();
        return redirect('admin.role.show');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\admin\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\admin\role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.role.edit'); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\admin\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\admin\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::where('id'->$id)->delete();
        return redirect()->back();
    }

}
