<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  @yield('title')
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('/admin/css/plugins/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/admin/css/plugins/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('/admin/css/plugins/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/admin/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('/admin/css/_all-skins.min.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ url('/admin/css/plugins/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ url('/admin/css/plugins/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ url('/admin/css/plugins/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('/admin/css/plugins/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ url('/admin/css/plugins/bootstrap3-wysihtml5.min.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('/admin/css/plugins/summernote.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('adminLayouts.header')
  @include('adminLayouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  @include('adminLayouts.footer')


<!-- jQuery 3 -->
<script src="{{ url('admin/js/plugins/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('admin/js/plugins/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('/admin/js/plugins/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ url('/admin/js/plugins/raphael.min.js') }}"></script>
<script src="{{ url('/admin/js/plugins/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('/admin/js/plugins/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ url('/admin/js/plugins/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ url('/admin/js/plugins/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('/admin/js/plugins/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('/admin/js/plugins/moment.min.js') }}"></script>
<script src="{{ url('/admin/js/plugins/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ url('/admin/js/plugins/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ url('/admin/js/plugins/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ url('/admin/js/plugins/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('/admin/js/plugins/fastclick.js') }}"></script>
<!-- summernote js -->
<script src="{{ url('/admin/js/plugins/summernote.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/admin/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/admin/js/demo.js') }}"></script>
<!-- Application js -->
<script src="{{ url('/admin/js/application.js') }}"></script>
</body>
</html>
