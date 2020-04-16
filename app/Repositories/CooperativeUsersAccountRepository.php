<?php 


namespace App\Repositories;

use \App\Models\CooperativeUsersAccount;
use \App\Models\TblComment;
use \App\Models\TblCooperative;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
//use App\Providers\AuthServiceProvider;


class CooperativeUsersAccountRepository  {
    protected $cooperativeUsersAccount;
    protected $TblComment;

    public function __construct(TblCooperative $cooperativeUsersAccount, TblComment $TblComment)
    {
        $this->cooperativeUsersAccount = $cooperativeUsersAccount;
        $this->TblComment = $TblComment;
       
    }


    public function CreateCooperativeUserAccount($cooperativeUsersAccount){
       try {
       $cooperativeUsersAccount = TblCooperative::create($cooperativeUsersAccount);
         return $cooperativeUsersAccount;
       } catch (\Throwable $th) {
           //throw $th;
       }

    }


    public function CreateTblComment($TblComment){
        try {
        $TblCommentAccount = TblComment::create($TblComment);
          return $TblCommentAccount;
        } catch (\Throwable $th) {
            //throw $th;
        }
 
     }

     public function CooperativeAuthenticateByEmail($cooperativeUsersAccount){

        $user = TblCooperative::where('email',$cooperativeUsersAccount)->first();
        if($user){
          return $user ;
        }
        return null;
      }


      public function authenticate(Request $request){

        $usercooperative = TblCooperative::where('email',$request->email)->first();
        if($usercooperative && Hash::check($request->password, $usercooperative->password)){
          return $usercooperative ;
        }
        return null;
      }




}