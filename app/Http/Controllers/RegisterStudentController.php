<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RegisterStudentController extends Controller
{
    public function update(Request $request){
        $user = Auth::user();

        $user->name = $request->get('index');
        $user->password = bcrypt($request->get('password'));
        $user->status = 'active';

        $user->save();

        $profileDetails = $user->profile;
        return redirect()->route('home',["profileDetails"=>$profileDetails ]);
    }
}
