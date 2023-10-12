<!DOCTYPE html >
<head>
<title>titolo | @yield('title')</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="{{ asset('css/reset.css') }}" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="{{ asset('css/main.css') }}"  />
<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="css/main-ie6.css" /><![endif]-->
<link rel="stylesheet" media="screen,projection" type="text/css" href="{{ asset('css/style.css') }}" />
      @show
        @section('scripts')
      @show
</head>
<body>
<div id="main">
  <!-- Header -->
  <div id="header" class="box">
    <p id="logo"><a href="{{route('home')}}"><img src="{{ asset('design/logo.gif') }}" alt="" /></a></p>
    <hr class="noscreen" />
    <!-- Navigation -->

@include('layouts/navbar')

  </div>
  <!-- /header -->
  <hr class="noscreen" />
  <!-- Three columns -->
  <div class="content box">
    <div class="content-in box">

      @yield('content')

      <div class="fix"></div>
    </div>
    <!-- /content-in -->
    <div class="content-bottom"></div>
  </div>
  <!-- /content -->
  <!-- Footer -->
  <div id="footer" class="box">
    <!-- DON´T REMOVE THIS LINE -->
    <p class="f-right"><a href="http://www.nuviotemplates.com/">Free web templates</a> by <a href="http://www.qartin.cz/">Qartin</a>, sponsored by: <a href="http://www.grily-krby.cz/">Grily</a></p>
    <p class="f-left">&copy;&nbsp;2009 <a href="#">Your Company Inc.</a></p>
  </div>
  <!-- /footer -->
</div>
<!-- /main -->
</body>
</html>
