<?php
/**
 * Created by PhpStorm.
 * User: Nimesha Jinarajadasa
 * Date: 3/4/2017
 * Time: 8:32 PM
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\View;

class UserController extends Controller{

    public function getAddUserProfileDetails()
    {
        return view('user-profile.add_user_profile_details');
    }
}