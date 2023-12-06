<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Portal</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons') }}/icon 16x16.png">
    <!-- Favicon icon -->
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="{{ asset('admin') }}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('admin') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Daterange picker -->
    <link href="{{ asset('admin') }}/vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{ asset('admin') }}/vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{ asset('admin') }}/vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link
        href="{{ asset('admin') }}/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/vendor/pickadate/themes/default.date.css">
    <!-- Summernote -->
    <link href="{{ asset('admin') }}/vendor/summernote/summernote.css" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ url('/admin-portal') }}" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('icons') }}/icon 512x512.png" alt="">
                <span class="brand-title">&ensp;Newbies</span>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <div class="dropdown-menu p-0 m-0">
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <span class="dropdown-item2">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">{{ $username }}</span>
                                    </span>
                                    <a href="{{ url('/admin-portal/edit-profile') }}" class="dropdown-item">
                                        <i class="icon-info"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="{{ url('/admin-portal/logout') }}" class="dropdown-item">
                                        <i class="icon-logout"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="{{ url('/admin-portal') }}" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    <li><a href="{{ url('/admin-portal/account-management') }}" aria-expanded="false"><i
                                class="icon icon-users-mm"></i><span class="nav-text">Account</span></a>
                    </li>
                    <li><a href="{{ url('/admin-portal/bridges-list') }}" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">List</span></a>
                    </li>
                    <li><a href="{{ url('/admin-portal/add-news') }}" aria-expanded="false"><i
                                class="icon icon-window-add"></i><span class="nav-text">Add</span></a>
                    </li>
                    <li><a href="{{ url('/admin-portal/country') }}" aria-expanded="false"><i
                                class="icon icon-wallet-90"></i><span class="nav-text">Country</span></a>
                    </li>
                    <li><a href="{{ url('/admin-portal/category') }}" aria-expanded="false"><i
                                class="icon icon icon-menu-34"></i><span class="nav-text">Category</span></a>
                    </li>
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Designed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Developed by <a href="#" target="_blank">Thuan Nguyen (Newbies Team)</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('admin') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('admin') }}/js/quixnav-init.js"></script>
    <script src="{{ asset('admin') }}/js/custom.min.js"></script>
    <!-- Vectormap -->
    <script src="{{ asset('admin') }}/vendor/raphael/raphael.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/morris/morris.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/gaugeJS/dist/gauge.min.js"></script>
    <!--  flot-chart js -->
    <script src="{{ asset('admin') }}/vendor/flot/jquery.flot.js"></script>
    <script src="{{ asset('admin') }}/vendor/flot/jquery.flot.resize.js"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('admin') }}/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <!-- Counter Up -->
    <script src="{{ asset('admin') }}/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="{{ asset('admin') }}/vendor/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- Dashboard -->
    <script src="{{ asset('admin') }}/js/dashboard/dashboard-1.js"></script>
    <script src="./vendor/chartist/js/chartist.min.js"></script>
    <script src="./vendor/moment/moment.min.js"></script>
    <script src="./vendor/pg-calendar/js/pignose.calendar.min.js"></script>
    <script src="./js/dashboard/dashboard-2.js"></script>
    <!-- Datatable -->
    <script src="{{ asset('admin') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin') }}/js/plugins-init/datatables.init.js"></script>
    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="{{ asset('admin') }}/vendor/moment/moment.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="{{ asset('admin') }}/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="{{ asset('admin') }}/vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="{{ asset('admin') }}/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
    </script>
    <!-- pickdate -->
    <script src="{{ asset('admin') }}/vendor/pickadate/picker.js"></script>
    <script src="{{ asset('admin') }}/vendor/pickadate/picker.time.js"></script>
    <script src="{{ asset('admin') }}/vendor/pickadate/picker.date.js"></script>
    <!-- Daterangepicker -->
    <script src="{{ asset('admin') }}/js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="{{ asset('admin') }}/js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="{{ asset('admin') }}/js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="{{ asset('admin') }}/js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="{{ asset('admin') }}/js/plugins-init/pickadate-init.js"></script>
    <!-- Summernote -->
    <script src="{{ asset('admin') }}/vendor/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
    <script src="{{ asset('admin') }}/js/plugins-init/summernote-init.js"></script>

</body>

</html>
