<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pages / Register - AMB Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('user') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('user') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('user') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('user') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('user') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('user') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('user') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('user') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Change Your Password</h5>
                                    </div>
                                    <form class="form-horizontal" method="POST"
                                        action="{{ route('user.changepassword.submit') }}">
                                        {{ csrf_field() }}

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Your Email</label>
                                            <input type="email" name="email" class="form-control" id="yourEmail"
                                                required>
                                        </div>

                                        <div
                                            class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                                            <label for="current_password" class="form-label">Your Password</label>

                                            <div class="input-group has-validation">
                                                <input id="current_password" type="password" class="form-control"
                                                    name="current_password" required>

                                                @if ($errors->has('current_password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('current_password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                                            <label for="new_password" class="form-label">New Password</label>

                                            <div class="col-12">
                                                <input id="new_password" type="password" class="form-control"
                                                    name="new_password" required>

                                                @if ($errors->has('new_password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('new_password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div
                                            class="form-group{{ $errors->has('new_password_confirmation') ? ' has-error' : '' }}">
                                            <label for="new_password_confirmation" class="form-label">Confirm new
                                                password</label>

                                            <div class="col-12">
                                                <input id="new_password_confirmation" type="password"
                                                    class="form-control" name="new_password_confirmation" required>

                                                @if ($errors->has('new_password_confirmation'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('new_password_confirmation') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary w-100">
                                                    Change Password
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Designed by <a href="https://bootstrapmade.com/">AmazingBridges Made</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('user') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('user') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user') }}/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ asset('user') }}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('user') }}/assets/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('user') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('user') }}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('user') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('user') }}/assets/js/main.js"></script>

</body>

</html>
