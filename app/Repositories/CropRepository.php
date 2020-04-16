<?php 


namespace App\Repositories;

use \App\Models\Crop;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
//use App\Providers\AuthServiceProvider;


class CropRepository  {
    protected $Crop;
    

    public function __construct(Crop $Crop)
    {
        $this->Crop = $Crop;
        
    }


    //check if organization has atleast one crop is registered
    public function crop_setup()
    {
      $admin_id = Auth::guard('admin')->user()->id;
       $has_crop = Crop::where('admin_id', $admin_id) ->first();
        if ($has_crop) {
            return true;
        } else {
            return false;
        }
    }


    public function createCrop(Request $request){
       try {
      $admin_id = Auth::guard('admin')->user()->id;
      $cropdata = new Crop();
      $cropdata->name_of_crop = $request->name_of_crop;
      $cropdata->average_spacing = $request->average_spacing;
      $cropdata->no_of_season = $request->no_of_season;
      $cropdata->description = $request->description;
      $cropdata->admin_id = $admin_id;
      return $cropdata->save();

       } catch (\Throwable $th) {
           throw $th->getMessage();
       }
    }



    public function count_crops(){
        try {
          $admin_id = Auth::guard('admin')->user()->id; 
          $count_crops = Crop::where('admin_id', $admin_id)->get()->count();
          if ($count_crops) {
           // dd(get_users_fbos);
           return $count_crops;
          } 
        } catch (\Throwable $th) {
          //throw $th;
        }
      }

    // public function get_users_fbos(){
    //   try {
    //     $admin_id = Auth::guard('admin')->user()->id; 
    //     $get_users_fbos = Fbo::where('admin_id', $admin_id)->get();
    //     if ($get_users_fbos) {
    //      // dd(get_users_fbos);
    //      return $get_users_fbos;
    //     } 
    //   } catch (\Throwable $th) {
    //     //throw $th;
    //   }
    // }

 
  
     
   


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