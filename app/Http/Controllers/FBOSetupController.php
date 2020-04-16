<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\FarmersRepository;
use App\Repositories\FBORepository;
use App\Repositories\CropRepository;
use App\Repositories\CropSeasonInfoRepository;
 

class FBOSetupController extends Controller
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

  
 
   public function fbo_setup_dashboard(){

    try {

      $count_f;
      $count_c;
      $count_c_s;
      $no_of_seasons_crop;
      $get_all_seasonal_calendar;
      $get_cooperative_crop_name;

       $count_users_fbos = $this->fboRepository->count_users_fbos();
       $count_crops = $this->CropRepository->count_crops();
       $count_crops_season = $this->CropSeasonInfoRepository->count_crops_season();
      $get_cooperative_crop_number_of_season = $this->CropSeasonInfoRepository->get_cooperative_crop_number_of_season();
      $get_cooperative_crop_name = $this->CropSeasonInfoRepository->get_cooperative_crop_name();
      $get_all_seasonal_calendar = $this->CropSeasonInfoRepository->get_all_seasonal_calendar();
      
    

      if($count_users_fbos){
        $count_f = $count_users_fbos;
      }else{
        $count_f = 0;
      }

      if($count_crops){
        $count_c = $count_crops;
      }else{
        $count_c = 0;
      }

      // if($count_crops_season==$get_cooperative_crop_detials->no_of_season){
      //   $no_of_seasons_crop = $count_crops_season;
      // }else{
      //   $no_of_seasons_crop = 0;
      // }
      


      if($count_crops_season){
        $count_c_s = $count_crops_season;
      }else{
        $count_c_s = 0;
      }

      // if($get_cooperative_crop_detials->no_of_season){
      //   $no_of_seasons_crop = $get_cooperative_crop_detials->no_of_season;
      // }else{
      //   $no_of_seasons_crop = 0;
      // }

//       $get_all_users_fbos_setup = $this->userRepository -> get_all_users();
//       $get_all_fbos_setup = $this->fboRepository -> get_users_fbos();

//     $responses_setup_data = [ 'get_all_fbos_setup' => $get_all_fbos_setup,
//     'count_f' => $count_f,'count_c_s' => $count_c_s,'count_c' => $count_c,
//    'get_cooperative_crop_detials'=>$get_cooperative_crop_detials,
//    'crop_season_setup'=>$crop_season_setup];

      $responses_setup_data = ['count_f'=>$count_f,'count_c'=>$count_c,'get_cooperative_crop_number_of_season'=>$get_cooperative_crop_number_of_season,
      'count_c_s'=>$count_c_s,'get_all_seasonal_calendar'=>$get_all_seasonal_calendar,'get_cooperative_crop_name'=>$get_cooperative_crop_name ];

      return view('users.pages.fbo_setup_dashboard',$responses_setup_data);
    } catch (\Throwable $th) {
      //throw $th;
    }
   }   




    
}
