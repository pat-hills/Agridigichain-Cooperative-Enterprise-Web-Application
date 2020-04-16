@extends('layouts.userlinks')

@section('title')
  Admin|Home
@endsection


@section('content')    
       
      
      

<div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    </br>
                        <div class="page-header">
                        <h2 class="pageheader-title">
                            <img style="width:60px; height:auto;" alt="Total-farmers" src="{{ url('icons/farm_farmers.png') }}" />
                            <b style="color:#71748d; margin-left:10px;">Farmers</b> 
                            
                            </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li> -->
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            

             
               
                                    
                                    
                                   
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Farmer</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                                <h5 class="card-header">Farmers Form</h5>
                                                                <div class="card-body">
                                                                    <form action="{{ route('admin.createfarmer') }}" method="POST">
                                                                    {{ csrf_field() }}
                                                                  

                                                                    <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Fullname</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="fullname" placeholder="Enter Fullname" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Username</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text"  name="username" placeholder="Enter Username" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Email</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text"  name="email" placeholder="Enter Contact" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                                <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Gender</label>
                                                                                <div class="col-9 col-lg-10">

                                                                                    <select required class="form-control" name="gender">
                                                                         <option value="noValue">--Select Gender--</option>
                                                                         <option value="Male">Male</option>
                                                                         <option value="Female">Female</option>
                                                                                   </select>
                                                                                
                                                                                </div>
                                                                            </div>      

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Contact</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text"  name="contact" placeholder="Enter Contact" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Location</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="location" placeholder="Enter Location" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Age</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="age" placeholder="Enter Age" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Marital</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="marital_status" placeholder="Enter marital_status" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Education</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="educational_level" placeholder="Enter educational_level" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Main Occ.</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="main_occupation" placeholder="Enter main_occupation" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Minor Occ.</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="minor_occupation" placeholder="Enter minor_occupation" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                       
                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Dependant</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="dependants" placeholder="Enter dependants" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right"> Acres</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="farm_acres" placeholder="Enter farm_acres" class="form-control">
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Main Crop</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="main_crop" placeholder="Enter main_crop" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                                <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">User</label>
                                                                                <div class="col-9 col-lg-10">

                                                                                    <select required class="form-control" name="user_id">
                                                                         <option value="noValue">-- Assign User To Farmer--</option>
                                                                       @if(isset($get_all_users))
                                                                        @foreach($get_all_users as $data)
                                                                            <option value="{{$data->id}}">{{$data->fullname}}</option>
                                                                        @endforeach
                                                                        @endif

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


                             
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">

                        
                                    
                                    <a style="float :right;" href="#"   class="btn btn-rounded btn-success" data-toggle="modal" data-target="#exampleModal">
                                            Add Farmer
                                        </a>
                                <h5 class="mb-0">List Of Farmers</h5>
                           
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                <table id="farmers_list" class="table table-striped table-bordered second" style="width:100%">
                                    <thead>
                                                <tr>    
                                                <th>Photo</th>
                                                    <th>Fullname</th>
                                                    <th>Gender</th>
                                                    <th>Age</th>
                                                    <th>Contact</th>
                                                    <th>Education</th>
                                                    <th>Main Occupation</th>
                                                 <th>Farm acres</th>  
                                                </tr>
                                            </thead>
                                        <tbody>
                                        @if(!isset($get_users_farmers))
                                            <tr>
                                                <td> No Records </td>
                                            </tr>
                                            @else
                                          
                                                @foreach ($get_users_farmers  as $data)  
                                                <tr>
                                              <td>
                                              <!-- <img style="width:60px; height:auto;" alt="Profile-Photos" src={{ url('uploads/') }}   />     -->
                                           
                                               <img class="" style="width:60px; height:auto; border-radius:10px;" src="{{asset('uploads/'.$data -> image_url)}}" />
                                              </td>     
                                                    <td> {{trim($data->fullname,'"')}} </td>  
                                                    <td>{{trim($data->gender,'"')}} </td> 
                                                    <td>{{trim($data->age,'"')}} </td> 
                                                    <td>{{trim($data->contact,'"')}} </td> 
                                                    <td>{{trim($data->educational_level,'"')}} </td> 
                                                    <td>{{trim($data->main_occupation,'"')}} </td> 
                                                    <td>{{trim($data->farm_acres,'"')}} </td> 
                                                   
                                                </tr> 
                                                @endforeach   
                                                @endif    
                                                
                                        </tbody>
                                                
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Photo</th>
                                            <th>Fullname</th>
                                                    <th>Gender</th>
                                                    <th>Age</th>
                                                    <th>Contact</th>
                                                    <th>Education</th>
                                                    <th>Main Occupation</th>
                                                    <th>Farm acres</th>  
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div> 
                </div>

            </div>
 
    

@endsection


<!-- @section('extra_scripts')

<script src="{{asset('/admin/app-assets/js/scripts/pages/dashboard-fitness.js')}}" type="text/javascript"></script>
 
@endsection -->
