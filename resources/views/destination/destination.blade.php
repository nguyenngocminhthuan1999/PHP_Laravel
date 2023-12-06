
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BRIDGES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('home') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/css/animate.css">
    
    <link rel="stylesheet" href="{{ asset('home') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('home') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('home') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('home') }}/css/ionicons.min.css">
    
    <link rel="stylesheet" href="{{ asset('home') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('home') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('home') }}/css/style.css">
	{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{url('')}}">BRIDGES</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
<!-- THANH MENU -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="{{url('')}}" class="nav-link"><span>Home</span></a></li>
			  <li class="nav-item"><a href="#" class="nav-link"><span>Category</span></a>
				<ul class="c">
					<!-- đường dẫn trang -->
				@foreach ($category as $item)
				<li><a href="{{url('/category/'.$item->name )}}"" >{{ $item->name }}</a></li>
				@endforeach
				
				</ul>
			</li>
			  <li class="nav-item"><a href="{{ url('/destination/bridges')}}" class="nav-link"><span>Bridges</span></a></li>
	          <li class="nav-item"><a href="{{url('',)}}#about-section"  class="nav-link"><span>About Us</span></a></li>
	          <li class="nav-item"><a href="{{url('',)}}#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

	  <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">BRIGES</span>
            <h2 class="mb-4">Best Place to Travel</h2>
          {{-- </div>            <p>Far away, rivers and ships</p> --}}
        </div>
    		<div class="row">
				@foreach ($bridges as $item)
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
							
    						<div class="vr"><span>{{ $item->country }} </span></div>							
		    				<a  href="{{ url('/content/information/' . $item->id )}}" ><img src="{{asset('imageBridge/' . $item->image  )}}" width="400" height="350" >					
							</a>
	    				</div>
	    				<div class="text">
	    					<h3><a href="{{ url('/content/information')}}"> {{ $item->name  }}, {{ $item->country }}</a></h3>
	    				</div>   					
	    				
    				</div>
    			</div>
				@endforeach
    		</div> 
    	</div>
    </section>
	{{-- <section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Home</h5>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Category</h5>
					<ul class="list-unstyled quick-links">
						@foreach($category as $item)
						<li><a href="{{url('/category/'.$item->name )}}"><i class="fa fa-angle-double-right"></i>{{ $item->name }}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Abouts</h5>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Contact</h5>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Bridges</h5>
				</div>

			</div>
	</section> --}}

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"> <span><a>Bridges</a></span></h2>
              <p>A bridge is an architectural work connecting two or more points together, the main purpose is to serve road traffic, making the circulation of vehicles easy. Shows the continuous development of a country.</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span ></span>Online Enquiry</a></li>
                <li><a href="#"><span ></span>General Enquiry</a></li>
                <li><a href="#"><span ></span>Booking</a></li>
                <li><a href="#"><span ></span>Privacy</a></li>
                <li><a href="#"><span ></span>Refund Policy</a></li>
                <li><a href="#"><span ></span>Call Us</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span ></span><span class="text">35/6 đường D5, P.25, Q. Bình Thạnh</span></li>
	                <li><a href="#"><span ></span><span class="text">1800 1779</span></a></li>
	                <li><a href="#"><span ></span><span class="text">info@yoursite.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
       
      </div>
    </footer> 



	{{-- js --}}
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


	<script src="{{ asset('home') }}/js/jquery.min.js"></script>
	<script src="{{ asset('home') }}/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="{{ asset('home') }}/js/popper.min.js"></script>
	<script src="{{ asset('home') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('home') }}/js/jquery.easing.1.3.js"></script>
	<script src="{{ asset('home') }}/js/jquery.waypoints.min.js"></script>
	<script src="{{ asset('home') }}/js/jquery.stellar.min.js"></script>
	<script src="{{ asset('home') }}/js/owl.carousel.min.js"></script>
	<script src="{{ asset('home') }}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('home') }}/js/aos.js"></script>
	<script src="{{ asset('home') }}/js/jquery.animateNumber.min.js"></script>
	<script src="{{ asset('home') }}/js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="{{ asset('home') }}/js/google-map.js"></script>
	
	<script src="{{ asset('home') }}/js/main.js"></script>
	<!-- copy qua -->
	{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}
	{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
	  
	</body>
  </html>
