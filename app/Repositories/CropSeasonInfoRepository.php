<?php 


namespace App\Repositories;

use \App\Models\CropsSeasonInfo;
use \App\Models\Crop;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
//use App\Providers\AuthServiceProvider;


class CropSeasonInfoRepository  {
    protected $CropSeasonInfoRepository;
    

    public function __construct(CropsSeasonInfo $CropSeasonInfoRepository)
    {
        $this->CropSeasonInfoRepository = $CropSeasonInfoRepository;
        
    }


     //check if organization has atleast one seasonal calendar is registered
     public function crop_season_setup()
     {
       $admin_id = Auth::guard('admin')->user()->id;
       $no_of_season = $this->get_cooperative_crop_number_of_season();
       $number_of_seasons = $no_of_season;
       $has_crop_seasonal_calendar = CropsSeasonInfo::where('admin_id', $admin_id)->get()->count();
       //$has_crop_seasonal_calendar = CropsSeasonInfo::where('admin_id', $admin_id)->first();
        if($has_crop_seasonal_calendar >= $number_of_seasons) {
        //  if($has_crop_seasonal_calendar) {
             return true;
         } else {
             return false;
         }
     }


    public function createCropSeasonInfo(Request $request){
       try {
      $admin_id = Auth::guard('admin')->user()->id;
      $crop_id = $this->get_cooperative_crop_detials_id();
     // $crop_id = $crop_details->id;
      $cropseasoninfodata = new CropsSeasonInfo();
      $cropseasoninfodata->season_no = $request->season_no;
      $cropseasoninfodata->ideal_planting_date = $request->ideal_planting_date;
      $cropseasoninfodata->ideal_harvesting_date = $request->ideal_harvesting_date;
      $cropseasoninfodata->possible_infestation = $request->possible_infestation;
      $cropseasoninfodata->description = $request->description;
      $cropseasoninfodata->admin_id = $admin_id;
      $cropseasoninfodata->crop_id = $crop_id;
      $cropseasoninfodata->save();
      return $cropseasoninfodata;
       } catch (\Throwable $th) {
           throw $th->getMessage();
       }
    }

    public function get_cooperative_crop_detials_id(){
      try {
        $admin_id = Auth::guard('admin')->user()->id; 
        $get_cooperative_crop_detials = Crop::where('admin_id', $admin_id)->first();
        if ($get_cooperative_crop_detials) {
         // dd(get_users_fbos);
         return $get_cooperative_crop_detials->id;
        } 

        return null;
      } catch (\Throwable $th) {
        //throw $th;
      }
    }

    public function get_cooperative_crop_number_of_season(){
      try {
        $admin_id = Auth::guard('admin')->user()->id; 
        $get_cooperative_crop_detials = Crop::where('admin_id', $admin_id)->first();
        if ($get_cooperative_crop_detials) {
         // dd(get_users_fbos);
         return $get_cooperative_crop_detials->no_of_season;
        } 

        return null;
      } catch (\Throwable $th) {
        //throw $th;
      }
    }


    public function get_cooperative_crop_name(){
      try {
        $admin_id = Auth::guard('admin')->user()->id; 
        $get_cooperative_crop_detials = Crop::where('admin_id', $admin_id)->first();
        if ($get_cooperative_crop_detials) {
         // dd(get_users_fbos);
         return $get_cooperative_crop_detials->name_of_crop;
        } 

        return null;
      } catch (\Throwable $th) {
        //throw $th;
      }
    }


    public function count_crops_season(){
      try {
        $admin_id = Auth::guard('admin')->user()->id; 
        $count_crops_season = CropsSeasonInfo::where('admin_id', $admin_id)->get()->count();
        if ($count_crops_season) {
         // dd(get_users_fbos);
         return $count_crops_season;
        }
        
        return null;
      } catch (\Throwable $th) {
        //throw $th;
      }
    }


    public function get_all_seasonal_calendar(){
      try {
        $admin_id = Auth::guard('admin')->user()->id; 
        $get_all_seasonal_calendar = CropsSeasonInfo::where('admin_id', $admin_id)->get();
        if ($get_all_seasonal_calendar) {
         // dd(get_users_fbos);
         return $get_all_seasonal_calendar;
        }
        
        return null;
      } catch (\Throwable $th) {
        //throw $th;
      }
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