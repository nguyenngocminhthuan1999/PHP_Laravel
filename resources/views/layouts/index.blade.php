<!DOCTYPE html>
<html lang="en">

<head>
    <title>BRIDGES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target"
        id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('') }}">BRIDGES</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <!-- THANH MENU -->
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="{{ url('') }}" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><span>Category</span></a>
                        <ul class="c nav-item">
                            <!-- đường dẫn trang -->
                            @foreach ($category as $item)
                                <li><a href="{{ url('category/' . $item->name) }}">{{ $item->name }}</a></li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{ url('/destination/bridges') }}"
                            class="nav-link"><span>Bridges</span></a></li>
                    <li class="nav-item"><a href="#about-section" class="nav-link"><span>About Us</span></a></li>
                    <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- HOME -->

    <section id="home-section" class="hero">
        <img src="{{ asset('home') }}/images/blob-shape-3.svg" class="svg-blob" alt="Colorlib Free Template">
        <div class="home-slider owl-carousel">

            @foreach ($bridges as $item)
                <div class="slider-item">
                    <div class="overlay"></div>
                    <div class="container-fluid p-0">
                        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"
                            data-scrollax-parent="true">
                            <div class="one-third order-md-last">
                                <div class="img"
                                    style="background-image:url({{ asset('home') }}/'imageBridge/'.{{ $item->image }});">
                                    <img src="{{ asset('imageBridge/' . $item->image) }}">
                                    <div class="overlay"></div>
                                </div>
                                <div class="bg-primary">
                                    <div class="vr"><span class="pl-3 py-4"
                                            style="background-image: url({{ asset('home') }}/images/bg_1-1.jpg);">{{ $item->country }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="one-forth d-flex align-items-center ftco-animate"
                                data-scrollax=" properties: { translateY: '70%' }">
                                <div class="text">
                                    <span class="subheading pl-5">{{ $item->name }}</span>
                                    <h1 class="mb-4 mt-3"> Bridges have long been a symbol of civilization</h1>
                                    <p>A bridge is an architectural work connecting two or more points together, the
                                        main purpose is to serve road traffic, making the circulation of vehicles easy.
                                        Shows the continuous development of a country.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

    </section>


    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row no-gutters d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img d-flex align-self-stretch align-items-center"
                        style="background-image:url({{ asset('home') }}/images/about1.jpg);">
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 px-lg-5 py-md-5 bg-darken">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate p-5 p-lg-0">
                                <span class="subheading">Do you want to know more about bridges?</span>
                                <h2 class="mb-4">We will help you visit the bridge</h2>
                                <p class="p">A bridge (also known as a bridge) is an engineering structure used to
                                    cross rivers, hills, canals or other terrain. It is built by placing sturdy posts,
                                    posts or braces on land or water, and then building paths for vehicles, pedestrians
                                    or ships to pass.</p>
                                <p class="p">The bridge is built with a variety of materials, including wood,
                                    stone, concrete, steel, and combinations of different materials. Common types of
                                    bridges include bamboo bridges, stone bridges, reinforced concrete bridges,
                                    cable-stayed bridges, and flyovers.</p>
                                <p class="p">Bridges are of great importance in economic development and
                                    transportation, allowing people and goods to move more easily. In addition, the
                                    bridges also bring cultural and aesthetic value to a land, with many famous bridge
                                    architectures in the world such as Hanoi Dragon Bridge, Golden Gate Bridge in San
                                    Francisco, USA, or Sydney Harbor Bridge. in Sydney, Australia.</p>
                                <p class="p">However, the construction and maintenance of the bridge also requires
                                    high expertise and techniques, especially to ensure the safety of pedestrians. A
                                    lack of attention to these factors can have disastrous consequences, like the
                                    collapse of the Morandi Bridge in Italy in 2018.</p>
                                <p class="p">In short, the bridge is an important engineering work with great
                                    influence on the economic development and traffic of an area. However, building and
                                    maintaining them also requires high attention and engineering to ensure safety and
                                    efficiency.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">BRIGES</span>
                    <h2 class="mb-4">Best Place to Travel</h2>
                </div>
                <p>Far away, rivers and ships</p>

            </div>
            <div class="row">
                @foreach ($bridges as $item)
                    <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="project">
                            <div class="img">

                                <div class="vr"><span>{{ $item->country }} </span></div>
                                <a href="{{ url('destination/bridges/') }}"><img
                                        src="{{ asset('imageBridge/' . $item->image) }}" width="419.98"
                                        height="419.98">
                                </a>
                            </div>
                            <div class="text">
                                <h3><a href="{{ url('destination/bridges/') }}"> {{ $item->name }},
                                        {{ $item->country }}</a></h3>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Contact</span>
                    <h2 class="mb-4">Contact Me</h2>
                    <p>What do you think about bridges?</p>
                </div>
            </div>

            <div class="row block-9">
                <div class="col-md-7 order-md-last d-flex">
                    <form method="post" action="{{ url('/contact') }}" class="bg-light p-4 p-md-5 contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" name="subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-5 d-flex">
                    <div class="row d-flex contact-info mb-5">
                        <div class="col-md-12 ftco-animate">
                            <div class="box p-2 px-3 bg-light d-flex">

                                <div>
                                    <h3>Address</h3>
                                    <p>35/6 đường D5, P.25, Q. Bình Thạnh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="box p-2 px-3 bg-light d-flex">

                                <div>
                                    <h3 class="mb-3">Contact Number</h3>
                                    <p><a> 1800 1779 </a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="box p-2 px-3 bg-light d-flex">

                                <div>
                                    <h3>Email Address</h3>
                                    <p><a>info@yoursite.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="box p-2 px-3 bg-light d-flex">
                                <div class="icon mr-3">
                                    <span></span>
                                </div>
                                <div>
                                    <h3>Website</h3>
                                    <p><a>yoursite.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bản đò và hình ảnh -->
        --
    </section>

    <!-- <section class="ftco-section ftco-no-pt ftco-no-pb">
   <div id="map" class="bg-white"></div>
  </section> -->

    <section class="ftco-gallery">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                {{-- @foreach ($bridges as $item)
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="{{ asset('home') }}/'imageBridge/'.{{ $item->image }}"  style="background-image: url({{ asset('home') }}/'imageBridge/'.{{ $item->image }}"><img src="{{asset('imageBridge/' . $item->image  )}}" class="gallery image-popup img d-flex align-items-center">
						<div class=" d-flex align-items-center justify-content-center">
						
					</div>
					</a>
				</div> --}}
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="{{ asset('home') }}/images/Akashi_Kaikyo_Bridge.jpg"
                        class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url({{ asset('home') }}/images/Akashi_Kaikyo_Bridge.jpg);">
                        <div class=" d-flex align-items-center justify-content-center">

                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="{{ asset('home') }}/images/Brooklyn_Bridge.jpg"
                        class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url({{ asset('home') }}/images/Brooklyn_Bridge.jpg);">
                        <div class=" d-flex align-items-center justify-content-center">

                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="{{ asset('home') }}/images/Golden_Gate_Bridge.jpg"
                        class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url({{ asset('home') }}/images/Golden_Gate_Bridge.jpg);">
                        <div class=" d-flex align-items-center justify-content-center">

                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="{{ asset('home') }}/images/Hangzhou_Bay_Bridge.jpg"
                        class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url({{ asset('home') }}/images/Hangzhou_Bay_Bridge.jpg);">
                        <div class=" d-flex align-items-center justify-content-center">

                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="{{ asset('home') }}/images/Sydney_Harbour_Bridge.jpg"
                        class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url({{ asset('home') }}/images/Sydney_Harbour_Bridge.jpg);">
                        <div class=" d-flex align-items-center justify-content-center">

                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-2 ftco-animate">
                    <a href="{{ asset('home') }}/images/Rialto_Bridge.jpg"
                        class="gallery image-popup img d-flex align-items-center"
                        style="background-image: url({{ asset('home') }}/images/Rialto_Bridge.jpg);">
                        <div class=" d-flex align-items-center justify-content-center">

                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Home</h5>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Category</h5>
                    <ul class="list-unstyled quick-links">
                        @foreach ($category as $item)
                            <li><a href="{{ url('category/' . $item->name) }}"><i
                                        class="fa fa-angle-double-right"></i>{{ $item->name }}</a></li>
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
    </section>

    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"> <span><a>Bridges</a></span></h2>
                        <p>A bridge is an architectural work connecting two or more points together, the main purpose is
                            to serve road traffic, making the circulation of vehicles easy. Shows the continuous
                            development of a country.</p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            {{-- <li><a href="#"><span ></span>Online Enquiry</a></li> --}}
                            <li><a href="#"><span></span>Location</a></li>
                            {{-- <li><a href="#"><span ></span>Booking</a></li>
                <li><a href="#"><span ></span>Privacy</a></li>
                <li><a href="#"><span ></span>Refund Policy</a></li> --}}
                            <li><a href="#"><span></span>Call Us</a></li>
                            <li><a href="#"><span></span>Map</a></li>
                            <li><a href="#contact-section"><span></span>Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span></span><span class="text">35/6 đường D5, P.25, Q. Bình Thạnh</span>
                                </li>
                                <li><span></span><span class="text">1800 1779</span></li>
                                <li><span></span><span class="text">info@yoursite.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>




    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


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
