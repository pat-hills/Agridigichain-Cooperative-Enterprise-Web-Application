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
                            <img style="width:60px; height:auto;" alt="Total-farmers" src="{{ url('icons/fbos.png') }}" />
                            <b style="color:#71748d; margin-left:10px;">FBO's</b> 
                            
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

            
                @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>{{ Session::get('message') }}</strong>  
                                                <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </a>
                                            </div>
          @endif 
             
               
                                    
                                    
                                   
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add FBO's</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                                <h5 class="card-header">FBO Form</h5>
                                                                <div class="card-body">
                                                                    <form action="{{ route('admin.addfbo') }}" method="POST">
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


                             
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">

                        
                                    
                                    <a style="float :right;" href="#"   class="btn btn-rounded btn-success" data-toggle="modal" data-target="#exampleModal">
                                            Add FBO
                                        </a>
                                <h5 class="mb-0">List Of FBO's</h5>
                           
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="addaccinexp" class="table table-striped table-bordered second" style="width:100%">
                                    <thead>
                                                <tr>    
                                                    <th>Date created</th>
                                                    <th>Name</th>
                                                    <th>Location</th>
                                                    <th>Region</th>
                                                    <!-- <th>Action</th> -->
                                                </tr>
                                            </thead>
                                        <tbody>
                                        @if(!isset($get_all_fbos))
                                            <tr>
                                                <td> No Records </td>
                                            </tr>
                                            @else
                                                @foreach ($get_all_fbos  as $data)  
                                                <tr>
                                                    <td>{{\Carbon\Carbon::parse($data->created_at)->format('jS \o\f F, Y')}}</td>        
                                                    <td> {{$data->name}} </td>  
                                                    <td>{{$data->location}} </td> 
                                                    <td>{{$data->state}} </td> 
                                                   
                                                </tr> 
                                                @endforeach
                                                @endif   
                                                
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Date created</th>
                                                    <th>Name</th>
                                                    <th>Location</th>
                                                    <th>Region</th>
                                                    <!-- <th>Action</th> -->
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
