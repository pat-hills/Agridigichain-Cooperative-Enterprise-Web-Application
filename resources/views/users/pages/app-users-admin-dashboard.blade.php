@extends('layouts.userlinks')

@section('title')
  Admin|Home
@endsection


@section('content')  

 <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">
                                    
                                    Hello {{Auth::guard('admin')->user()->fullname}}, This An Overview Of Your Dashboard! 
                                
                                </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>-->
                                            <li class="breadcrumb-item active" aria-current="page">TOTALS</li> 
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div style="border-radius:10px; height:230px;" class="card">
                                
                                    <div  class="card-body">
                                        <h5 style="text-align:center" class="text-muted"> FARMERS </h5>
                                      
                                       
                                        <div class="">
                                            <h1 style="text-align:center" class="mb-1">890,777</h1>
                                        </div>
                                        </br>
                                        <img style="width:60px; height:auto;display: block; margin-left: auto; margin-right: auto;" alt="Total-farmers" src="{{ url('icons/male_farmer.png') }}" />
                                       
                                        
                                        <!-- <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                        </div> -->
                                    </div>
                                    <!-- <div id="sparkline-revenue"></div> -->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">

                            <div style="border-radius:10px; height:230px;" class="card">
                                    <div class="card-body">
                                        <h5 style="text-align:center" class="text-muted"> INFESTATION </h5>
                                        <div class="">
                                        <h1 style="text-align:center" class="mb-1">77</h1>
                                        </div>  </br>
                                        <img style="width:60px; height:auto;display: block; margin-left: auto; margin-right: auto;" alt="Total-farmers" src="{{ url('icons/insect.png') }}" />
                                          
                                    </div>
                                    <!-- <div id="sparkline-revenue2"></div> -->
                                </div>

                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div style="border-radius:10px; height:230px;" class="card">
                            <div class="card-body">
                                        <h5 style="text-align:center" class="text-muted"> FERTILIZER USAGE </h5>
                                        <div class="">
                                        <h1 style="text-align:center" class="mb-1">7,900 Kg</h1>
                                        </div>  </br>
                                        <img style="width:60px; height:auto;display: block; margin-left: auto; margin-right: auto;" alt="Total-farmers" src="{{ url('icons/fertilizer.png') }}" />
                                          
                                    </div>
                                    <!-- <div id="sparkline-revenue3"></div> -->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                           <div style="border-radius:10px; height:230px;" class="card">    
                                   <div class="card-body">
                                   <h5 style="text-align:center" class="text-muted"> HARVEST </h5>
                                        <div class="">
                                        <h1 style="text-align:center" class="mb-1">6,890 Tons</h1>
                                        </div>  </br>
                                        <img style="width:60px; height:auto;display: block; margin-left: auto; margin-right: auto;" alt="Total-farmers" src="{{ url('icons/harvest.png') }}" />
                                      
                                        </div>
                                    </div>
                                    <!-- <div id="sparkline-revenue4"></div> -->
                                </div>
                            </div>
                        </div> 


 


<!-- 

                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Sales</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">$12099</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">New Customer</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">1245</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Visitor</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">13000</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Orders</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">1340</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         -->
                        <!-- <div class="row">
                            <div  class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                <div style="border-radius:10px;"  class="card">
                                    <h5 class="card-header">Farmers Population Chart</h5>
                                    <div class="card-body">
                                 
                                        <div id="pie_chart"  style="height: 420px;">
                                     
                                        
                                        </div>
                                    </div>
                                </div>
                            </div> -->







                             
                        <!-- </div>  // Isolated div check its trace please remember for responsiveness -->


                        

 
           
        </div>
    </div> 

    
 

@endsection


 
