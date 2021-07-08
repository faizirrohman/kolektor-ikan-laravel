<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
      <meta name="author" content="Creative Tim">
      <title>{{ $title ?? 'NO Title' }}</title>
      <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
      <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
      <link rel="icon" href="{{ asset('assets/img/Logo Ikan Cupang.jpg')}}" type="image/jpg">
</head>

<body class="bg-default">
      <!-- Navbar -->
      <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
            <div class="container">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                        <div class="navbar-collapse-header">
                              <div class="row">
                                    <div class="col-6 collapse-brand">
                                          <a href="dashboard.html">
                                                <img src="../assets/img/brand/blue.png">
                                          </a>
                                    </div>
                                    <div class="col-6 collapse-close">
                                          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                                <span></span>
                                                <span></span>
                                          </button>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </nav>
      <!-- Main content -->
      <div class="main-content">
            <!-- Header -->
            <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
                  <div class="separator separator-bottom separator-skew zindex-100">
                        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                              <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                        </svg>
                  </div>
            </div>
            @yield('content')
      </div>
      <!-- Argon Scripts -->
      <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
      <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
      <script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
      <script src="{{asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
      <script src="{{asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
      <script src="{{asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
      <script src="{{asset('assets/js/argon.js?v=1.2.0') }}"></script>
      <!-- JAVA SCRIPT ONLY -->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <!-- END JAVA SCRIPT -->
</body>
</html>