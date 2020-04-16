<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\FarmersRepository;
use App\Repositories\FBORepository;
use App\Repositories\CropRepository;
use App\Repositories\CropSeasonInfoRepository;
use \App\Models\Farmer;
 

class AppAdminController extends Controller
{

  protected $farmerRepository;
  protected $fboRepository;
  protected $CropRepository;
  protected $CropSeasonInfoRepository;
    // protected $adminRepository ;
    // protected $user ;


    public function __construct(FarmersRepository $farmerRepository,FBORepository $fboRepository,
    CropRepository $CropRepository,CropSeasonInfoRepository $CropSeasonInfoRepository){
      $this->farmerRepository = $farmerRepository;
      $this->fboRepository = $fboRepository ;
      $this->CropRepository = $CropRepository ;
      $this->CropSeasonInfoRepository = $CropSeasonInfoRepository ;

    }

    // public function login_page() {
      
    //   return view('admin.login') ;
    // }

    // public function index_charts()
    // {


    // }


    


      public function admin_users_dashboard(){
        $total_farmers;
        $count_male;
        $count_female;
        $sum_acres;
        $main_occupation;
        //sum_acres_of_farmers//get_users_farmers_main_occupation//total_farmers
        $count_users_farmers = $this->farmerRepository->count_users_farmers();
        $count_male_users_farmers = $this->farmerRepository->count_male_users_farmers();
        $count_female_users_farmers = $this->farmerRepository->count_female_users_farmers();
        $sum_acres_of_farmers = $this->farmerRepository->sum_acres_of_farmers();
        $get_users_farmers_main_occupation = $this->farmerRepository->get_users_farmers_main_occupation();
        if($count_users_farmers){
          $total_farmers = $count_users_farmers;
        }else{
          $total_farmers = 0;
        }
        if($count_male_users_farmers){
          $count_male = $count_male_users_farmers;
        }else{
          $count_male = 0;
        }
        if($count_female_users_farmers){
          $count_female = $count_female_users_farmers;
        }else{
          $count_female = 0;
        }
        if($sum_acres_of_farmers){
          $sum_acres = $sum_acres_of_farmers;
        }else{
          $sum_acres = 0;
        }

        if($get_users_farmers_main_occupation){
          $main_occupation = $get_users_farmers_main_occupation;
        }else{
          $main_occupation = 0;
        }


  

        $response = ['total_farmers' => $total_farmers,'count_male' => $count_male,'count_female' => $count_female,
        'sum_acres' => $sum_acres,'main_occupation' => $main_occupation];
   return view('users.pages.app-users-admin-dashboard',$response);
      } 
      
       
      
 




    
}
