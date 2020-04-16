@extends('layouts.admin')

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
                        <div class="page-header">
                            <h2 class="pageheader-title">Accounts</h2>
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                                <h5 class="card-header">Accounts Form</h5>
                                                                <div class="card-body">
                                                                    <form action="pages/add_acc_inexp_action" method="POST">

                                                                  

                                                                    <div class="form-group row">
                                                                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Name</label>
                                                                            <div class="col-9 col-lg-10">
                                                                                <input  type="text" required name="nameofaccount" placeholder="Enter Name Of Account" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                                <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Category</label>
                                                                                <div class="col-9 col-lg-10">

                                                                                    <select required class="form-control" name="categoryacc">
                                                                                     <option></option>
                                                                                     <option>Income</option>
                                                                                     <option>Expense</option>

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
                                            Add Account
                                        </a>
                                <h5 class="mb-0">List Of Account Items</h5>
                           
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="addaccinexp" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Type</th>
                                              
                                                
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Name</th>
                                                <th>Type</th>
                                          
                                                
                                                <th>Action</th>
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
