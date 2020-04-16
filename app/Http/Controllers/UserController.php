<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Repositories\FBORepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
 

class UserController
{

    protected $userRepository;
    protected $fboRepository;
    // protected $user ;


    public function __construct(UserRepository $userRepository,FBORepository $fboRepository){
      $this->userRepository = $userRepository ;
      $this->fboRepository = $fboRepository ;
      // $this->middleware('auth:admin');
    
    }




    public function add_user_list_view(){
      try {
        $get_all_users = $this->userRepository -> get_all_users();
        $get_all_fbos = $this->fboRepository -> get_users_fbos();
        $response = ['get_all_users' => $get_all_users,'get_all_fbos' => $get_all_fbos ];
  
        return view('users.pages.add-users-list',$response);
        //code...
      } catch (\Throwable $th) {
        //throw $th;
      }
    } 



    



    public function addUserOnSetup(Request $request){

      try {     
       $saved = $this->userRepository->createuser($request);
       if($saved) {
        Session::flash('message_user_fbo_setup', 'User assigned successfully!');
        Session::flash('alert-class', 'alert-success');
    } else {
        Session::flash('messagefailed', 'An error occured!');
        Session::flash('alert-class', 'alert-danger');
    }
    return redirect(route('fbo_setup_dashboard'));
      } 
      catch (\Throwable $th) {
       return redirect()->back()->withInput()->withErrors("Error creating your account! - {$th->getMessage()}");
      }   
    
    }
     


    public function addUser(Request $request){

    try {     
     $saved = $this->userRepository->createuser($request);
     if($saved) {
      Session::flash('message', 'Record is saved successfully!');
      Session::flash('alert-class', 'alert-success');
  } else {
      Session::flash('messagefailed', 'An error occured!');
      Session::flash('alert-class', 'alert-danger');
  }
       return redirect(route('add_users_list'));
    } 
    catch (\Throwable $th) {
     return redirect()->back()->withInput()->withErrors("Error creating your account! - {$th->getMessage()}");
    }   
  
  }

  // public function getFBOs(){
  //   try {
  //     $get_all_fbos = $this->fboRepository -> get_users_fbos();
  //     $response = ['get_all_fbos' => $get_all_fbos ];

  // return view('users.pages.farmer_base_org', $response);
  //     //code...
  //   } catch (\Throwable $th) {
  //     //throw $th;
  //   }
  // }



      // public function users_dashboard(){
      //   return view('admin.pages.users');
      // }  
      
      // public function users_list(){
      //   return view('admin.pages.userslist');
      // }
      
      
      public function getRules(){

        return [
          'fullname' => 'required',
          'country' => 'required',
          'primary_contact' => 'required|unique:users',
          'email' => 'email|unique:users',
          'password' => 'required|confirmed|min:4',
        ];
  
      }



    
}
