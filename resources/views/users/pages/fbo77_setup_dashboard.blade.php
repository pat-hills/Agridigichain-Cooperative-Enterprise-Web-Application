@extends('layouts.fbosetuplink')

@section('title')
  Admin | Home| Setup
@endsection


@section('content')  

<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">
                                        
                                    <div class="alert alert-secondary" role="alert">

                                         <!-- Hello {{ Auth::guard('admin')->user()->fullname}}, Let's start your onboarding it's 3 easy steps... -->
                                         
                                         
                                            </div>
                                        
                                
                                </h2>

                                    
                                    <!-- <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">UI Elements</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Cards</li>
                                            </ol>
                                        </nav>
                                    </div> -->


                                </div>
                            </div>
                        </div>
                        
                      
                       
                        <!-- @if($crop_season_setup)  -->

                          <div class="row">
                            
                        
                           
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div style="border-radius:10px;" class="card">
                                      <div style="border-radius:10px;"  class="card-header">
                                      <div class="progress mb-3">

                                     <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 100%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">100%</div>
                                           
                                            </div>
                                      </div>
                                      <div class="card-body">
                                        <img style="width:60px; height:auto;display: block; margin-left: auto; margin-right: auto;" alt="Total-farmers" src="{{ url('icons/applause.png') }}" />
                                   
                                        <blockquote class="blockquote mb-0">
                                            <p style="text-align:center">
                                                
                                          Congratulations you have completed your onboarding!!!
                                        </br>
                                        Your assigned Success Coach would contact you soon for introduction of the system.


                                            </p> 
                                         </blockquote>

                                         </br>

                                        <div style="text-align :center">
                                        <a style="displsy:block; margin-left:auto; margin-right:auto" href="/app/admin/user/login"   class="btn btn-success">
                                                    Please click here to login...
                                                        </a>    

                                       </div>

                                    </div>
                                </div>
                             </div>
                           </div>

                        <!-- @endif -->
                        <div class="row">
                            
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div style="border-radius:10px;"  class="card">
                                    <div style="border-radius:10px;"  class="card-header d-flex">
                                        <h4 class="mb-0">Step 1</h4>
                                             
                                    </div>

                                   
                                        <!-- @if(Session::has('message'))
                                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>{{ Session::get('message') }}</strong>  
                                                <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </a>
                                            </div>
                                         @endif -->
                                    <div class="card-body">
                                    <img style="width:60px; height:auto;display: block; margin-left: auto; margin-right: auto;" alt="Cooperative" src="{{ url('icons/male_farmer.png') }}" />
                                   
                                   
                                        </br>
                                
                                        <p class="card-text">

                                        <!-- @if($count_f > 0) -->

                                        <h5 style="text-align:center" class="text-muted">FBO/COOPERATIVE ADDED</h5>
                                      
                                        <!-- <h1 style="text-align:center" class="mb-1">{{$count_f}}</h1> -->
                                        <!-- @else -->
                                    

                                            Register or add atleast 1 of your out-growers, cooperatives, fbos, etc details. This helps in easy grouping
                                            or classifying farmers.
                                        
                                       
                                         <!-- @endif -->
                                        </p>

                                     
                                     
                                        


                                    </div>
                                    <div style="border-radius:10px; tex-aling:center"  class="card-footer d-flex text-muted">
                                   <!-- Total Cooperative,FBO added : {{$count_f}}  -->
                                   <!-- Last time updated:  -->

                                   <a href="#"  style="displsy:block; margin-left:auto; margin-right:auto"  class="btn btn-dark" data-toggle="modal" data-target="#stepone">
                                                           Register or add here
                                                        </a>  
                                    </div>  

                                </div>
                            </div>

                            <!-- step one modal -->

                            <div class="modal fade" id="stepone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Cooperative,FBO</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                                <h5 class="card-header">Registration Form</h5>
                                                                <div class="card-body">
                                                                    <form action="{{ route('admin.addFboOnSetup') }}" method="POST">
                                                                    {{ csrf_field() }}
                                                                  

                                                                  

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Name</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="name" placeholder="Enter Name" class="form-control">
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Location</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="location" placeholder="Enter Location" class="form-control">
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">State</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="state" placeholder="Enter State / Region" class="form-control">
                                                                            </div>
                                                                        </div>


                                                                         

                                                                        

                                                                        <div class="modal-footer">
                                                                                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" name="submitCreateUser" class="btn btn-primary">Submit</button>
                                                                            </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                     
                                                
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>


                                 <!-- step one modal -->




                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div style="border-radius:10px;" class="card">
                                    <div style="border-radius:10px;" class="card-header d-flex">
                                        <h4 class="mb-0">Step 2</h4>
                                        
                                     </div>

                                     <!-- @if(Session::has('message_user_fbo_setup'))
                                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>{{ Session::get('message_user_fbo_setup') }}</strong>  
                                                <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </a>
                                            </div>
                                         @endif -->

                                     <div class="card-body">

                                     <img style="width:60px; height:auto;display: block; margin-left: auto; margin-right: auto;" alt="Main crop" src="{{ url('icons/plant.png') }}" />
                                       
                                       </br>
                                        <p class="card-text">

                                        <!-- @if($count_c > 0) -->

                                           <h5 style="text-align:center" class="text-muted">MAIN CROP ADDED</h5>

                                        <!-- <h1 style="text-align:center" class="mb-1">{{$get_cooperative_crop_detials->name_of_crop}}</h1> -->
                                         <!-- @else -->


                                        Add the main crop and few details your farmers in cooperatives farm to help in pushing content information


                                        <!-- @endif -->
                                        
                                        </p>

                                     
                                    
                                        
                                        
                                     </div>
                                     <!-- @if($count_c > 0) -->
                                        <div style="border-radius:10px; text-align:center" class="card-footer d-flex text-muted">
                                          <button disabled style="displsy:block; margin-left:auto; margin-right:auto" href="#" class="btn btn-dark" >
                                                         Main crop added!
                                                        </button>
                                         <!-- @else     -->
                                         <div style="border-radius:10px; text-align:center" class="card-footer d-flex text-muted">
                                          <a style="displsy:block; margin-left:auto; margin-right:auto" href="#" class="btn btn-dark" data-toggle="modal" data-target="#steptwo">
                                                         Add crop here!
                                         </a>
                                         <!-- @endif -->
                                        </div>   
                                </div>
                            </div>

                               <!-- step two modal -->

                                   
                               <div class="modal fade" id="steptwo_old" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                                <h5 class="card-header">Registration Form</h5>
                                                                <div class="card-body">
                                                                    <form action="{{ route('admin.addUserOnSetup') }}" method="POST">
                                                                    {{ csrf_field() }}
                                                                  

                                                                    <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Fullname</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="fullname" placeholder="Enter Fullname" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Contact</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="contact" placeholder="Enter Contact" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Email</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="email" placeholder="Enter Email" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Password</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="password" placeholder="Enter Password (Eg:123456)" class="form-control">
                                                                            </div>
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">(NB: Users can password later!)</label>
                                                                        </div>

                                                                 <div class="form-group row">
                                                                                <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">FBO</label>
                                                                                <div class="col-9 col-lg-10">

                                                                                    <!-- <select required class="form-control" name="fbo_id">
                                                                         <option value="noValue">-- Assign Supervisor To FBO--</option>
                                                                       @if(isset($get_all_fbos_setup))
                                                                        @foreach($get_all_fbos_setup as $data)
                                                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                                                        @endforeach
                                                                        @endif

                                                                                   </select> -->
                                                                                
                                                                                </div>
                                                                    </div> 
                                                                    
                                                                    
                                                                    <div class="form-group row">
                                                                                <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Role</label>
                                                                                <div class="col-9 col-lg-10">

                                                                                    <select  class="form-control" name="role">
                                                                         <option value="noValue">Select Role</option>
                                                                         <option value=""></option>
                                                                            <option >Field-Agent</option>
                                                                            <option >Field-Supervisor</option>
                                                                            <option >Purchasing-Clerk</option>
                                                                                   </select>
                                                                                
                                                                                </div>
                                                                    </div> 

                                                                        

                                                                        <div class="modal-footer">
                                                                                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" name="submitCreateUser" class="btn btn-primary">Submit</button>
                                                                            </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                     
                                                
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>


                                 <!-- step two modal -->





                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div style="border-radius:10px;" class="card">
                                    <div style="border-radius:10px;" class="card-header d-flex">
                                        <h4 class="card-header-title">Step 3</h4>
                                        
                                    </div>

                                    <!-- @if(Session::has('message_crop'))
                                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>{{ Session::get('message_crop') }}</strong>  
                                                <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </a>
                                            </div>
                                         @endif -->


                                    <div class="card-body">
                                    <img style="width:60px; height:auto;display: block; margin-left: auto; margin-right: auto;" alt="Crop calendars" src="{{ url('icons/schedule.png') }}" />
                                       
                                       </br>
                                        <p class="card-text">

                                        <!-- @if($count_c_s > 0) -->

