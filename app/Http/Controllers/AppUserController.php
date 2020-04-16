<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 

class AppUserController
{

    // protected $adminRepository ;
    // protected $user ;


    // public function __construct(AdminRepository $ar, UserRepository $user){
    //   $this->adminRepository = $ar ;
    //   $this->user = $user ;
    // }

    public function login_page() {
      
      return view('admin.login') ;
    }


    public function postLogin(Request $request){

      $email = "abc@gmail.com";
      $password = "123456";

        if(($request->email ==$email && $request->password ==$password)){
         \Session::put('admin',$email);
          return redirect()->route('users') ;
        }
        return redirect()->back()->with('error', 'Invalid credentials');
  
      }


      public function users_dashboard(){
        return view('admin.pages.users');
      }  
      
      public function users_list(){
        return view('admin.pages.userslist');
      }  



    
}
