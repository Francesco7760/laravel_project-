<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" media="screen,projection" type="text/css" href="{{ asset('css/reset.css') }}" />
  <link rel="stylesheet" media="screen,projection" type="text/css" href="{{ asset('css/main.css') }}" />
  <link rel="stylesheet" media="screen,projection" type="text/css" href="{{ asset('css/style.css') }}"/>
  @show
        @section('scripts')
  @show
  <title>titolo | @yield('title')</title>
</head>
<body>
<div id="main">
  <div id="header" class="box">
    <p id="logo"><a href="{{route('home')}}"><img src="{{ asset('design/logo.gif') }}" alt="" /></a></p>
    <hr class="noscreen" />
  @include('layouts/navbar')
  </div>

      @yield('content')
    
  <div id="footer" class="box">
    <p class="f-right"><a href="http://www.nuviotemplates.com/">Free web templates</a> by <a href="http://www.qartin.cz/">Qartin</a>, sponsored by: <a href="http://www.grily-krby.cz/">Grily</a></p>
    <p class="f-left">&copy;&nbsp;2009 <a href="#">Your Company Inc.</a></p>
  </div>
</div>
</body>
</html>
