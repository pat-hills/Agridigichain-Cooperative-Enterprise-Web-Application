<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>AGRIdigichain | Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('users/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('users/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('users/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('users/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="shortcut icon" style="height: auto; width: 500px;"  rel="stylesheet" href="{{asset('black_logo.png')}}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background: url('fbsdigichain_back_1.jpg');
        background-size: cover;
    }
    </style>
</head>

<body style="background-image: url('{{ asset('fbsdigichain_back_1.jpg')}}');">
<form  class="splash-container" action="{{ route('admin.login.submit') }}" method="POST">
{{ csrf_field() }}
        <div style="border-radius:20px;" class="card">
            <div style="border-radius:20px;" class="card-header">
                <h3 class="mb-1" style="text-align:center"> Admin Login </h3>
                
                <img style="display: block; margin-left: auto; margin-right: auto; width: 100px; height: auto;" alt="AGRIdigichain" src="{{ url('trans_parent_logo.png') }}" />
              
                @if(count($errors) > 0)
                   @foreach ($errors->all() as $error)

                   <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                                                <strong>{{$error}}</strong>  
                                                <a  class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </a>
                                            </div>

                   
                    @endforeach
                    @endif
            </div>
            <div class="card-body">
                
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required placeholder="E-mail" autocomplete="off">
                </div>
                <!-- @if ($errors->has('email'))
      <span class="text-danger"><strong>{{ $errors->first('email') }}</strong></span>
      @endif -->
                <div class="form-group">
                    <input  class="form-control form-control-lg"  type="password" name="password" required placeholder="Password">
                </div>
               
                 
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-success" name="submit" type="submit">Login</button>
                </div>
               
                
            </div>
            <div style="text-align:center" class="card-footer bg-white">
                <p>Forgot Password? <a href="login" class="text-secondary">Reset Password</a></p>
            </div>

        <div style="border-radius:10px; text-align:center" class="card-footer bg-white">
                <p>Don't Have Account? <a style="displsy:block; margin-left:auto; margin-right:auto; color:green" href="{{ route('admin-signup') }}" class="text-secondary">Create Account</a></p>
            </div> 

        </div>
    </form>
</body>
 
</html>