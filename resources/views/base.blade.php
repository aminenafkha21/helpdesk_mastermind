<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Helpdesk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('assets/css/welcome/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/welcome/animate.css')}}">
    


    <link rel="stylesheet" href="{{URL::asset('assets/css/welcome/ionicons.min.css')}}">	
    
    <link rel="stylesheet" href="{{URL::asset('assets/css/welcome/style.css')}}">
  </head>
  <body>

		
  <div class="main-section">

		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Helpdesk.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"> Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"> Services</a></li>
                    <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"> Contact</a></li>


	        </ul>
            @if (Route::has('login'))

	        <ul class="navbar-nav ml-auto">
               @auth



                        <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link icon d-flex align-items-center" data-toggle="dropdown">
                        @if(Auth::User()->user_type=='0')
                        My Account (Admin)
                        @elseif (Auth::User()->user_type=='1')
                        My Account (Service Provider)

                        @else
                        My Account (Customer)
                        @endif
                            <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left">
                            <a href="{{ url('/home') }}" class="dropdown-item"> Dashboard</a>
                            <a href="{{ route('logout') }}" class="dropdown-item"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                        @csrf
                                                                    </form>
                        </div>
                        </li>	    
                        
            @else    

                        <li class="nav-item"><a href="{{ url('login') }}" class="nav-link icon d-flex align-items-center"> Log in</a></li>

						<li class="nav-item"><a href="{{ route('register') }}" class="nav-link icon d-flex align-items-center"> Register</a></li>


            
	        </ul>
            @endauth
            @endif

	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

	@yield('content')




    <!-- - - - - -end- - - - -  -->
		

	  <footer class="ftco-section ftco-section-2">
	  	<div class="col-md-12 text-center">
          <p class="mb-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());

            </script> All rights reserved | This System is made with MasterMind Team</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
	  </footer>

  </div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
 
  <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/aos.js')}}"></script>
  <script src="{{URL::asset('assets/js/main.js')}}"></script>
    
  </body>
</html>