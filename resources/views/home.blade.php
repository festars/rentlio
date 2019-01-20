<!DOCTYPE html>
<html>

<head>
    @include('partials.dash._head')

</head>

<body>
  <!-- Sidenav -->
  @include('partials.dash._sidenav')

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('partials.dash._navigation')

    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(/dash//img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h1 class="display-2 text-white">Hello {{ trim(auth()->user()->name) }}</h1>
            <p class="text-white mt-0 mb-5">This is your landing page! We are so happy to have you as a {{ $type }} on our platform.</p>
            <a href="{{ route('listings.create') }}" class="btn btn-neutral">Create a New Property</a>

            @if(!auth()->user()->stripe_id)
            <a 
            class="btn btn-neutral"
                href="https://connect.stripe.com/oauth/authorize?response_type=code&state={{ session('stripe_token') }}&scope=read_write&client_id={{ config('services.stripe_connect.key' )}}"
                >
                Connect Your Stripe Account
                </a>
            @endif
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-8 order-xl-1">
          <div class="row">
            <div class="col-lg-6">
              <div class="card bg-gradient-info border-0">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0 text-white">My Properties</h5>
                      <span class="h2 font-weight-bold mb-0 text-white">{{ auth()->user()->listings()->get() ? auth()->user()->listings()->count() : 0  }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap text-light">Total Property Count</span>
                  </p>
                </div>
              </div>
            </div>
            {{-- <div class="col-lg-6">
              <div class="card bg-gradient-danger border-0">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0 text-white">Performance</h5>
                      <span class="h2 font-weight-bold mb-0 text-white">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                        <i class="ni ni-spaceship"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap text-light">Since last month</span>
                  </p>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>

      <br>
      <br>
      <br>

      <br>
      <br>
      <br>

      <br>
      <br>

      @include('partials.dash._footer')

    </div>
  </div>
  
  @include('partials.dash._scripts')
</body>

</html>