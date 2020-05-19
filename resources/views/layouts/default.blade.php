<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title', 'SIA Sekolah')</title>

  @stack('before-style')
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/backend/adminlte30/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/assets/backend/adminlte30/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/backend/adminlte30/dist/css/adminlte.min.css">
  @stack('after-style')
  <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> 
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
      @include('includes.navbar')
  <!-- /.navbar -->
        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
      
        <!-- /.control-sidebar -->
      
        <!-- Main Footer -->
        <footer class="main-footer">
          <!-- To the right -->
          <div class="float-right d-none d-sm-inline">
           {{--  Developed by : <a href="zaelani.id">zaelani.id</a>  --}}
          </div>
          <!-- Default to the left -->
          Developed by : <a href="zaelani.id">zaelani.id</a> | <strong>Template by <a href="https://adminlte.io">AdminLTE.io</a>.</strong>  Copyright &copy; 2014-2020 All rights reserved.
        </footer>
      </div>
      <!-- ./wrapper -->
      
      <!-- REQUIRED SCRIPTS -->
      
      <!-- jQuery -->
      @stack('before-script')
      <script src="/assets/backend/adminlte30/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="/assets/backend/adminlte30/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- AdminLTE App -->
      <script src="/assets/backend/adminlte30/dist/js/adminlte.min.js"></script>
      <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
      @stack('after-script')
      </body>
      </html>
      