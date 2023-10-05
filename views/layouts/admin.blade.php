<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('template_admin') }}/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('template_admin') }}/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="shortcut icon" href="{{ asset('img') }}/logo_engil.png">
  <link rel="stylesheet" href="{{ asset('template_admin') }}/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="{{ asset('template_admin') }}/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('template_admin') }}/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
  <!-- TOASTER -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('template_admin') }}/css/style.css">
  <link rel="stylesheet" href="{{ asset('template_admin') }}/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      @include('layouts.sisipan-admin.navbar')

      <div class="main-sidebar sidebar-style-2">
        @include('layouts.sisipan-admin.sidebar')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      <footer class="main-footer">
        @include('layouts.sisipan-admin.footer')
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('template_admin') }}/modules/jquery.min.js"></script>
  <script src="{{ asset('template_admin') }}/modules/popper.js"></script>
  <script src="{{ asset('template_admin') }}/modules/tooltip.js"></script>
  <script src="{{ asset('template_admin') }}/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{ asset('template_admin') }}/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="{{ asset('template_admin') }}/modules/moment.min.js"></script>
  <script src="{{ asset('template_admin') }}/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="{{ asset('template_admin') }}/modules/datatables/datatables.min.js"></script>
  <script src="{{ asset('template_admin') }}/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('template_admin') }}/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="{{ asset('template_admin') }}/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('template_admin') }}/js/page/modules-datatables.js"></script>
  
  <!-- Template JS File -->
  <script src="{{ asset('template_admin') }}/js/scripts.js"></script>
  <script src="{{ asset('template_admin') }}/js/custom.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  @yield('sweetAlert')
</body>
</html>