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

$this->get('/', 'indexController@index')->name('root');

$this->get('/mat', function () {
    return view('index');
})->name('mat');

$this->get('/students','StudentController@index')->name('students');
$this->get('/companies','CompanyController@index')->name('companies');
$this->get('/profileimage/{filename}', 'UserController@getUserImage')->name('profile.image');
$this->get('/students/{id}/{count?}','StudentController@viewStudent')->name('students_view');


$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');


// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');



$this::get('/home', 'HomeController@index')->name('home');

$this::get('/callback/{provider}', 'SocialAuthController@callback');
$this::get('/redirect/{provider}', 'SocialAuthController@redirect');



$this::group(['middleware' => ['auth']], function () {

    // This route group is belongs to admins be careful
    $this::group(['prefix' => 'adm','middleware' => ['isAdmin']], function () {
        $this->get('/','AdminController@index')->name('admin.dashboard');
        $this->get('/companies','AdminController@companiesPage')->name('admin.companiesPage');
        $this->get('/deleteCom/{id}','AdminController@deleteCompany')->name('admin.deleteCompany');
        $this->post('/companies','AdminController@addCompany')->name('admin.addNewCompany');
        $this->get('/ex_profiles','AdminController@exportProfileData')->name('admin.exportProfiles');
    });

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

Route::get('fire', function () {
    dd($files = File::allFiles(public_path().'/img/'));
});


$this->get('/a',function(){
    \Illuminate\Support\Facades\Redis::psubscribe(['*'], function ($message, $channel) {
        echo $message;
    });
});


$this->get('/test', function () { // for testing purpose
    $lastActivity = \Spatie\Activitylog\Models\Activity::all()->last(); //returns the last logged activity
    var_dump($lastActivity->causer);
    dd(\Spatie\Activitylog\Models\Activity::inLog('register')->get());
    dd(\Spatie\Activitylog\Models\Activity::all());
})->name('test');