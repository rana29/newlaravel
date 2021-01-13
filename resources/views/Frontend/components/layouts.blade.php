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
  <script src="{{asset('/')}}Frontend/assets/vendor/jquery/jquery.min.js"></script>

</head>

<body>

   <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

  <!-- Navigation -->
 @include('Frontend.components.header')

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        @yield('content')

      </div>

      <!-- Sidebar Widgets Column -->
      @include('Frontend.components.sidebar')

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('Frontend.components.footer')
 

  <!-- Bootstrap core JavaScript -->
  
  <script src="{{asset('/')}}Frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
