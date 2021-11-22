@extends('base')


@section('content')


<section class="hero-wrap js-fullheight img" style="  background-image: url('{{asset('assets/images/bg_3.jpg')}}'); ">
  		<div class="overlay"></div>
  		<div class="container">
  			<div class="row description js-fullheight align-items-center justify-content-center">
  				<div class="col-md-8 text-center">
  					<div class="text">
  						<h1>Helpdesk System.</h1>
  						<h4 class="mb-5">Ticketing System</h4>
  						<p><a href="#" class="btn btn-primary px-4 py-3"><i class="ion-ios-cloud-download mr-2"></i>Log in</a></p>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>




	  <section class="ftco-section" id="notifications">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="heading-section mb-4">Notifications</h2>
						<div class="alert alert-info">
			        <div class="container">
			        	<div class="d-flex">
				          <div class="alert-icon">
				            <i class="ion-ios-information-circle-outline"></i>
				          </div>
				          <p class="mb-0 ml-2"><b>Info alert:</b> You&apos;ve got some friends nearby, stop looking at your phone and find them...</p>
				        </div>
			          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			            <span aria-hidden="true"><i class="ion-ios-close"></i></span>
			          </button>
			        </div>
			      </div>
			      <div class="alert alert-success">
			        <div class="container">
			        	<div class="d-flex">
				          <div class="alert-icon">
				            <i class="ion-ios-checkmark-circle"></i>
				          </div>
				          <p class="mb-0 ml-2"><b>Success Alert:</b> Yuhuuu! You&apos;ve got your $11.99 album from The Weeknd</p>
				        </div>
			          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			            <span aria-hidden="true"><i class="ion-ios-close"></i></span>
			          </button>
			        </div>
			      </div>
			      <div class="alert alert-warning">
			        <div class="container">
								<div class="d-flex">
				          <div class="alert-icon">
				            <i class="ion-ios-warning"></i>
				          </div>
				          <p class="mb-0 ml-2"><b>Warning Alert:</b> Hey, it looks like you still have the &quot;copyright &#xA9; 2015&quot; in your footer. Please update it!</p>
				        </div>
			          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			            <span aria-hidden="true"><i class="ion-ios-close"></i></span>
			          </button>
			        </div>
			      </div>
			      <div class="alert alert-danger">
			        <div class="container">
			        	<div class="d-flex">
				          <div class="alert-icon">
				            <i class="ion-ios-information-circle-outline"></i>
				          </div>
				          <p class="mb-0 ml-2"><b>Error Alert:</b> Damn man! You screwed up the server this time. You should find a good excuse for your Boss...</p>
			          </div>
			          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			            <span aria-hidden="true"><i class="ion-ios-close"></i></span>
			          </button>
			        </div>
			      </div>
					</div>
				</div>
			</div>
	  </section>
	  <!-- - - - - -end- - - - -  -->


	  <section class="ftco-section" id="images">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="heading-section mb-4">TEAM</h2>
						<div class="row">
							<div class="col-md-3 text-center">
								<h2 class="heading-section mb-4">
									<small>Rounded Image</small>
								</h2>
								<img src="images/avatar.jpg" alt="Round Image" class="rounded img-fluid image">
							</div>
							<div class="col-md-3 text-center">
								<h2 class="heading-section mb-4">
									<small>Circle Image</small>
								</h2>
								<img src="images/avatar.jpg" alt="Circle Image" class="rounded-circle img-fluid image">
							</div>
							<div class="col-md-3 text-center">
								<h2 class="heading-section mb-4">
									<small>Rounded Raised</small>
								</h2>
								<img src="images/avatar.jpg" alt="Thumbnail Image" class="img-raised rounded img-fluid image">
							</div>

							<div class="col-md-3 text-center">
								<h2 class="heading-section mb-4">
									<small>Circle Raised</small>
								</h2>
								<img src="images/avatar.jpg" alt="Thumbnail Image" class="img-raised rounded-circle thumbnail img-fluid image">
							</div>
						</div>
					</div>
				</div>
			</div>
	  </section>
	  <!-- - - - - -end- - - - -  -->


@endsection
