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

// Route::get('/app/digichain/signupuser', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
});


// Route::get('/login', function () {
//     return view('login');
// });


//Route::post('create-admin', 'RegisterAccountController@createAccount')->name('create-admin');



Route::group(['prefix'=>'app/admin/user'], function(){

    Route::get('/login', ['uses'=>'Admins\AdminController@login_page'])->name('admin-login');
    Route::get('/signup', ['uses'=>'Admins\AdminController@signup_page'])->name('admin-signup');
    Route::post('/signup', ['uses'=>'Admins\AdminController@createAccount'])->name('adminn.signasauser');
   

});


Route::group(['prefix' => '/admin'], function(){
    Route::get('dashboard/home', ['uses' => 'Admins\AdminController@users_dashboard', 'as'=>'users_dashboard']); 
     Route::get('dashboard/users', ['uses' => 'Admins\AdminController@users_list', 'as'=>'users_list']); 
});


//app-users-admin

Route::group(['prefix' => '/app/admin', 'middleware' => ['prevent-back-history']], function(){
   Auth::routes();
   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
   Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
   //Check if onboarding is done

  Route::get('dashboard/home', ['uses' => 'AppAdminController@admin_users_dashboard', 'as'=>'admin_users_dashboard'])->middleware('onboarding'); 
 // Route::get('dashboard/fbosetup', ['uses' => 'AppAdminController@fbo_setup_dashboard', 'as'=>'fbo_setup_dashboard']); 

   //this view for the fbo set up dashboard as onboarding

 Route::get('dashboard/fbo_setup', ['uses' => 'FBOSetupController@fbo_setup_dashboard', 'as'=>'fbo_setup_dashboard']); 

//  Route::get('dashboard/home', ['uses' => 'AppAdminController@admin_users_dashboard', 'as'=>'admin_users_dashboard']);

 
 
  //  Route::get('dashboard/users', ['uses' => 'AppAdminController@add_users_list', 'as'=>'add_users_list']); 
    Route::get('dashboard/fbos', ['uses' => 'FboController@add_farmer_based_view', 'as'=>'add_farmer_based_view']); 
    Route::post('dashboard/fbos', ['uses' => 'FboController@addFBO', 'as'=>'admin.addfbo']);   
  //adding fbos at the onboarding setup dashboard
  Route::post('dashboard_setup_fbos', ['uses' => 'FboController@addFboOnSetup', 'as'=>'admin.addFboOnSetup']);   

    Route::get('dashboard/users', ['uses' => 'UserController@add_user_list_view', 'as'=>'add_user_list_view']);
    
    Route::post('dashboard_add_user', ['uses' => 'UserController@addUser', 'as'=>'admin.adduser']); 
    
    //addUserOnSetup//Adding users on the setup
    Route::post('dashboard_setup_users', ['uses' => 'UserController@addUserOnSetup', 'as'=>'admin.addUserOnSetup']); 

    //addCrop// on setup
    Route::post('dashboard_setup_crops', ['uses' => 'CropController@addCrop', 'as'=>'admin.addCropOnSetup']); 

     //addCropSeasonCalendar// on setup
     Route::post('dashboard_setup_crop_season_calendar', ['uses' => 'CropSeasonInfoController@addCropSeasonInfo', 'as'=>'admin.addCropSeasonInfo']); 


     //addVendorAndBuyer// on setup
     Route::post('dashboard_setup_vendor_and_buyer', ['uses' => 'VendorAndBuyerController@addVendorAndBuyer', 'as'=>'admin.addVendorAndBuyer']);  

    Route::get('dashboard/farmers', ['uses' => 'FarmersController@add_farmers_list_view', 'as'=>'add_farmers_list_view']);  
    Route::post('dashboard/farmers', ['uses' => 'FarmersController@createfarmer', 'as'=>'admin.createfarmer']);  


//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');    

});


