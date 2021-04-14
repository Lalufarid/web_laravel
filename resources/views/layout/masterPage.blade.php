<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
     <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" >
</head>
<body>
@include('layout.navigation')
    <div class="container py-4">
        @include('alert')
        @yield('content')
    </div>
<footer style="background-color: #124f99; height: 50px; font: size 12px; font-family: arkhip; color:aliceblue; bottom: 0; margin-top: 400px;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center mt-3">
         <h5>SMA NEGERI 2 PRAYA</h5>
      </div>
    </div>
  </div>
</footer>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>   
</body>
</html>