<h5 style="text-align:center" class="text-muted">NO. OF SEASONAL DATES ADDED</h5>

<!-- <h1 style="text-align:center" class="mb-1">{{$count_c_s}}</h1> -->
<!-- @else -->


Add your ideal planting and harvesting date of your main crop to help track activity timelines. 


<!-- @endif -->

                                    
                                     
                                        
                                        
                                        </p>
                                      
                                    </div>


                                    <!-- @if($crop_season_setup)  -->
                                        <div style="border-radius:10px; text-align:center" class="card-footer d-flex text-muted">
                                          <button disabled style="displsy:block; margin-left:auto; margin-right:auto" href="#" class="btn btn-dark" >
                                            Crop calendar(s) added!
                                                        </button>
                                         <!-- @else     -->
                                         <div style="border-radius:10px; text-align:center" class="card-footer d-flex text-muted">
                                    <a href="#" style="displsy:block; margin-left:auto; margin-right:auto" class="btn btn-dark" data-toggle="modal" data-target="#stepthree">
                                                          Let's add your crop calendars!
                                                        </a>   
                                         <!-- @endif -->


                                  
                                  
                                  
                                    </div> 

                                </div>
                            </div>


                              <!-- step three modal -->

                                    
                              <div class="modal fade" id="steptwo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Main Crop</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                                <h5 class="card-header">Crop Registration Form</h5>
                                                                <div class="card-body">
                                                                    <form action="{{ route('admin.addCropOnSetup') }}" method="POST">
                                                                    {{ csrf_field() }}


                                                                    <div class="form-group row">
                                                                                <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Crop</label>
                                                                                <div class="col-9 col-lg-10">

                                                                                    <select reqiured  class="form-control" name="name_of_crop">
                                                                         <option value="noValue">Select Crop</option>
                                                                         
                                                                            <option >Cocoa</option>
                                                                            <option >Maize</option>
                                                                            <option >Cassava</option>
                                                                            <option >Wheat</option>
                                                                            <option >Rice</option>
                                                                                   </select>
                                                                                
                                                                                </div>
                                                                    </div> 

                                                                  

                                                                    <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Spacing</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="average_spacing" placeholder="Average planting space (cm)" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Season</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="no_of_season" placeholder="Number of planting season in a year" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Notes</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <textarea name="description" class="form-control">

                                                                                </textarea>
                                                                             
                                                                            </div>
                                                                        </div>

                                                                        

                                                                
                                                                    
                                                                    
                                                                   
                                                                        

                                                                        <div class="modal-footer">
                                                                                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" name="submitCreateUser" class="btn btn-primary">Submit</button>
                                                                            </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                     
                                                
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>


                                 <!-- step three modal -->


                            <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header d-flex">
                                        <h4 class="card-header-title">Step 4</h4>
                                        
                                    </div>

                                    @if(Session::has('message_crop_season'))
                                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>{{ Session::get('message_crop_season') }}</strong>  
                                                <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </a>
                                            </div>
                                         @endif

                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    
                                        <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#stepfour">
                                                         Let's add your main crop seasonal planting and harvesting dates
                                                        </a>    
                                    </div>

                                    <div class="card-footer d-flex text-muted">
                                    I really need this footer for 
                                    </div> 
                                </div>
                            </div> -->

 <!-- step four modal -->

 <div class="modal fade" id="stepthree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add crop seasonal dates</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                                <h5 class="card-header">Season Date Registration Form</h5>
                                                                <div class="card-body">
                                                                    <form action="{{ route('admin.addCropSeasonInfo') }}" method="POST">
                                                                    {{ csrf_field() }}


                                                                    <div class="form-group row">
                                                                                <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Season #</label>
                                                                                <div class="col-9 col-lg-10">

                                                                                    <select reqiured  class="form-control" name="season_no">

                                                                                    <!-- @for($i=1;$i<=$get_cooperative_crop_detials->no_of_season;$i++) -->
                                                                                    <!-- <option>{{$i}}</option>
                                                                                    @endfor -->
                                                                                   </select>
                                                                                
                                                                                </div>
                                                                    </div> 

                                                                  

                                                                    <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Plant date</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="date" required name="ideal_planting_date" placeholder="ideal_planting_date" class="form-control">
                                                                            </div>
                                                                        </div>



                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Harv. Date</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="date" required name="ideal_harvesting_date" placeholder="ideal_harvesting_date" class="form-control">
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Infestation</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text"  name="possible_infestation" placeholder="Possible infestation in the season" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Notes</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <textarea name="description" class="form-control">

                                                                                </textarea>
                                                                             
                                                                            </div>
                                                                        </div>

                                                                        

                                                                
                                                                    
                                                                    
                                                                   
                                                                        

                                                                        <div class="modal-footer">
                                                                                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" name="submitCreateUser" class="btn btn-primary">Submit</button>
                                                                            </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                     
                                                
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>


                                 <!-- step four modal -->


