<?php

namespace App\Http\Controllers\Admins;

use App\Repositories\AdminRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
// use Auth;
use Route;
use Illuminate\Support\Facades\Auth;
 

class AdminController
{

    protected $adminRepository;
    // protected $user ;


    public function __construct(AdminRepository $adminRepository){
      
      $this->adminRepository = $adminRepository ;
      // $this->middleware('auth:admin');
    
    }

    public function login_page() {
      
      return view('login') ;
    }

    public function signup_page() {
      
      return view('welcome') ;
    }


    public function createAccount(Request $request){

    try {

      $validator = Validator::make($request->all(), [ 
        'fullname' => 'required', 
        'email' => 'required|email|unique:admins', 
        'contact' => 'required|unique:admins',
        'password' => 'required|confirmed|min:6', 
        'country' => 'required',
        'type_of_organization' => 'required',
        'name_of_organization' => 'required',
    ]);
    
    if ($validator->fails()) { 
      return redirect()->back()->withInput()->withErrors($validator->errors());            
    }  
      
    if($request->type_of_organization=="noValue"){
      return redirect()->back()->withInput()->withErrors("Please select an organization type"); 
    }



     $admin = $this->adminRepository->createAdminAccount($request);
   ///  $email = $admin->email;
   ///  $password = $admin->password;
     if($admin){
    if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
      return redirect()->intended(route('fbo_setup_dashboard'));
    }
     }else{
      return redirect()->back()->withInput()->withErrors("Error creating your account!");
     }

   
     //  return redirect(route('admin-login'));
    } 
    catch (\Throwable $th) {
     return redirect()->back()->withInput()->withErrors("Error creating your account! - {$th->getMessage()}");
    }   
  
  }

 







   


      public function users_dashboard(){
        return view('admin.pages.users');
      }  
      
      public function users_list(){
        return view('admin.pages.userslist');
      }
      
      
      public function getRules(){

        return [
          'fullname' => 'required',
          'country' => 'required',
          'contact' => 'required|unique:admins',
          'email' => 'email|unique:admins',
          'password' => 'required|confirmed|min:6',
        ];
  
      }


      



    
}
