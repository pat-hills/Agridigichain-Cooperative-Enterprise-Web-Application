<?php

namespace App\Http\Middleware;

use Closure;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;


class UserSetupCheck
{

    protected $UserRepository;

    public function __construct(UserRepository $UserRepository)
    {
        $this->UserRepository = $UserRepository;
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
        
        $user_setup = $this->UserRepository->user_setup();
        if($user_setup){
            return $next($request);
        }
        else{
            return redirect(route('fbo_setup_dashboard'));
        }
        
    }
    
}
