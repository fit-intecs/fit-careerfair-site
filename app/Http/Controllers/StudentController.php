<?php

namespace App\Http\Controllers;

use App\Events\CFActivities;
use App\Profile;
use App\User;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(Request $request){
        $profiles = Profile::paginate(10);

        //TODO: remove after real images are uploaded
        //$faker = Factory::create();
        for($i=0;$i<count($profiles);$i++){
            $profiles[$i]->objective = str_limit($profiles[$i]->objective, $limit = 180, $end = '...');
            $profiles[$i]->img = "/img/student.jpg"; //$faker->imageUrl(50, 50);
            $profiles[$i]->index = $profiles[$i]->user->name;
        }

        $page_data = array(
            'students' => $profiles
        );
        return view('students', $page_data);
    }

    public function viewStudent($id, Request $request){
        $user = User::where('name', $id)->first();
        $profile = $user->profile;
        $profile->index = $user->name;

        activity('profile_view')
            ->causedBy($profile)
            ->log($request->ip());
        event(new CFActivities());

        return view('publicProfile',["profileDetails"=>$profile]);
    }
}
