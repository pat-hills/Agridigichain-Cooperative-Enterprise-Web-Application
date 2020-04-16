<?php

namespace App\Http\Middleware;

use Closure;
use App\Repositories\CropSeasonInfoRepository;
use Illuminate\Support\Facades\Auth;


class CropSeasonSetupCheck
{

    protected $CropSeasonInfoRepository;

    public function __construct(CropSeasonInfoRepository $CropSeasonInfoRepository)
    {
        $this->CropSeasonInfoRepository = $CropSeasonInfoRepository;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        $crop_season_setup = $this->CropSeasonInfoRepository->crop_season_setup();
        if($crop_season_setup){
            return $next($request);
        }
        else{
            return redirect(route('fbo_setup_dashboard'));
        }
        
    }
    
}
