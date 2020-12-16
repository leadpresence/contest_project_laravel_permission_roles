<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Model\Role;
use App\Model\Challenge;
use App\Model\Contest;

use Gate;
use App\Http\Controllers\User\Auth as ctrlAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationComplete;
 
class UserController extends Controller
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
    
    public function profile()
    {
        $user=Auth::user();
        
        return view('user.profile');
    
    }

    public function apply($id)

    {
        $contests=Contest::find($id);

        if(Gate::denies('can_apply')){
            return redirect()-> back();
        }

        return view('user.apply')
        ->with(
            ['contests'=>$contests]
        );
    }

   

    public function editUserProfile($user_id){
        
        $user=User::find($user_id);
        return view('user.edit')->with([
            'user'=>$user
        ]);

    }

    public function update(Request $request, $user_id)
    {   
        $input = $request->except('_method','_token');

        $validator=Validator::make($request->all(),[
            'name' => 'required | string| max:255',
            'image'=>'nallbale',
            'phone'=>'nullable',
            'country'=>'nullable',
            'profile_visibilty'=>'nullable',
            'bio'=>'string|max:255|nullable',
            'image'=>'nullable|max:30000|mimes:png,jpg,jpeg'
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
         }

         //we get the user id and get all details
         //from the imput, also get the image and store into the 
         //public storage folder abd store its path to the data base

         $user = User::find($user_id);
         //get file orginal name and save it with a custom name
         //RUN php artisan storage:link
         $fileName=$user->email.$request->image->getClientOriginalName();
         $image_path = $request->image->storeAs('images',$fileName,'public');
        
         //you may also use Uer::find($user_id)

         User::where('id',$user_id)->update([
             'name'=>$input['name'],
             'phone'=>$input['phone'],
             'city'=>$input['city'],
             'country'=>$input['country'],
             'city'=>$input['city'],
             'gender'=>$input['gender'],
             'bio'=>$input['bio'],
             'image'=>$fileName
             ]);

             //show mesages if update fails or not
       if($user->save()){
        return redirect()->route('user.profile')->with('success','Profile edited succesfully' );
       }
       else{
       return redirect()->route('user.profile')->with('danger','Profile edited failed!' );
       }
       return Back()->withInput();


    }


    public function nextSteps()
    {
        return view('user.next_steps');
    }
  

    public function submitSummerApplication(Request $request){

        $input = $request->all();
        $user =auth()->user();
        $contest=Contest::find($input['contest_id']);

        //get all applications by this user
        $challenges=Challenge::where('users_id',$user->id)->get();

       

        $validator =Validator::make($input, [
            'team_name' => 'required|string|max:255',
            'email'=>'required|email|',
            'team_url' => 'required|string|url|max:255',
            'demo_url'=>'required|string|url|max:255',
            'phone' => 'required|max:23',
            'idea_category'=>'required',
            'team_description'=>'required|string',
            'team_intention'=>'required|string',
            'team_size'=>'required',
            'experience'=>'required|string ',
            'idea_motivation'=>'required',
            'idea_comprehension'=>'required',
            'how_you_heard_about_us'=>'required',
            // 'validate_info'=>'required|array'
        ]);

        if ($validator->fails()) {
            return redirect('user/apply')
                        ->withErrors($validator)
                        ->withInput();
        }

           //validate user has not applied for this contest before

           foreach($challenges  as $challenge){
            if($challenge->contests_id==$contest->id){
                return redirect()->back()
                ->with('danger','You have applied Previously for this contest!' );
                // ->withInput();
            }
        }
        $candidate_challenge =  Challenge::create([
            'users_id'=>$user->id,
            'contests_id'=>$contest->id,
            'team_name'=>$input['team_name'],
            'team_url'=>$input['team_url'],
            'demo_url'=>$input['demo_url'],
            'team_description'=>$input['team_description'],
            'team_intention'=>$input['team_intention'],
            'team_city'=>$input['team_city'],
            'phone'=>$input['phone'],
            'email'=>$input['email'],
            'idea_category'=>$input['idea_category'],
            'experience'=>$input['experience'],
            'idea_motivation'=>$input['idea_motivation'],
            'idea_comprehension'=>$input['idea_comprehension'],
            'miscellaneous_info'=>$input['miscellaneous_info'],
            'how_you_heard_about_us'=>$input['how_you_heard_about_us'],
           ]);

           
           return redirect()->route('user.next');  

    }
}
