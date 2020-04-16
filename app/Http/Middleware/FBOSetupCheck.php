<?php

namespace App\Http\Middleware;

use Closure;
use App\Repositories\FBORepository;
use Illuminate\Support\Facades\Auth;


class FBOSetupCheck
{

    protected $FBORepository;

    public function __construct(FBORepository $FBORepository)
    {
        $this->FBORepository = $FBORepository;
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
        
        $fbo_setup = $this->FBORepository->fbo_setup();
        if($fbo_setup){
            return $next($request);
        }
        else{
            return redirect(route('fbo_setup_dashboard'));
        }
        
    }
    
}
