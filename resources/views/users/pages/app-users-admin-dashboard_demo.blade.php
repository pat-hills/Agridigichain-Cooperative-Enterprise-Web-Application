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
                                <h2 class="pageheader-title">Hello Stephen Osei Agyemang, This An Overview Of Your FBO Dashboard! </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li> -->
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
                                        <h5 style="text-align:center" class="text-muted">TOTAL FARMERS</h5>
                                      
                                       
                                        <div class="">
                                            <h1 style="text-align:center" class="mb-1">{{1798}}</h1>
                                        </div>
                                        </br>
                                        <img style="width:90px; height:auto;display: block; margin-left: auto; margin-right: auto;" alt="Total-farmers" src="{{ url('icons/male_farmer.png') }}" />
                                      
                                        
                                       
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">

                            <div style="border-radius:10px; height:230px;" class="card">
                                    <div class="card-body">
                                        <h5 style="text-align:center" class="text-muted">TOTAL ADDED CROPS</h5>
                                        <div class="">
                                        <h1 style="text-align:center" class="mb-1">{{12}}</h1>
                                        </div>  </br>
                                        <img style="width:90px; height:auto;display: block; margin-left: auto; margin-right: auto;" alt="Total-Crops" src="{{ url('icons/plant.png') }}" />
                                          
                                    </div>
                                 
                                </div>

                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div style="border-radius:10px; height:230px;" class="card">
                            <div class="card-body">
                                        <h5 style="text-align:center" class="text-muted">MONTHLY TRACKED ACTIVITIES </h5>
                                        <div class="">
                                        <h1 style="text-align:center" class="mb-1">{{840}}</h1>
                                        </div>  </br>
                                        <img style="width:90px; height:auto;display: block; margin-left: auto; margin-right: auto;" alt="Total-farmers" src="{{ url('icons/harvest.png') }}" />
                                          
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                           <div style="border-radius:10px; height:230px;" class="card">    
                                   <div class="card-body">
                                   <h5 style="text-align:center" class="text-muted">TOTAL FARM ACRES </h5>
                                        <div class="">
                                        <h1 style="text-align:center" class="mb-1">{{1244}}</h1>
                                        </div>  </br>
                                        <img style="width:90px; height:auto;display: block; margin-left: auto; margin-right: auto;" alt="Total-farmers" src="{{ url('icons/agric_land.png') }}" />
                                      
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div> 


 
 
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div style="border-radius:10px;" class="card">
                                    <h5 style="text-align:center; margin-top:15px;" class="text-muted">Sales Tracked On Active Crops, 2019 </h5>
                                    <div class="card-body" style="height:270px;">
                                    <div style="height:250px;" class="ct-chart-product ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                          

                            <!-- <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                <div style="border-radius:10px;" class="card">
                                   <div class="float-right">
                                                <select class="custom-select">
                                                    <option selected>Today</option>
                                                    <option value="1">Weekly</option>
                                                    <option value="2">Monthly</option>
                                                    <option value="3">Yearly</option>
                                                </select>
                                            </div>  
                                <h5 style="text-align:center; margin-top:15px;" class="text-muted">Revenue by Category</h5>
                                    <div style="height:270px;"  class="card-body">
                                        <div style="height:250px;" id="morris_totalrevenue"></div>
                                    </div>
                                  
                                </div>
                            </div> -->

                        </div>


 
                        

 
           
        </div>
    </div> 

    
 

@endsection


<!-- @section('extra_scripts')

<script src="{{asset('/admin/app-assets/js/scripts/pages/dashboard-fitness.js')}}" type="text/javascript"></script>
 
@endsection -->
