<!DOCTYPE html>
<html lang="en">

<head>
    <title>BRIDGES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('content') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('content') }}/css/animate.css">

    <link rel="stylesheet" href="{{ asset('content') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('content') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('content') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('content') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('content') }}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('content') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('content') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('content') }}/css/style.css">
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
                        <ul class="c">
                            <!-- đường dẫn trang -->
                            @foreach ($category as $item)
                                <li><a href="{{ url('/category/' . $item->name) }}">{{ $item->name }}</a></li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{ url('/destination/bridges') }}"
                            class="nav-link"><span>Bridges</span></a></li>
                    <li class="nav-item"><a href="{{ url('') }}#about-section" class="nav-link"><span>About
                                Us</span></a></li>
                    <li class="nav-item"><a href="{{ url('') }}#contact-section"
                            class="nav-link"><span>Contact</span></a></li>
                    <li class="nav-item"{{ $login_display }}><a href="{{ url('/user/login') }}"
                            class="nav-link"><span>Login</span></a></li>
                    <li class="nav-item" {{ $logout_display }}><a href="{{ url('/user/logout') }}"
                            class="nav-link"><span>Logout</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero-wrap" style="background-image: url('{{ asset('imageBridge/' . $background->name) }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start">
                <div class="col-md-9 ftco-animate pb-4">

                </div>
            </div>
        </div>
    </section>



    <br>
    </div>
    </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 tour-wrap mb-5">
                <div class="row">
                    <div class="col-md-6 d-flex ftco-animate">
                        <div class="img align-self-stretch" style="background-image: "><img
                                src="{{ asset('imageBridge/' . $imagecontent->name) }}" height="400" width="500">
                        </div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="text py-5">
                            {{-- @foreach ($bridges as $bridge) --}}
                            <p class="pos namedes">{{ $bridges->name }}</p>
                            {{-- @endforeach --}}
                            <p>Bridges around the world mean connecting any two points with a fixed distance between
                                them. Some bridges are also world famous for their design and engineering. Bridges may
                                be of different materials and may be of a different design. These bridges are
                                constructed to cross rivers, lakes, valleys, mountains, or any other natural feature.
                                Some common types of bridges include the suspension bridge, arch bridge, Beam Bridge,
                                cantilever bridge, Bascule Bridge and truss bridge. Most of these bridges are also
                                considered landmarks and engineering wonders of regions around the world. We have
                                brought to you the list of the most famous bridges in the world.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 tour-wrap">
                <div class="day-wrap">
                    <h3 class="pl-5">
                        <td>{{ $bridges->name }}
                    </h3>
                    <p>Tall: {{ $bridges->tall }} m</p>
                    <p>Long: {{ $bridges->long }} m</p>
                    <p>Opened (inaugurate): {{ $bridges->opened }}</p>
                    <p><?php echo $bridges['description']; ?></p>

                    <div>
                        <br>
                        <div>
                            <a href="{{ asset('historic/' . $bridges->file) }}"
                                style="background-color: color: rgb(25, 14, 14);">Download historic</a>
                        </div>
                    </div>

                </div>

            </div>
            <div>
                <iframe src="{{ $bridges->geolocation }}" width="1100" height="400" style="border:0;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="container mt-3">
                <h2>Airplane ticket</h2>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>From</th>
                            <th>To</th>
                            <th>Airline company</th>
                        </tr>
                    </thead>
                    <tbody>
                        <thead>
                            @foreach ($plane as $item)
                                <tr>
                                    <td>{{ $item->from }}</td>
                                    <td>{{ $item->to }}</td>
                                    <td>{{ $item->airline_company }}</td>
                                </tr>
                            @endforeach
                        </thead>
                    </tbody>
                </table>

                <div>

                    <body>

                        <div class="container mt-3">
                            <h2>Xe Bus</h2>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Bus code</th>
                                        <th>Carriage way</th>
                                        <th>Distance</th>
                                        <th>Openrating time</th>
                                        <th>Ride time</th>
                                        <th>Bus line frequency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <thead>
                                        @foreach ($bus as $item)
                                            <tr>
                                                <td>{{ $item->bus_code }}</td>
                                                <td>{{ $item->carriage_way }}</td>
                                                <td>{{ $item->distance }}</td>
                                                <td>{{ $item->operating_time }}</td>
                                                <td>{{ $item->ride_time }}</td>
                                                <td>{{ $item->bus_line_frequency }}</td>
                                            </tr>
                                        @endforeach
                                    </thead>
                                </tbody>

                        </div>

                    </body>
                    <div>
                        </tr><!-- END TR-->
                        </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 tour-wrap">
                        <div class="pt-5 mt-5">
                            <h3 class="mb-5">Reviews</h3>
                            <ul class="comment-list">
                                @foreach ($comment as $item)
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="{{ asset('content') }}/images/person_1.jpg"
                                                alt="Image placeholder">
                                        </div>

                                        <div class="comment-body">
                                            <h3>{{ $item->user_name }}</h3>
                                            <div class="meta">{{ $item->time }}</div>
                                            <p>
                                                <td>{{ $item->cmt }}</td>
                                            </p>
                                            <p><a href="#" class="">{{ $item->avatar }}</a></p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- END comment-list -->
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <h6><span {{ $login_display }}>Please login your account</span></h6>
                            <br {{ $login_display }}><br {{ $login_display }}>
                            <form method="post" action="{{ url('/content/information/save/' . $bridges->id) }}"
                                class="p-5 bg-light" {{ $logout_display }}>
                                @csrf
                                <label for="name">Name {{ $username_view }}</label>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </section> <!-- .section -->
        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none"
                    stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none"
                    stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
            </svg>
        </div>
        <div>
            <footer class="ftco-footer ftco-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2"> <span><a>Bridges</a></span></h2>
                                <p>A bridge is an architectural work connecting two or more points together, the main
                                    purpose is to serve road traffic, making the circulation of vehicles easy. Shows the
                                    continuous development of a country.</p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4 ml-md-4">
                                <h2 class="ftco-heading-2">Information</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span></span>Online Enquiry</a></li>
                                    <li><a href="#"><span></span>General Enquiry</a></li>
                                    <li><a href="#"><span></span>Booking</a></li>
                                    <li><a href="#"><span></span>Privacy</a></li>
                                    <li><a href="#"><span></span>Refund Policy</a></li>
                                    <li><a href="#"><span></span>Call Us</a></li>
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
                                        <li><a href="#"><span></span><span class="text">1800 1779</span></a>
                                        </li>
                                        <li><a href="#"><span></span><span
                                                    class="text">info@yoursite.com</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </footer>
        </div>


        <script src="{{ asset('content') }}/js/jquery.min.js"></script>
        <script src="{{ asset('content') }}/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="{{ asset('content') }}/js/popper.min.js"></script>
        <script src="{{ asset('content') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('content') }}/js/jquery.easing.1.3.js"></script>
        <script src="{{ asset('content') }}/js/jquery.waypoints.min.js"></script>
        <script src="{{ asset('content') }}/js/jquery.stellar.min.js"></script>
        <script src="{{ asset('content') }}/js/owl.carousel.min.js"></script>
        <script src="{{ asset('content') }}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('content') }}/js/aos.js"></script>
        <script src="{{ asset('content') }}/js/jquery.animateNumber.min.js"></script>
        <script src="{{ asset('content') }}/js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{ asset('content') }}/js/google-map.js"></script>

        <script src="{{ asset('content') }}/js/main.js"></script>
        {{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}
        {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}


</html>
