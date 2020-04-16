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
                            <img style="width:60px; height:auto;" alt="Total-farmers" src="{{ url('icons/users.png') }}" />
                            <b style="color:#71748d; margin-left:10px;">Users</b> 
                            
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                                <h5 class="card-header">Users Registration Form</h5>
                                                                <div class="card-body">
                                                                    <form action="{{ route('admin.adduser') }}" method="POST">
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

                                                                                    <select required class="form-control" name="fbo_id">
                                                                         <option value="noValue">-- Assign Supervisor To FBO--</option>
                                                                       @if(isset($get_all_fbos))
                                                                        @foreach($get_all_fbos as $data)
                                                                            <option value="{{$data->id}}">{{$data->name}}</option>
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
                                            Add User
                                        </a>
                                <h5 class="mb-0">List Of Users</h5>
                           
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id="addaccinexp" class="table table-striped table-bordered second" style="width:100%">
                                    <thead>
                                                <tr>    
                                                    <th>Date created</th>
                                                    <th>Fullname</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <!-- <th>Action</th> -->
                                                </tr>
                                            </thead>
                                        <tbody>
                                        @if(!isset($get_all_users))
                                            <tr>
                                                <td> No Records </td>
                                            </tr>
                                            @else
                                          
                                                @foreach ($get_all_users  as $data)  
                                                <tr>
                                                    <td>{{\Carbon\Carbon::parse($data->created_at)->format('jS \o\f F, Y')}}</td>        
                                                    <td> {{$data->fullname}} </td>  
                                                    <td>{{$data->email}} </td> 
                                                    <td>{{$data->contact}} </td> 
                                                   
                                                </tr> 
                                                @endforeach   
                                                @endif    
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Date created</th>
                                                    <th>Fullname</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
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


 