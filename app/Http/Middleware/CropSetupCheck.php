<?php

namespace App\Http\Middleware;

use Closure;
use App\Repositories\CropRepository;
use Illuminate\Support\Facades\Auth;


class CropSetupCheck
{

    protected $CropRepository;

    public function __construct(CropRepository $CropRepository)
    {
        $this->CropRepository = $CropRepository;
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
        
        $crop_setup = $this->CropRepository->crop_setup();
        if($crop_setup){
            return $next($request);
        }
        else{
            return redirect(route('fbo_setup_dashboard'));
        }
        
    }
    
}
