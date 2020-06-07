<!DOCTYPE html>
{{--

Inorder for this Admin-LTE 3 works, please follow the steps below:

  > add below line of code to "resource/js/bootstrap.js"
      require('admin-lte');
  > import below path to "resource/sass/app.scss"
      '~admin-lte/dist/css/adminlte.css'
      '~admin-lte/plugins/fontawesome-free/css/all.min.css'
--}}

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VTS') }}</title>

    <link rel="icon" href="{{ URL::asset('/images/icons/vts-logo.png') }}" type="image/x-icon"/>
    
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
    
    @include('layouts.components.navbar')

    @include('layouts.components.main-sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <router-view></router-view>
    </div>
    <!-- /.content-wrapper -->
    
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
