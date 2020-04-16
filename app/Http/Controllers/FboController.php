<?php

namespace App\Http\Controllers;

use App\Repositories\FBORepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
 

class FboController
{

    protected $fboRepository;
    // protected $user ;


    public function __construct(FBORepository $fboRepository){
      $this->fboRepository = $fboRepository ;
      // $this->middleware('auth:admin');
    
    }


    public function add_farmer_based_view(){
      try {
        $get_all_fbos = $this->fboRepository -> get_users_fbos();
        $response = ['get_all_fbos' => $get_all_fbos ];
  
    return view('users.pages.farmer_base_org', $response);
        //code...
      } catch (\Throwable $th) {
        //throw $th;
      }
    }
    
    
    public function addFboOnSetup(Request $request){

      try {     
       $saved = $this->fboRepository->createfbo($request);
       if ($saved) {
        Session::flash('message', 'FBO/Cooperative added!');
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
     


    public function addFBO(Request $request){

    try {     
     $saved = $this->fboRepository->createfbo($request);
     if ($saved) {
      Session::flash('message', 'Record is saved successfully!');
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
