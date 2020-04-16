<?php 


namespace App\Repositories;

use \App\Models\TblCooperative;
use \App\Models\TblCooperativesName;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class CooperativeNamesRepository {
    protected $tblCooperativesName;
   

    public function __construct(TblCooperativesName $tblCooperativesName)
    {
        $this->tblCooperativesName = $tblCooperativesName;
       
       
    }


    public function CreateTblCooperativesName($tblCooperativesName){
       try {
       $tblCooperativesName = TblCooperativesName::create($tblCooperativesName);
         return $tblCooperativesName;
       } catch (\Throwable $th) {
           //throw $th;
       }

    }

    public function get_cooperatives_names($tbl_user_id){
      try {
        
       // $query_count_agent = ['tbl_user_id'=>$tbl_user_id,'tbl_agents_id'=> $tbl_agents_id];
    // $all_agents = TblCooperativesName::with("user")->where('tbl_user_id', $tbl_user_id)->get();
     $all_agents = TblCooperativesName::with("user")->where('tbl_user_id', $tbl_user_id)->get();
     $all_agents_data = $all_agents;
     if($all_agents_data){
       return $all_agents_data;
     }

     return null;
      } catch (\Throwable $th) {
        //throw $th;
      }
    }


    public function FindTblCooperativesNameById($tblCooperativesName){
      try {
        $tblCooperativesName = TblCooperativesName::find($tblCooperativesName);
        if($tblCooperativesName){
          return $tblCooperativesName;
        }
     
        return;

      } catch (\Throwable $th) {
          //throw $th;
      }

   }

   public function editTblCooperativesNameById($id,$tblCooperativesName){
    try {

    //  $cooperativeName = TblCooperativesName::findOrFail($id);
    //  $cooperativeName->update($tblCooperativesName);
      $tblCooperativesName =TblCooperativesName::where(['id'=> $id])->update($tblCooperativesName);
      if($tblCooperativesName){
        return $tblCooperativesName;
      }
   
      return;

    } catch (\Throwable $th) {
        //throw $th;
    }

 }

 

     public function TblCooperativesNameAuthenticateByEmail($cooperativeUsersAccount){

        $user = TblCooperativesName::where('email',$cooperativeUsersAccount)->first();
        if($user){
          return $user ;
        }
        return null;
      }


      



}