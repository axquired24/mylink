<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>@yield('title') - Admin {{ config('site.name') }}</title>

  {{--Favicon--}}
  <link rel="apple-touch-icon" sizes="180x180" href="{{ url('favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ url('favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ url('favicon//site.webmanifest') }}">
  <link rel="mask-icon" href="{{ url('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  {{--END Favicon--}}

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ url('lte/bootstrap/css/bootstrap.min.css') }}">
  {{-- Datatable --}}
  <link rel="stylesheet" href="{{ url('lte/plugins/datatables/dataTables.bootstrap.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('lte/plugins/font-awesome/font-awesome.css') }}">
  {{-- Datepicker --}}
  <link rel="stylesheet" href="{{ url('lte/plugins/datepicker/datepicker3.css') }}">
  <!-- Ionicons -->
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> --}}
<!-- jvectormap -->
  {{-- <link rel="stylesheet" href="{{ url('lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}"> --}}
<!-- Theme style -->
  <link rel="stylesheet" href="{{ url('lte/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('lte/dist/css/skins/_all-skins.min.css') }}">

  {{-- Additional Style --}}
  <link rel="stylesheet" href="{{ url('css/panel/stylish.css') }}">

  {{--toastr--}}
  <link rel="stylesheet" href="{{ url('lte/plugins/toastr/build/toastr.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  @stack('csscode')
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    {{-- FIXME notifikasi di bell ini belum --}}
    @include('layouts.admin.header')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    @include('layouts.admin.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{-- <small>Version 1</small> --}}
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if (count($errors) > 0)
          @foreach ($errors->all() as $error)
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-danger">
                  <span class="fa fa-info-circle"></span> {{ $error }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

              </div>
            </div>
          @endforeach
        @endif
      </div>

      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <a href="#">{{ config('site.name') }}</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

@stack('modalcode')

<!-- jQuery 2.2.3 -->
<script src="{{ url('lte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ url('lte/bootstrap/js/bootstrap.min.js') }}"></script>
{{-- Datatables --}}
<script src="{{ url('lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ url('lte/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
{{-- Datepicker --}}
<script src="{{ url('lte/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ url('lte/plugins/datepicker/locales/bootstrap-datepicker.id.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('lte/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('lte/dist/js/app.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('lte/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
{{-- <script src="{{ url('lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script> --}}
{{-- <script src="{{ url('lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script> --}}
<!-- SlimScroll 1.3.0 -->
<script src="{{ url('lte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>

<!-- ChartJS 1.0.1 -->
{{-- <script src="{{ url('lte/plugins/chartjs/chart.min.js') }}"></script> --}}
@include('layouts.inc.toastr_js')
@stack('jscode')
<script type="text/javascript">
    function refreshDataTable() {
        datatable.ajax.reload();
    }
</script>
</body>
</html>
