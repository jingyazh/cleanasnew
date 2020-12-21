@inject('User', 'App\User')

@php
if (Auth::user()->roleno == $User::ROLE_MASTER){
   $title = "Master"; $backcolor = "#333333"; $navcolor="#333333 "; $forecolor="#bbb";
}else if (Auth::user()->roleno == $User::ROLE_SUPER){
  $title = "Super"; $backcolor = "#222d32"; $navcolor="#fff "; $forecolor="#fff";
}else{
  $title = "Regular"; $backcolor = "#222d32"; $navcolor="#3c8dbc "; $forecolor="#ddd";
}
@endphp
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content={{csrf_token()}}>

    <title>Clean As New®</title>
    <link rel="stylesheet" href="/css/app.css"></link>
    <link rel="stylesheet" href="/dist/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/dist/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- //... My style -->
    <link rel="stylesheet" href="/css/global.css">    
    {{-- <link rel="stylesheet" href="/css/summernote.css">     --}}
    {{-- <link rel="stylesheet" href="/css/summernote-bs4.css">     --}}
    <link rel="stylesheet" href="/css/summernote-lite.css">
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css"> 
    
    {{-- <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet"> --}}
    <!-- iCheck -->
    <link rel="stylesheet" href="/dist/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/dist/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/dist/plugins/datepicker/datepicker3.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/dist/plugins/datatables/dataTables.bootstrap4.css">        
    <!-- TreeTable -->
    <link rel="stylesheet" href="/dist/plugins/jquery/jquery.treetable.css">
    <link rel="stylesheet" href="/dist/plugins/jquery/jquery.treetable.theme.default.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/dist/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
       div.content-wrapper, .main-footer { background-color : {{ $forecolor }} !important }
    </style>
    
</head>

<body class="hold-transition sidebar-mini skin-blue" >
    {{-- skin-black-light, skin-blue --}}
    {{-- @guest @yield('content') @else --}}
    
    <div class="wrapper" id="app" >
        <!-- Header -->
    @include('layouts.header')
        <!-- Sidebar -->
    @include('layouts.sidebar') 
    
    @yield('content')
        <!-- Footer -->
    @include('layouts.footer')
    </div>
    <!-- ./wrapper -->
    {{-- @endguest  --}}

    <!-- jQuery -->
    <script src="/dist/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="/dist/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="/dist/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/dist/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="/dist/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="/dist/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- DataTables -->
    <script src="/dist/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/dist/plugins/datatables/dataTables.bootstrap4.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="/dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/dist/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.js"></script>
    <!-- My Custom JS -->
    <script src="/js/global.js"></script>  

    

    @yield('javascript')

    
    
</body>
</html>