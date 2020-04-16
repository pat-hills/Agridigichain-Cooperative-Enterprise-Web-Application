<?php

namespace App\Http\Middleware;

use Closure;
use App\Repositories\VendorAndSupplierRepository;
use Illuminate\Support\Facades\Auth;


class VendorsAndBuyersSetupCheck
{

    protected $VendorAndSupplierRepository;

    public function __construct(VendorAndSupplierRepository $VendorAndSupplierRepository)
    {
        $this->VendorAndSupplierRepository = $VendorAndSupplierRepository;
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
        
        $vendor_buyer_setup = $this->VendorAndSupplierRepository->vendor_buyer_setup();
        if($vendor_buyer_setup){
            return $next($request);
        }
        else{
            return redirect(route('fbo_setup_dashboard'));
        }
        
    }
    
}
