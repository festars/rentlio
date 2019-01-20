<!DOCTYPE html>
<html>

<head>
  @include('partials.dash._head')
</head>

<body class="g-sidenav-show g-sidenav-pinned">
  <!-- Sidenav -->
  @include('partials.dash._sidenav')
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    @include('partials.dash._navigation')
    <!-- Header -->

    @yield('content')
  </div>
 
  @include('partials.dash._scripts')
</body>

</html>