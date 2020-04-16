<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Repositories\FBORepository;
use App\Repositories\FarmersRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FarmersController
{

    protected $userRepository;
    protected $fboRepository;
    protected $farmerRepository;
    // protected $user ;


    public function __construct(UserRepository $userRepository,FBORepository $fboRepository,FarmersRepository $farmerRepository){
      $this->userRepository = $userRepository;
      $this->fboRepository = $fboRepository;
      $this->farmerRepository = $farmerRepository;
      // $this->middleware('auth:admin');
    
    }


    // public function add_users_list(){
    //   return view('users.pages.add-users-list');
    // }


    public function add_farmers_list_view(){
      try {
       
        $get_users_farmers = $this->farmerRepository->get_users_farmers();
        $get_all_users = $this->userRepository->get_all_users();
        $response = ['get_users_farmers' => $get_users_farmers,'get_all_users' => $get_all_users, ];
  
        return view('users.pages.farmers',$response);
        //code...
      } catch (\Throwable $th) {
        //throw $th;
      }
    } 
     


    public function createfarmer(Request $request){

    try {     
     $saved = $this->farmerRepository->createfarmer($request);
     if($saved) {
      Session::flash('message', 'Account item is saved successfully!');
      Session::flash('alert-class', 'alert-success');
  } else {
      Session::flash('messagefailed', 'An error occured!');
      Session::flash('alert-class', 'alert-danger');
  }
       return redirect(route('add_farmer_based_view'));
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
