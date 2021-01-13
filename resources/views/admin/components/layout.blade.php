<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('/')}}Frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('/')}}Frontend/assets/css/blog-home.css" rel="stylesheet">

</head>

<body>
 <!--  for district select -->

 

  <!-- Navigation -->
 @include('admin.components.header')

  <!-- Page Content -->
  <div class="container">

    

      
        @yield('content')

     

   </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('admin.components.footer')
 

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('/')}}Frontend/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('/')}}Frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
