<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admins/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('admins/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admins/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admins/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
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
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">

            <div class="card-header text-center">
            <!-- <a href="../index.html">
            <img class="logo-img" src="../assets/images/logo.png" alt="logo">
            </a> -->
            <span class="splash-description">
            Admin Login
            </span>
            
            </div>
           
            <div class="card-body">
                <form action="{{ route('admin.login.submit') }}" method="POST">
                {{ csrf_field() }}
                <!-- @csrf -->
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Email" name="email" autocomplete="off">
                    </div>
                    @if ($errors->has('email'))
      <span class="text-danger"><strong>{{ $errors->first('email') }}</strong></span>
      @endif
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" name="password" placeholder="Password">
                    </div>

                    <div class="">
         <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="rememberme" class="filled-in chk-col-pink">
         <label for="rememberme">Remember Me</label>
      </div>  

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>

            <!-- <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div> -->

        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script> -->
</body>
 
</html>