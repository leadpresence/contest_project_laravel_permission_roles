<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Model\Contest;
use App\Model\Challenge;
use Gate; // Declared in Providers/AuthrserviceProvider
use App\Model\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{


    public function __construct(){

        $this->middleware('auth'); 
    }



    /**
     * ---------General User Role Crud 
     * ---------here allow user to manage user from adminpanel
     * --------assign roles for judges and other users
     * 
     * 
     * */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('edit_users')) {
            $users=User::all();
            // \dd($users);
            return view('admin.users.index')->with('users',$users);
        }
        return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * Send list of possible roles to view
     */
    public function create()
    {
        if (Gate::allows('manage_users')) {

        $roles=Role::all();
        return view('admin.users.create')->with([
            'roles'=>$roles
        ]);
    }}

    /**
     * Store a newly created user from admin panel in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        if (Gate::allows('manage_users')) {

        $input=$request->all();
        $validator=validator::make($input,[
            'name' => ['required', 'string', 'max:255'],
            'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ])->validate();
        // \dd($input); 

        $user= User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),

        ]);

        $user->roles()->attach($request->input('roles'));
        return redirect()->route('admin.users')->with('success','New user has been added');
        }
    }

    public function edit(User $user)
    {
        if (Gate::allows('edit_users')) {
            $roles=Role::all();
            return view('admin.users.edit')->with([
                'user'=>$user,
                'roles'=>$roles
            ]);
        }
        return redirect()->route('admin.user.index');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        if (Gate::denies('delete_users')) {

        return redirect()->route('admin.user.index');
            
        }
        $roles=Role::all();
        $user ->roles()->detach();

        $user->delete();

        return redirect()->route('admin.users');

    }
    //showAllApplications
    public function showAllApplications()
    {
        //get all ] applications
        $applications=Challenge::all();

    	return view('admin.all_applications')->with([
            'applications'=>$applications
        ]);

    }

    public function showAcceptedApplication()
    {
        //get all accepted applications
        $applications=Challenge::where('status',2)->get();

    	return view('admin.applications')->with([
            'applications'=>$applications
        ]);

    }


    public function showDeclinedApplication()
    {
        $applications=Challenge::where('status',1)->get();
    	return view('admin.declined_applications')->with([
            'applications'=>$applications
        ]);

    }

    public function showSingleApplication($application_id)
    {   

        $application = Challenge::find($application_id);
    	return view('admin.single_application')->with([
            'application'=>$application
        ]);
    }



    public function acceptApplication($application_id){
        if (Gate::denies('accept_challenge')) {
            return redirect()->route('admin.application');
        }
          //decline application by setting application to 2
      $application = Challenge::find($application_id);
      $application->status=2;
      $application->save();

      return redirect()->route('admin.applications')->with('success','Item created successfully!');


    }



    public function declineApplication($application_id){
        if (Gate::denies('accept_challenge')) {
            return redirect()->route('admin.applications');
        }

      //decline application by setting application to 1
      $application = Challenge::find($application_id);
      $application->status=1;
      $application->save();
      return redirect()->route('admin.declined')->with('warning','You have declined application');
    }




/***Admin profile CRUD */

    public function profile()
    {
    	return view('admin.admin_profile');
    }
    public function edit_profile()
    {
    	return view('admin.admin_edit');
    }

/**Contest crud */
//show creats contests
public function showContests(){

        $contests=Contest::all();
    	return view('admin.contest.show_contest')->with([
            'contests'=>$contests
        ]);
}
//the view to enter contest details
public function createContest(Request $request){
    return view('admin.contest.create_contest');
}

public function storeContest(Request $request){
    if (Gate::allows('manage_users')) {
        $input =$request->all();
        $validator=validator::make($input,[
            'challenge_name' => ['required','string', 'max:256'],
            'decription' => ['string', 'max:2048'],
            'batch_name'=>['required', 'string', 'max:255'],
            'start_date'=>['required','date'],
            'end_date'=>['required', 'date'],
            'year'=>['required'],
            'status'=>['required']

        ])->validate();
        $contest=Contest::create([
            'challenge_name'=>$input['challenge_name'],
            'description'=>$input['description'],

            'batch_name'=>$input['batch_name'],
            'start_date'=>$input['start_date'],
            'end_date'=>$input['end_date'],
            'year'=>$input ['year'],
            'status'=>$input['status']


        ]);
        return redirect()->route('admin.contests')->with('success','New Contest has been added');



    }

}

public function editContest($contest_id){
    // \dd(contest_id);
    if (Gate::denies('accept_challenge')) {
        return redirect()->route('admin.contests');
    }
        $contest = Contest::find($contest_id);
        return view('admin.contest.edit_contest')->with([
            'contest'=>$contest
        ]);
    

}
public function updateContest(Request $request, $contest_id){
    // \dd($request);
    $contest = Contest::findOrFail($contest_id);

    if (Gate::denies('manage_users')) {
    return redirect()-> back();

    }
        $input =$request->all();
        $validator=validator::make($input,[
            'challenge_name' => ['required','string', 'max:255'],
            'description' => ['required','string', 'max:2048'],
            'batch_name'=>['required', 'string', 'max:255'],
            'start_date'=>['required','date'],
            'end_date'=>['required','date'],
            'year'=>['required'],
            'status'=>['required']

        ])->validate();
     
        $contest->fill($input)->save();
        return redirect()->route('admin.contests')->with('success','Contest Updated succesfully' );
}


public function destroyContest( $contest_id){
 
    if (Gate::denies('accept_challenge')) {
        return redirect()->route('admin.contests');
    }

    $contest = Contest::find($contest_id);
  
    $contest->delete();
    return redirect()->route('admin.contests')->with('success','Contest deleted' );


}

/**Challenge crud */


//show creats contests from admin if needed
public function showChallenge(){}
//the view to enter contest details
public function creatChallenge(Request $request){}

public function storeChallenge(Request $request){}

public function editChallenge(Challenge $contest){}
public function updateChallenge(Request $request,Challenge $challenge){}
public function destroyChallenge(Challenge $challenge){}






    
   






}
