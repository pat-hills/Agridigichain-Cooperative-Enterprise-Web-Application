<?php 


namespace App\Repositories;

use \App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
//use App\Providers\AuthServiceProvider;


class AdminRepository  {
    protected $admin;
    

    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
        
    }


    public function saveAdmin(Request $request)
    {
  try {
    $this->admin->fullname = $request-> $fullname;
    $this->admin->email = $request-> $email;
    $this->admin->password = Hash::make($request->$password);
    $this->admin->contact =$request-> $contact;
    $this->admin->country =$request-> $country;
    $this->admin->save();
    return $this->admin;
  } catch (\Throwable $th) {
    //throw $th;
  }

  return null;

 }




    public function createAdminAccount(Request $request){
       try {
      $admindata = new Admin();
      $admindata->fullname = $request->fullname;
      $admindata->email = $request->email;
      $admindata->password = Hash::make($request->password);
      $admindata->contact = $request->contact;
      $admindata->country = $request->country;
      $admindata->name_of_organization = $request->name_of_organization;
      $admindata->type_of_organization = $request->type_of_organization;
      $admindata->save();
      return $admindata;
       } catch (\Throwable $th) {
           throw $th->getMessage();
       }
    }


    public function credentials(){
      return ['email' => 'required', 'password' => 'required'] ;
    }
  
    public function successURL(){
      return 'users';
    }
  
    public function authenticate(Request $request){
  
      $user = Admin::where('email',$request->email)->first();
      if($user && Hash::check($request->password, $user->password)){
        return $user ;
      }
      return null;
    }


  //   public function createCooperativeAgent($tblAgent){
  //     try {
  //     $tblAgent = TblAgent::create($tblAgent);
  //       return $tblAgent;
  //     } catch (\Throwable $th) {
  //         //throw $th;
  //     }

  //  }


  //  return FarmPayable::where('farm_id', $farmId)
  //  ->with(['farm_payables_details', 'farm_payable_payments'])
  //      ->orderBy('created_at', 'desc')->paginate(6) ;

  //   public function get_admin_details($id){
  //   $type_of_role = 'Admin';
  //   $admin_query = ['id'=>$farm_id,'type_of_role'=> $type_of_role];
  //     $admin_details = TblAgent::where($admin_query)->first();
  // if($admin_details){
  //     return $admin_details ;
  //      }
  //  return null;
  //     }

    //   public function get_agent_coorperative_id($tbl_user_id,$tbl_agents_id){
    //     $query_agent = ['tbl_user_id'=>$tbl_user_id,'tbl_agents_id'=> $tbl_agents_id];
    //       $agent_details = TblCooperativesName::where($query_agent)->first();
    //   if($agent_details){
    //       return $agent_details->id;
    //        }
    //    return null;
    // }


      // public function authenticateAgent(Request $request){

      //   $cooperativeagent = TblAgent::where('email',$request->email)->first();
      //   if($cooperativeagent && Hash::check($request->password, $cooperativeagent->password)){
      //     return $cooperativeagent ;
      //   }
      //   return null;
      // }



      // public function count_cooperative_agent($tbl_agent_ref_id){
      //   try {
      //    // $query_count_agent = ['tbl_user_id'=>$tbl_user_id,'tbl_agents_id'=> $tbl_agents_id];
      //  $count_agents = User::where('tbl_agent_ref_id', $tbl_agent_ref_id)->get()->count();
      //  if($count_agents){
      //    return $count_agents;
      //  }

      //  return null;
      //   } catch (\Throwable $th) {
      //     //throw $th;
      //   }
      // }

      // public function get_cooperative_agent($tbl_agent_ref_id){
      //   try {
          
      //    // $query_count_agent = ['tbl_user_id'=>$tbl_user_id,'tbl_agents_id'=> $tbl_agents_id];
      //  $all_agents = User::where('tbl_agent_ref_id', $tbl_agent_ref_id)->get();
      //  if($all_agents){
      //  return $all_agents;
      //  }

      //  return null;
      //   } catch (\Throwable $th) {
      //     //throw $th;
      //   }
      // }


    //   public function get_sum_sale_details_of_farm($farm_id){

    //     $total_amount = SalesDetail::where('farm_id', $farm_id)->sum('total_amount');
    //     if($total_amount){
    //         return $total_amount;
    //     }
    // }


      




}