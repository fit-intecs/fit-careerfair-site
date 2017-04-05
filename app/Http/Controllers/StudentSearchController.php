<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class StudentSearchController extends Controller
{
    public function search(Request $request){

        $profile = Profile::search($request->get('q'))->paginate(10);

        //dd($profile);

        return response()->json($profile);

    }
}
