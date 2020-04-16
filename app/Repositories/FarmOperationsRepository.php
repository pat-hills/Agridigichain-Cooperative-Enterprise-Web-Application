<?php 


namespace App\Repositories;

use \App\Models\TblMoneyIn;
use \App\Models\TblMoneyOut;
use \App\Models\TblFarmCordinate;
use \App\Models\TblVisit;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
//use App\Providers\AuthServiceProvider;


class FarmOperationsRepository  {
    protected $tblMoneyIn;
    protected $tblMoneyOut;
    protected $tblFarmCordinate;
    protected $tblVisit;

    public function __construct(TblMoneyIn $tblMoneyIn,TblMoneyOut $tblMoneyOut,TblFarmCordinate $tblFarmCordinate,TblVisit $tblVisit)
    {
        $this->tblMoneyIn = $tblMoneyIn;
        $this->tblMoneyOut = $tblMoneyOut;
        $this->tblFarmCordinate = $tblFarmCordinate;
        $this->tblVisit = $tblVisit;
       
    }


    public function CreateTblMoneyIn($tblMoneyIn){
       try {
       $tblMoneyIn = TblMoneyIn::create($tblMoneyIn);
         return $tblMoneyIn;
       } catch (\Throwable $th) {
           //throw $th;
       }

    }


    public function CreateTblMoneyOut($tblMoneyOut){
        try {
        $tblMoneyOut = TblMoneyOut::create($tblMoneyOut);
          return $tblMoneyOut;
        } catch (\Throwable $th) {
            //throw $th;
        }
 
     }


     public function CreateTblFarmCordinate($tblFarmCordinate){
      try {
      $tblFarmCordinate = TblFarmCordinate::create($tblFarmCordinate);
        return $tblFarmCordinate;
      } catch (\Throwable $th) {
          //throw $th;
      }

   }


   public function CreateTblVisit($tblVisit){
    try {
    $tblVisit = TblVisit::create($tblVisit);
      return $tblVisit;
    } catch (\Throwable $th) {
        //throw $th;
    }

 }



 
 public function sum_money_in($tbl_agent_ref_id){
  try {
   // $query_count_agent = ['tbl_user_id'=>$tbl_user_id,'tbl_agents_id'=> $tbl_agents_id];
 $sum_money_in = TblMoneyIn::where('tbl_user_id', $tbl_agent_ref_id)->sum('totalPrice');
 if($sum_money_in){
   return $sum_money_in;
 }

 return null;
  } catch (\Throwable $th) {
    //throw $th;
  }
}

public function get_money_in($tbl_agent_ref_id){
  try {
    
   // $query_count_agent = ['tbl_user_id'=>$tbl_user_id,'tbl_agents_id'=> $tbl_agents_id];
 $get_money_in = TblMoneyIn::where('tbl_user_id', $tbl_agent_ref_id)->get();
 if($get_money_in){
   return $get_money_in;
 }

 return null;
  } catch (\Throwable $th) {
    //throw $th;
  }
}


 
public function sum_money_out($tbl_agent_ref_id){
  try {
 $sum_money_out = TblMoneyOut::where('tbl_user_id', $tbl_agent_ref_id)->sum('totalPrice');
 //$sum_money_out_data = $sum_money_out->sum(totalPrice);
 if($sum_money_out){
   return $sum_money_out;
 }

 return null;
  } catch (\Throwable $th) {
    //throw $th;
  }
}

public function get_money_out($tbl_agent_ref_id){
  try {
 $get_money_out = TblMoneyOut::where('tbl_user_id', $tbl_agent_ref_id)->get();
 if($get_money_out){
   return $get_money_out;
 }

 return null;
  } catch (\Throwable $th) {
    //throw $th;
  }
}

public function get_farm_coordinates($tbl_agent_ref_id){
  try {
 $get_money_out = TblFarmCordinate::where('tbl_user_id', $tbl_agent_ref_id)->get();
 if($get_money_out){
   return $get_money_out;
 }

 return null;
  } catch (\Throwable $th) {
    //throw $th;
  }
}


public function get_farm_visits($tbl_agent_ref_id){
  try {
 $get_money_out = TblVisit::where('tbl_user_id', $tbl_agent_ref_id)->get();
 if($get_money_out){
   return $get_money_out;
 }

 return null;
  } catch (\Throwable $th) {
    //throw $th;
  }
}

    


      




}