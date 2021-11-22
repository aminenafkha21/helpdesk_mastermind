<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/base/vendor.bundle.base.css')}}">

        <!-- inject:css -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.png')}}" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
              
            
        

        <main class="py-4">
        <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="{{URL::asset('assets/images/logo-dark.svg')}}" alt="logo">
              </div>
              <h4>Register</h4>
              <a class="font-weight-light" href="{{ route('login') }}">Or already have an account?</a>
              
              <form class="pt-3" method="POST" action="{{ route('register') }}">
              @csrf

         

                <div class="form-group">
                  <label for="exampleInputEmail">Name*</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0  @error('name') is-invalid @enderror" id="name"  placeholder="Name"   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail">Email*</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control form-control-lg border-left-0  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email"     value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                </div>



                <div class="form-group">
                  <label for="exampleInputPassword">Password*</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password"name="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror" id="password" placeholder="Password" 
                     required autocomplete="current-password"> 
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                       
                  </div>
                </div>


                <div class="form-group">
                  <label for="exampleInputPassword">Confirm Password*</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password"name="password_confirmation" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror" id="password-confirm" placeholder="Password" 
                    required autocomplete="new-password"> 
                     
                  </div>
                </div>


                <div class="form-group">
                  <label for="InputUsertype">Registr as*</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-multiple-plus text-primary"></i>
                      </span>
                    </div>
                   
                    <select name="registeras" class="form-control form-control-lg border-left-0 @error('registeras') is-invalid @enderror" id="registeras"  required autocomplete="registeras" > 
                        <option  value="2" >Customer </option>
                        <option  value="1" >Service Provider </option>

                            </select> 
                     
                  </div>
                </div>



                  
                <div class="my-3">
               <button class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn"  type="submit"> Register</button> 
                </div>
         
              
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
        </main>


     <!-- base:js -->
  <script src="{{URL::asset('assets/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{URL::asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{URL::asset('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{URL::asset('assets/js/template.js')}}"></script>
  <!-- endinject -->

  <!-- inject:css -->
  <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.png')}}" />
</body>
</html>


