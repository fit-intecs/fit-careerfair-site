<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$this->get('/', function () {
    return view('welcome');
})->name('root');

$this->get('/students','StudentController@index')->name('students');
$this->get('/profileimage/{filename}', 'UserController@getUserImage')->name('profile.image');
$this->get('/students/{id}',function($id){
    $user = \App\User::where('name', $id)->first();
    $profile = $user->profile;
    $profile->index = $user->name;
    return view('publicProfile',["profileDetails"=>$profile]);
})->name('students_view');


$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');


// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/callback/{provider}', 'SocialAuthController@callback');
Route::get('/redirect/{provider}', 'SocialAuthController@redirect');



Route::group(['middleware' => ['auth']], function () {

    $this->get('register', function () {
        return view('auth.register');
    })->name('register');

    $this->post('register','RegisterStudentController@update')->name('register');

    /*
     * User Profile related Routes
     * */

    $this->get('addprofiledetails', 'UserController@getAddUserProfileDetails')->name('addProfileDetails');
    $this->post('profiledetails', 'UserController@postAddUserProfileDetails')->name('postProfileDetails');
    $this->post('edit', 'UserController@postEditProfile')->name('profile.edit');


});

$this->get('/test', function () { // for testing purpose
    $faker = Faker\Factory::create();
    for ($i=0; $i < 1000; $i++) {
        try {
        $values[]= str_replace([" ","."], [",",""], $faker->sentence);
        } catch (\OverflowException $e) {
        echo "There are only 9 unique digits not null, Faker can't generate 10 of them!";
         }
    }
    dd($values);
})->name('test');