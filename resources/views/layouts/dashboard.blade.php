<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Link Management</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="ahttps://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">

</head>

<body class="hold-transition sidebar-mini layout-fixed">

  {{--
    <div class="">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none ml-3 dropdown " aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle  me-2">
        <strong class="p-2">Fatma Jaber</strong>
      </a>
    </div>
 --}}

  <!-- Control Sidebar -->
  <aside class="main-sidebar  elevation-1">

    <div class="d-flex flex-column flex-shrink-0 p-3 border-end " style="width: 250px; ">
      <div class="">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{asset('./bitly-logo.png')}}" alt="" width="60" height="60" class="">
        </a>
      </div>

      <a class="text-decoration-none" href="{{route('dashboard.create')}}"> <button type="new" class="btn btn-primary m-3"><b>Create New </b></button></a>
      <div class="p-1" style="border-bottom: 1px solid gray;"></div>
      <ul class="nav nav-pills flex-column mb-auto">
        <li>
          <a href="#" class="nav-link link-dark ">
            <i class="fas fa-tachometer-alt p-2"></i>
            <h6 class="d-inline">Dashboard</h6>

          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark">
            <i class="fas fa-link p-2"></i>
            <h6 class="d-inline">Links</h6>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark">
            <i class="fas fa-qrcode p-2"></i>
            <h6 class="d-inline">QR Codes</h6>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark">
            <i class="fas fa-file-alt p-2"></i>
            <h6 class="d-inline">Link-in-bio</h6>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark">
            <i class="fas fa-folder p-2"></i>
            <h6 class="d-inline">Campaigns</h6>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark ">
            <i class="fas fa-paperclip p-2"></i>
            <h6 class="d-inline">Custom Link</h6>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark">
            <i class="fas fa-cog p-2"></i>
            <h6 class="d-inline">Setting</h6>
          </a>
        </li>
      </ul>

    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header bg-black">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col col-sm-6 d-flex justify-content-center mb-2 mt-2" style="margin-left: -10px;">
            <h1 class="m-0">@yield('title','Default Title')</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @section('breadcrumb')
              <li class="breadcrumb-item"><a href='##'>Home</a></li>
              @show
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    --}}
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('dist/js/demo.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
</body>

</html>