<!-- 
                            <div class="col-xl-6 col-lg-6 col-md-126 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header d-flex">
                                        <h4 class="card-header-title ">Step 5</h4>
                                         
                                    </div>

                                    @if(Session::has('message_vendor_buyer'))
                                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>{{ Session::get('message_vendor_buyer') }}</strong>  
                                                <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </a>
                                            </div>
                                         @endif

                                    <div class="card-body">
                                        <div class="tab-content mb-3" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Some quick example text to build on the card title and make up the bulk of the card's content.</div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Some quick example text to build on the card title and make up the bulk of the card's content.</div>
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Some quick example text to build on the card title and make up the bulk of the card's content.</div>
                                        </div>
                                        <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#stepfive">
                                                        Finally let's add your vendors, suppliers and buyers
                                                        </a>              
                                    </div>
                                    <div class="card-footer d-flex text-muted">
                                    I really need this footer for 
                                    </div> 
                                </div>
 -->


                                 <!-- step five modal -->

          
                                 <div class="modal fade" id="stepfive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add vendors and buyers</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                                <h5 class="card-header">Vendors And Buyers Registration Form</h5>
                                                                <div class="card-body">
                                                                    <form action="{{ route('admin.addVendorAndBuyer') }}" method="POST">
                                                                    {{ csrf_field() }}
                                                                  

                                                                    <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Fullname</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="fullname" placeholder="Enter fullname" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Contact</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="contact" placeholder="Enter contact" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Email</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="email" placeholder="Enter email" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Address</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="address" placeholder="Enter address" class="form-control">
                                                                            </div>
                                                                        
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Location</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="location" placeholder="Enter address" class="form-control">
                                                                            </div>
                                                                        
                                                                        </div>

                                                                 <div class="form-group row">
                                                                                <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Category</label>
                                                                                <div class="col-9 col-lg-10">

                                                                                    <select required class="form-control" name="category">
                                                                         <option value="noValue">Select Category</option>
                                                                       
                                                                            <option value="Buyer">Buyer</option>
                                                                            <option value="Vendor">Vendor</option>
                                                                        

                                                                                   </select>
                                                                                
                                                                                </div>
                                                                    </div> 
                                                                    
                                                                    
                                                                   
                                                                    <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Notes</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <textarea name="description" class="form-control">

                                                                                </textarea>

                                                                              
                                                                            </div>
                                                                        
                                                                        </div>
                                                                        

                                                                        <div class="modal-footer">
                                                                                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" name="submitCreateUser" class="btn btn-primary">Submit</button>
                                                                            </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                     
                                                
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>

                                 <!-- step five modal -->
                            </div>
                        </div>
                      
                           


                        
                    </div>
                   
                </div>
            </div> 
        </div>

    
 

@endsection


 