<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/linearicons/style.css')}}"> 
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{url('assets/css/main.css')}}">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="{{url('assets/css/main.css')}}">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
   <script src="https://kit.fontawesome.com/384828d22c.js" crossorigin="anonymous"></script>
  <!-- ICONS -->

 <!--  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/favicon.png')}}"> -->
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
 @include('layouts/navbar')
 
 @include('layouts/sidebar')
  
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

   @yield('content')

  </div>


</div>
<!-- ./wrapper -->
<div class="clearfix"></div>
    <footer>
      <div class="container-fluid">
      </div>
    </footer>
  </div>
  <!-- END WRAPPER -->
  <!-- Javascript -->
  <!-- <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script> -->
  <!-- <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script> -->
  <script src="{{asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('assets/scripts/klorofil-common.js')}}"></script>
</body>
</html>
