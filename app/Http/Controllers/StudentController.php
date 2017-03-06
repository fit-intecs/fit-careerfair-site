<?php

namespace App\Http\Controllers;

use App\Profile;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(Request $request){
        $profiles = Profile::paginate(10);

        //TODO: remove after real images are uploaded
        $faker = Factory::create();
        for($i=0;$i<count($profiles);$i++){
            $profiles[$i]->objective = str_limit($profiles[$i]->objective, $limit = 180, $end = '...');
            $profiles[$i]->img = $faker->imageUrl(50, 50);
        }

        $page_data = array(
            'students' => $profiles
        );
        return view('students', $page_data);
    }
}
