<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BHHH2 TRAIL RUN 2018</title>

    <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/css/uikit.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">        
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="shortcut icon" href="{{{ asset('img/bhhh2.png') }}}">
    @yield('styles')
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
    </script>
</head>
<body>
            @if (Auth::guard('web_seller')->guest())
             @else
            
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <h6 class=" card-body bg-gradient sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
              <span>Logout</span>
              <a class="d-flex align-items-center text-white" href="{{ url('/admin/seller_logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                <span data-feather="plus-circle"></span>
                <form id="logout-form" action="{{ url('/admin/seller_logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                </form>
              </a>
            </h6>
            <ul class="nav flex-column">
              
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                  <span data-feather="home"></span>
                  Dahsboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('request') }}">
                  <span data-feather="shopping-cart"></span>
                  Request Peserta
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.details') }}">
                  <span data-feather="users"></span>
                  Details Peserta
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.report') }}">
                  <span data-feather="bar-chart-2"></span>
                  Reports Peserta
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('tiket') }}">
                  <span data-feather="grid"></span>
                  Tiket Lomba
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('kategori') }}">
                  <span data-feather="layers"></span>
                  Kategori Lomba
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('laporan') }}">
                  <span data-feather="database"></span>
                  Laporan Pdf
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="mail"></span>
                  Mailing Event
                </a>
              </li>

            </ul>

            
          </div>
        </nav>
        @endif
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        @yield('content')
        </main>

    <!-- Scripts -->
    <!-- <script src="/js/app.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.39/js/uikit-icons.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
@include('sweetalert::alert')
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    @yield('scripts')
</body>
</html>
