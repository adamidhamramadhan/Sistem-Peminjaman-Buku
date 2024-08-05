<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booklend | @yield('tittle')</title>
    @include('includes.dashboard.style')
</head>
<body class="d-flex flex-column min-vh-100">
  @include('includes.dashboard.header')

  @include('includes.dashboard.sidebar')

  @yield('content')
  
  @include('includes.dashboard.footer')
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('includes.dashboard.script')

</body>
</html>
