<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 3/4/2017
 * Time: 8:32 PM
 */

namespace App\Http\Controllers;


use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller{

    public function getAddUserProfileDetails()
    {
        return view('user-profile.add_user_profile_details');
    }

    public function postAddUserProfileDetails(Request $request)
    {
        $this->validate($request,[

            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required',
            'linkedin' => 'required',
            'objective' => 'required|min:50|max:500',
            'techskills' => 'required|max:150'
        ]);

        $firstName = $request['firstName'];
        $lastName = $request['lastName'];
        $phone = $request['phone'];
        $linkedin = $request['linkedin'];
        $objective = $request['objective'];
        $techskills = $request['techskills'];
        $degree = $request['degree'];
        $userId = Auth::user()->id;

        $profile = new Profile();
        $profile->firstName = $firstName;
        $profile->lastName = $lastName;
        $profile->phone = $phone;
        $profile->linkedinLink = $linkedin;
        $profile->degree = $degree;
        $profile->objective = $objective;
        $profile->techs = $techskills;
        $profile->user_id = $userId;
        $profile->achievement_id = 1;
        $profile->final_project = 1;

        $profile->save();

        return redirect()->route('home',['profileDetails'=> $profile]);
    }

    public function getUserImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file,200);
    }

    public function postEditProfile(Request $request)
    {

        $this->validate($request,[
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required',
            'linkedin' => 'required',
            'objective' => 'required|min:50|max:500',
            'techskills' => 'required|max:150'
        ]);

        $authenticatedUserID = Auth::user()->id;
        $profileOwnedUser = User::find($authenticatedUserID);
        $profile = $profileOwnedUser->profile;

        $profile->firstName = $request['firstName'];
        $profile->lastName = $request['lastName'];
        $profile->phone = $request['phone'];
        $profile->degree = $request['degree'];
        $profile->linkedinLink = $request['linkedin'];
        $profile->objective = $request['objective'];
        $profile->techs = $request['techskills'];

        $profile->update();
        return response()->json(['firstName' => $profile->firstName, 'lastName'=> $profile->lastName, 'phone'=>$profile->phone,
        'degree'=> $profile->degree, 'linkedin'=>$profile->linkedinLink, 'objective'=> $profile->objective, 'techs'=>$profile->techs],200);
//        if(Auth::user()!= $post->user)
//        {
//            return redirect()->back();
//        }
//        $post->body = $request['body'];
//        $post->update();
//        return response()->json(['new_body'=> $post->body],200);
    }
}