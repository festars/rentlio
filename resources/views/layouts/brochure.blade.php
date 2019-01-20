<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials.brochure._head')
</head>

<body>

  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar mt-4">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong>{{ config('app.name') }}<span class="text-danger">.</span></strong></a></h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            {{-- navigation --}}
            @include('partials.brochure._navigation')
          </div>


        </div>
      </div>
    </div>
  </div>

  @yield('content')


  {{-- footer --}}
  @include('partials.brochure._footer')

  </div>

  @include('partials.brochure._scripts')

</body>

</html>