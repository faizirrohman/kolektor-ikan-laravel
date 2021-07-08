<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>{{ $title ?? 'NO Title' }}</title>
  <link rel="icon" href="{{ asset('assets/img/Logo Ikan Cupang.jpg') }}" type="image/jpg">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
  <!-- CSS ONLY -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">   
  <!-- END CSS -->
</head>

<body>
      <!-- Sidenav -->
      <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
            <div class="scrollbar-inner">
                  <!-- Brand -->
                  <div class="sidenav-header  align-items-center">
                        <a class="navbar-brand" href="javascript:void(0)">
                              <img src="{{ asset('assets/img/kolektor ikan.png') }}" class="navbar-brand-img" alt="...">
                        </a>
                  </div>
                  <div class="navbar-inner">
                        <!-- Collapse -->
                        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                              <!-- Nav items -->
                              <ul class="navbar-nav">
                                    <li class="nav-item">
                                          <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                                                <i class="ni ni-tv-2 text-primary"></i>
                                                <span class="nav-link-text">Dashboard</span>
                                          </a>
                                    </li>
                              </ul>
                              <hr class="my-3">
                              <h6 class="navbar-heading p-0 text-muted">
                                    <span class="docs-normal">Kategori</span>
                              </h6>
                              <ul class="navbar-nav">
                                    <li class="nav-item">
                                          <a class="nav-link" href="{{ route('admin.jenis-ikan.index') }}">
                                                <i class="ni ni-bullet-list-67"></i>
                                                <span class="nav-link-text">Jenis Ikan</span>
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="{{ route('admin.data-penjual.index') }}">
                                                <i class="ni ni-single-02 text-yellow"></i>
                                                <span class="nav-link-text">Data Penjual</span>
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="{{ route('admin.data-pembelian.index') }}">
                                                <i class="ni ni-cart text-orange"></i>
                                                <span class="nav-link-text">Data Pembelian</span>
                                          </a>
                                    </li>
                              </ul>
                        </div>
                  </div>
            </div>
      </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('assets/img/user.png') }}">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="{{ route('admin.profile.index') }}" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My Profile</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('signout') }}" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

  </div>
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>\
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
  <!-- JAVA SCRIPT ONLY -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <!-- END JAVA SCRIPT -->

  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>

</body>
</html>
