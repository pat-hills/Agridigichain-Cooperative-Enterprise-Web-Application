<?php 


namespace App\Repositories;


use \App\Models\Farmer;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;


class FarmersRepository {
    protected $farmer;
   

    public function __construct(Farmer $farmer)
    {
        $this->farmer = $farmer;
       
       
    }

     

    public function createfarmer(Request $request){
      try {
        $password = "123456";
     $admin_id = Auth::guard('admin')->user()->id;
     $fbodata = new Farmer();
     $fbodata->fullname = $request->fullname;
     $fbodata->username = $request->username;
     $fbodata->email = $request->email;
     $fbodata->password = Hash::make($password);
     $fbodata->gender = $request->gender;
     $fbodata->contact = $request->contact;
     $fbodata->location = $request->location;
     $fbodata->username = $request->username;
     $fbodata->age = $request->age;
     $fbodata->marital_status = $request->marital_status;
     $fbodata->age = $request->age;
     $fbodata->marital_status = $request->marital_status;
     $fbodata->educational_level = $request->educational_level;
     $fbodata->main_occupation = $request->main_occupation;
     
     $fbodata->minor_occupation = $request->minor_occupation;
     $fbodata->dependants = $request->dependants;
     $fbodata->farm_acres = $request->farm_acres;
     $fbodata->main_crop = $request->main_crop;
     $fbodata->user_id = $request->user_id;
    
     return $fbodata->save();
      } catch (\Throwable $th) {
          throw $th->getMessage();
      }
   }

   public function get_users_farmers(){
    try {
     // $admin_id = Auth::guard('admin')->user()->id; 
     $user_id = $this->get_users_id();
      $get_users_farmers = Farmer::where('user_id', $user_id)->get();
      if ($get_users_farmers) {
       // dd(get_users_fbos);
       return $get_users_farmers;
      } 
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

  public function get_users_farmers_main_occupation(){
    try {
     // $admin_id = Auth::guard('admin')->user()->id; 
     $user_id = $this->get_users_id();
     $query_ = ['user_id'=>$user_id,'main_occupation'=> '"Farming"'];
      $get_users_farmers = Farmer::where($query_)->get();
      if ($get_users_farmers) {
       // dd(get_users_fbos);
       return $get_users_farmers;
      } 
    } catch (\Throwable $th) {
      //throw $th;
    }
  }


  public function count_users_farmers(){
    try {
     // $admin_id = Auth::guard('admin')->user()->id; 
     $user_id = $this->get_users_id();
      $get_users_farmers = Farmer::where('user_id', $user_id)->get()->count();
      if ($get_users_farmers) {
       // dd(get_users_fbos);
       return $get_users_farmers;
      } 
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

  public function count_male_users_farmers(){
    try {
     
     $user_id = $this->get_users_id();
     $query_count_male = ['user_id'=>$user_id,'gender'=> '"Male"'];
      $get_users_farmers = Farmer::where($query_count_male)->get()->count();
      if ($get_users_farmers) {
       // dd(get_users_fbos);
       return $get_users_farmers;
      } 
    } catch (\Throwable $th) {
      //throw $th;
    }
  }


  public function count_female_users_farmers(){
    try {
     
     $user_id = $this->get_users_id();
     $query_count_female = ['user_id'=>$user_id,'gender'=> '"Female"'];
      $get_users_farmers = Farmer::where($query_count_female)->get()->count();
      if ($get_users_farmers) {
       // dd(get_users_fbos);
       return $get_users_farmers;
      } 
    } catch (\Throwable $th) {
      //throw $th;
    }
  }


  public function sum_acres_of_farmers(){
    try {
     
     $user_id = $this->get_users_id();
     $sum_land_acres_query = ['user_id'=>$user_id];
      $sum_land_acres = Farmer::where($sum_land_acres_query)->sum('farm_acres');
      if ($sum_land_acres) {
       // dd(get_users_fbos);
       return $sum_land_acres;
      } 
    } catch (\Throwable $th) {
      //throw $th;
    }
  }



  public function get_users_id(){
    try {
      $admin_id = Auth::guard('admin')->user()->id; 
      $get_users_id = User::where('admin_id', $admin_id)->first();
      if ($get_users_id) {
       // dd(get_users_fbos);
       return $get_users_id->admin_id;
      } 
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

    
 


    

   

    
  

      



}